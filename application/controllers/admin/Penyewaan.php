<?php
class Penyewaan extends CI_Controller{
	
	function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('M_hotel','m_hotel');
        $this->load->library('upload');
    }

    function index(){
        $data['penyewaan'] = $this->db->query("select * from transaksi order by id_sewa desc limit 10")->result();
		$data['pelanggan'] = $this->db->query("select * from pelanggan order by id_pelanggan desc limit 10")->result();
		$data['kamar'] = $this->db->query("select * from kamar order by id_kamar desc limit 10")->result();

        $this->load->view('admin/v_penyewaan',$data);
    }

	function penyewaan(){

		$data['penyewaan'] = $this->db->query("SELECT * FROM transaksi T, kamar K, pelanggan P WHERE T.id_kamar=K.id_kamar and T.id_pelanggan=P.id_pelanggan")->result();
		
		$this->load->view('admin/penyewaan',$data);
		
	}

	function tambah_penyewaan(){
		$w = array('status_kamar'=>'1');
		$data['kamar'] = $this->m_hotel->edit_data($w,'kamar')->result();
		$data['pelanggan'] = $this->m_hotel->get_data('pelanggan')->result();
		$data['penyewaan'] = $this->m_hotel->get_data('transaksi')->result();

		
		$this->load->view('admin/tambahpenyewaan',$data);
		
	}

	function tambah_penyewaan_act(){
		
		$tgl_bayar = date('Y-m-d H:i:s');
		$pelanggan = $this->input->post('pelanggan');
		$kamar = $this->input->post('kamar');
		$tgl_cekin = $this->input->post('tgl_cekin');
		$tgl_cekout = $this->input->post('tgl_cekout');
		$extend = $this->input->post('extend');
		
		$this->form_validation->set_rules('pelanggan','Nama Pelanggan','required');
		$this->form_validation->set_rules('kamar','Nama Kamar','required');
		$this->form_validation->set_rules('tgl_cekin','Tanggal Check-in','required');
		$this->form_validation->set_rules('tgl_cekout','Tanggal Check-out','required');
		$this->form_validation->set_rules('extend','Harga Extend','required');

		if($this->form_validation->run() != false){
			$data = array(
			'tgl_bayar' => $tgl_bayar,
			'id_pelanggan' => $pelanggan,
			'id_kamar' => $kamar,
			'tgl_cekin' => $tgl_cekin,
			'tgl_cekout' => $tgl_cekout,
			'extend' => $extend,
			'tgl_extend' => '0000-00-00',
			'total_extend' => '0',
			'status_penyewaan' => '0',
			'status_pembayaran' => '0'
			);

			$this->m_hotel->insert_data($data,'transaksi');
			
			// update status kamar yg di sewa
			$d = array('status_kamar' => '0', 'tgl_input' => substr($tgl_bayar, 0, 10));
			$w = array('id_kamar' => $kamar);
			$this->m_hotel->update_data($w,$d,'kamar');
			
			redirect(base_url().'admin/penyewaan');
		}else{
			$w = array('status_kamar'=>'1');
			$data['kamar'] = $this->m_hotel->edit_data($w,'kamar')->result();
			$data['pelanggan'] = $this->m_hotel->get_data('pelanggan')->result();

			
			$this->load->view('admin/tambahpenyewaan',$data);
			
		}
	}

	function hapus_penyewaan($id){
		$w = array('id_sewa' => $id);
		$data = $this->m_hotel->edit_data($w,'transaksi')->row();
		$data = $this->m_hotel->edit_data($w,'penyewaan')->row();
		$ww = array('id_kamar' => $data->id_kamar);
		$data2 = array('status_kamar' => '1');
		$this->m_hotel->update_data($ww,$data2,'kamar');
		$this->m_hotel->delete_data($w,'transaksi');
		redirect(base_url().'admin/penyewaan');
	}

	function transaksi_selesai($id){
		$data['kamar'] = $this->m_hotel->get_data('kamar')->result();
		$data['pelanggan'] = $this->m_hotel->get_data('pelanggan')->result();
		$data['penyewaan'] = $this->db->query("select * from transaksi t, pelanggan p, kamar k  where t.id_kamar = k.id_kamar and t.id_pelanggan=p.id_pelanggan and t.id_sewa='$id'")->result();

		
		$this->load->view('admin/transaksi_selesai',$data);
		
	}

	function transaksi_selesai_act(){
		$id = $this->input->post('id');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$tgl_cekout = $this->input->post('tgl_cekout');
		$tgl_cekin = $this->input->post('tgl_cekin');
		$kamar = $this->input->post('kamar');
		$hkamar = $this->input->post('extend');
		$this->form_validation->set_rules('tgl_akhir','Tanggal Akhir Check-out','required');
		if($this->form_validation->run() != false){
		// menghitung selisih hari 
			$awal_cekin = strtotime($tgl_cekin);
			$akhir_cekout = strtotime($tgl_akhir);
			$selisih = abs(($awal_cekin - $akhir_cekout)/(60*60*24));
			$total_bayar = $hkamar*$selisih;
			// update status penyewaan
			$data = array('status_pembayaran' => '1', 'total_extend' => $total_bayar,'tgl_extend' => $tgl_akhir,'status_penyewaan' => '1');
			//$data3 = array();
			$w = array('id_sewa' => $id);
			$this->m_hotel->update_data($w,$data,'transaksi');
			//$this->m_hotel->update_data($w,$data3,'detail_sewa');
			// update status kamar
			$data2 = array('status_kamar' => '1');
			$w2 = array('id_kamar' => $kamar);
			$this->m_hotel->update_data($w2,$data2,'kamar');
			redirect(base_url().'admin/penyewaan');
		}else{
			$data['kamar'] = $this->m_hotel->get_data('kamar')->result();
			$data['pelanggan'] = $this->m_hotel->get_data('pelanggan')->result();
			$data['penyewaan'] = $this->db->query("select * from penyewaan p, pelanggan a, detail_sewa d, kamar k  where p.id_pelanggan = a.id_pelanggan and p.id_sewa = d.id_sewa and d.id_kamar = k.id_kamar and p.id_sewa='$id'")->result();
			
			
			$this->load->view('admin/transaksi_selesai',$data);
			
		}
	}

	
    
}
