<?php
class M_galeri extends CI_Model{

	function get_all_galeri(){
		$hsl=$this->db->get('galeri');
		return $hsl;
	}

	function simpan_galeri($nama){
		$hsl=$this->db->query("INSERT INTO galeri (nama) VALUES ('$nama')");
		return $hsl;
	}

	function update_galeri($kode,$nama){
		$hsl=$this->db->query("UPDATE galeri SET nama='$nama' WHERE kd_galeri='$kode'");
		return $hsl;
	}

	function hapus_galeri($kode){
		$hsl=$this->db->query("DELETE FROM galeri WHERE kd_galeri='$kode'");
		return $hsl;
	}
}
