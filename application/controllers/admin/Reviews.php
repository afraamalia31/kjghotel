<?php
class reviews extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('M_reviews','m_reviews');
		$this->load->library('upload');
	}

	function index(){
		$x['reviews']=$this->m_reviews->get_all_reviews();
		$this->load->view('admin/v_review',$x);
	}

    
	function simpan_reviews(){
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name']))
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 770;
                $config['height']= 420;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar=$gbr['file_name'];
				$nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
		        $des=htmlspecialchars($this->input->post('xdes',TRUE),ENT_QUOTES);
		        $tanggal=htmlspecialchars($this->input->post('xtanggal',TRUE),ENT_QUOTES);
                            
                $this->m_reviews->simpan_reviews($nama,$des,$tanggal,$gambar);
                echo $this->session->set_flashdata('msg','success');
                redirect('admin/reviews');
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/reviews');
            }
                     
        }else{
            redirect('admin/reviews');
        }
    }

	function update_reviews(){
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name']))
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 770;
                $config['height']= 420;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar=$gbr['file_name'];
                $kode=$this->input->post('xkode');
                $nama=htmlspecialchars($this->input->post('xnama2',TRUE),ENT_QUOTES);
		        $des=htmlspecialchars($this->input->post('xdes2',TRUE),ENT_QUOTES);
		        $tanggal=htmlspecialchars($this->input->post('xtanggal2',TRUE),ENT_QUOTES);
                            
                $this->m_reviews->update_reviews($kode,$nama,$des,$tanggal,$gambar);
                echo $this->session->set_flashdata('msg','success');
                redirect('admin/reviews');
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/reviews');
            }
                     
        }else{
            $kode=$this->input->post('xkode');
            $nama=htmlspecialchars($this->input->post('xnama2',TRUE),ENT_QUOTES);
		    $des=htmlspecialchars($this->input->post('xdes2',TRUE),ENT_QUOTES);
		    $tanggal=htmlspecialchars($this->input->post('xtanggal2',TRUE),ENT_QUOTES);
                            
            $this->m_reviews->update_reviews_no_img($kode,$nama,$des,$tanggal);
            echo $this->session->set_flashdata('msg','success');
            redirect('admin/reviews');
        }
    }

	function hapus_reviews(){
		$kode=$this->input->post('kode');
		$this->m_reviews->hapus_reviews($kode);
		redirect('admin/reviews');
	}
}
