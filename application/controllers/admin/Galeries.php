<?php
class Galeries extends CI_Controller{
	
	function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('M_galeri','m_galeri');
        $this->load->model('M_galeries','m_galeries');
        $this->load->library('upload');
    }

    function index(){
        $x['galeriess']=$this->m_galeries->get_all_galeries();
        $x['galeri']=$this->m_galeri->get_all_galeri();
        $this->load->view('admin/v_galeries',$x);
    }

    function simpan_galeries(){
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
                $config['width']= 740;
                $config['height']= 500;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar=$gbr['file_name'];
                $jadwal=$this->input->post('xjadwal');
                // $galeries=strip_tags(htmlspecialchars($this->input->post('xgaleries',TRUE),ENT_QUOTES));
                // $deskripsi=strip_tags(htmlspecialchars($this->input->post('xdesc',TRUE),ENT_QUOTES));
                // $harga=strip_tags(htmlspecialchars($this->input->post('xprice',TRUE),ENT_QUOTES));
                // $diskon=strip_tags(htmlspecialchars($this->input->post('xdisc',TRUE),ENT_QUOTES));
                            
                $this->m_galeries->simpan_galeries($jadwal,$gambar);
                echo $this->session->set_flashdata('msg','success');
                redirect('admin/galeries');
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/galeries');
            }
                     
        }else{
            redirect('admin/galeries');
        }
                
    }


    function update_galeries(){
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
                $config['width']= 740;
                $config['height']= 500;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar=$gbr['file_name'];
                $jadwal=$this->input->post('xjadwal');
                $galeries=strip_tags(htmlspecialchars($this->input->post('xgaleries',TRUE),ENT_QUOTES));
                // $deskripsi=strip_tags(htmlspecialchars($this->input->post('xdesc',TRUE),ENT_QUOTES));
                // $harga=strip_tags(htmlspecialchars($this->input->post('xprice',TRUE),ENT_QUOTES));
                // $diskon=strip_tags(htmlspecialchars($this->input->post('xdisc',TRUE),ENT_QUOTES));
                $kode=$this->input->post('xkode');
                            
                $this->m_galeries->update_galeries($kode,$jadwal,$gambar);
                echo $this->session->set_flashdata('msg','success');
                redirect('admin/galeries');
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/galeries');
            }
                     
        }else{
            $jadwal=$this->input->post('xjadwal');
            $galeries=strip_tags(htmlspecialchars($this->input->post('xgaleries',TRUE),ENT_QUOTES));
            // $deskripsi=strip_tags(htmlspecialchars($this->input->post('xdesc',TRUE),ENT_QUOTES));
            // $harga=strip_tags(htmlspecialchars($this->input->post('xprice',TRUE),ENT_QUOTES));
            // $diskon=strip_tags(htmlspecialchars($this->input->post('xdisc',TRUE),ENT_QUOTES));
            $kode=$this->input->post('xkode');
                            
            $this->m_galeries->update_galeries_no_img($kode,$galeri);
            echo $this->session->set_flashdata('msg','success');
            redirect('admin/galeries');
        }
                
    }

    function hapus_galeries(){
        $kode=$this->input->post('kode');
        $this->m_galeries->hapus_galeries($kode);
        echo $this->session->set_flashdata('msg','success-hapus');
        redirect('admin/galeries');
    }

}
