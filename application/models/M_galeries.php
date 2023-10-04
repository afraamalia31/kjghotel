<?php
class M_galeries extends CI_Model{

	function get_all_galeries(){
		$hsl=$this->db->query("SELECT galeries.*,nama FROM galeries JOIN galeri ON galeries.kd_galeri=galeri.kd_galeri");
		return $hsl;
	}

	function simpan_galeries($jadwal, $gambar){
		$hsl=$this->db->query("INSERT INTO galeries (kd_galeri,gambar) VALUES ('$jadwal','$gambar')");
		return $hsl;
	}

	function update_galeries($kode,$jadwal,$gambar){
		$hsl=$this->db->query("UPDATE galeries SET kd_galeri='$jadwal', gambar='$gambar' WHERE kd_galeries='$kode'");
		return $hsl;
	}

	function update_galeries_no_img($kode,$jadwal){
		$hsl=$this->db->query("UPDATE galeries SET kd_galeri='$jadwal' WHERE kd_galeries='$kode'");
		return $hsl;
	}

	function hapus_galeries($kode){
		$hsl=$this->db->query("DELETE FROM galeries WHERE kd_galeries='$kode'");
		return $hsl;
	}
}

