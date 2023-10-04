<?php
class Galeri extends CI_Controller{
	
	function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('M_galeri','m_galeri');
        $this->load->library('upload');
    }

    function index(){
    	$x['galeri']=$this->m_galeri->get_all_galeri();
    	$this->load->view('admin/v_galeri',$x);
    }

    function simpan_galeri(){
    	$nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
    	$this->m_galeri->simpan_galeri($nama);
    	redirect('admin/galeri');
    }

    function update_galeri(){
    	$kode=$this->input->post('xkode');
    	$nama=htmlspecialchars($this->input->post('xnama2',TRUE),ENT_QUOTES);
    	// $jam=htmlspecialchars($this->input->post('xjam2',TRUE),ENT_QUOTES);
    	$this->m_galeri->update_galeri($kode,$nama);
    	redirect('admin/galeri');
    }

    function hapus_galeri(){
    	$kode=$this->input->post('kode');
    	$this->m_galeri->hapus_galeri($kode);
    	redirect('admin/galeri');
    }
}
