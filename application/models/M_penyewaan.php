<?php
class M_pelanggan extends CI_Model{
	
	function get_all_pelanggan(){
		$hsl=$this->db->query("SELECT penyewaan.*,pelanggan FROM penyewaan JOIN pelanggan ON penyewaan.id_pelanggan=pelanggan.id_pelanggan");
		return $hsl;
	}

	function simpan_pelanggan($pelanggan,$gender,$telp,$alamat,$email,$kamar){
		$hsl=$this->db->query("INSERT INTO pelanggan(id_pelanggan,tgl_sewa,tgl_cekin,tgl_cekout,total_extend,status_bayar) VALUES ('$pelanggan','$gender','$telp','$alamat','$email','$kamar')");
		return $hsl;
	}

	function update_pelanggan($kode,$pelanggan,$gender,$telp,$alamat,$email,$kamar){
		$hsl=$this->db->query("UPDATE pelanggan SET pelanggan_pelanggan='$pelanggan',gender='$gender',no_telp='$telp',alamat='$alamat',email='$email',tipe_kamar='$kamar' WHERE id_pelanggan='$kode'");
		return $hsl;
	}

	function hapus_pelanggan($kode){
		$hsl=$this->db->query("DELETE FROM pelanggan WHERE id_pelanggan='$kode'");
		return $hsl;
	}
}
