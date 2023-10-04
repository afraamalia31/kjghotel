<?php
class Pelanggan extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('M_pelanggan','m_pelanggan');
	}

	function index(){
		$x['pelanggan']=$this->m_pelanggan->get_all_pelanggan();
		$this->load->view('admin/v_pelanggan',$x);
	}

	function simpan_pelanggan(){
		$nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
		$gender=htmlspecialchars($this->input->post('xgender',TRUE),ENT_QUOTES);
		$telp=htmlspecialchars($this->input->post('xtelp',TRUE),ENT_QUOTES);
		$alamat=htmlspecialchars($this->input->post('xalamat',TRUE),ENT_QUOTES);
		$email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
		$kamar=htmlspecialchars($this->input->post('xkamar',TRUE),ENT_QUOTES);
		$this->m_pelanggan->simpan_pelanggan($nama,$gender,$telp,$alamat,$email,$kamar);
		redirect('admin/pelanggan');
	}

	function update_pelanggan(){
		$kode=$this->input->post('xkode');
		$nama=htmlspecialchars($this->input->post('xnama2',TRUE),ENT_QUOTES);
		$gender=htmlspecialchars($this->input->post('xgender2',TRUE),ENT_QUOTES);
		$telp=htmlspecialchars($this->input->post('xtelp2',TRUE),ENT_QUOTES);
		$alamat=htmlspecialchars($this->input->post('xalamat2',TRUE),ENT_QUOTES);
		$email=htmlspecialchars($this->input->post('xemail2',TRUE),ENT_QUOTES);
		$kamar=htmlspecialchars($this->input->post('xkamar2',TRUE),ENT_QUOTES);
		$this->m_pelanggan->update_pelanggan($kode,$nama,$gender,$telp,$alamat,$email,$kamar);
		redirect('admin/pelanggan');
	}

	function hapus_pelanggan(){
		$kode=$this->input->post('kode');
		$this->m_pelanggan->hapus_pelanggan($kode);
		redirect('admin/pelanggan');
	}
}
