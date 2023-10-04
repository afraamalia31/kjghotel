<?php
class Events extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('M_events','m_events');
		$this->load->library('upload');
	}

	function index(){
		$x['events']=$this->m_events->get_all_events();
		$this->load->view('admin/v_event',$x);
	}

	// function simpan_events(){
	// 	$nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
	// 	$jadwal=htmlspecialchars($this->input->post('xjadwal',TRUE),ENT_QUOTES);
	// 	$tanggal=htmlspecialchars($this->input->post('xtanggal',TRUE),ENT_QUOTES);
	// 	$this->m_events->simpan_events($nama,$jadwal,$tanggal);
	// 	redirect('admin/events');
	// }
    
	function simpan_events(){
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
		        $jadwal=htmlspecialchars($this->input->post('xjadwal',TRUE),ENT_QUOTES);
		        $tanggal=htmlspecialchars($this->input->post('xtanggal',TRUE),ENT_QUOTES);
                            
                $this->m_events->simpan_events($nama,$jadwal,$tanggal,$gambar);
                echo $this->session->set_flashdata('msg','success');
                redirect('admin/events');
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/events');
            }
                     
        }else{
            redirect('admin/events');
        }
    }

	function update_events(){
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
		        $jadwal=htmlspecialchars($this->input->post('xjadwal2',TRUE),ENT_QUOTES);
		        $tanggal=htmlspecialchars($this->input->post('xtanggal2',TRUE),ENT_QUOTES);
                            
                $this->m_events->update_events($kode,$nama,$jadwal,$tanggal,$gambar);
                echo $this->session->set_flashdata('msg','success');
                redirect('admin/events');
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/events');
            }
                     
        }else{
            $kode=$this->input->post('xkode');
            $nama=htmlspecialchars($this->input->post('xnama2',TRUE),ENT_QUOTES);
		    $jadwal=htmlspecialchars($this->input->post('xjadwal2',TRUE),ENT_QUOTES);
		    $tanggal=htmlspecialchars($this->input->post('xtanggal2',TRUE),ENT_QUOTES);
                            
            $this->m_events->update_events_no_img($kode,$nama,$jadwal,$tanggal);
            echo $this->session->set_flashdata('msg','success');
            redirect('admin/events');
        }
    }

	// function update_events(){
	// 	$kode=$this->input->post('xkode');
	// 	$nama=htmlspecialchars($this->input->post('xnama2',TRUE),ENT_QUOTES);
	// 	$jadwal=htmlspecialchars($this->input->post('xjadwal2',TRUE),ENT_QUOTES);
	// 	$tanggal=htmlspecialchars($this->input->post('xtanggal2',TRUE),ENT_QUOTES);
	// 	$this->m_events->update_events($kode,$nama,$jadwal,$tanggal);
	// 	redirect('admin/events');
	// }

	function hapus_events(){
		$kode=$this->input->post('kode');
		$this->m_events->hapus_events($kode);
		redirect('admin/events');
	}
}
