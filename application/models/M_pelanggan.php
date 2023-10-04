<?php
class M_pelanggan extends CI_Model{
	
	function get_all_pelanggan(){
		$hsl=$this->db->query("SELECT * FROM pelanggan ORDER BY id_pelanggan DESC");
		return $hsl;
	}

	function simpan_pelanggan($nama,$gender,$telp,$alamat,$email,$kamar){
		$hsl=$this->db->query("INSERT INTO pelanggan(nama_pelanggan,gender,no_telp,alamat,email,tipe_kamar) VALUES ('$nama','$gender','$telp','$alamat','$email','$kamar')");
		return $hsl;
	}

	function update_pelanggan($kode,$nama,$gender,$telp,$alamat,$email,$kamar){
		$hsl=$this->db->query("UPDATE pelanggan SET nama_pelanggan='$nama',gender='$gender',no_telp='$telp',alamat='$alamat',email='$email',tipe_kamar='$kamar' WHERE id_pelanggan='$kode'");
		return $hsl;
	}

	function hapus_pelanggan($kode){
		$hsl=$this->db->query("DELETE FROM pelanggan WHERE id_pelanggan='$kode'");
		return $hsl;
	}
}
