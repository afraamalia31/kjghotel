<?php
class M_reviews extends CI_Model{
	
	function get_all_reviews(){
		$hsl=$this->db->query("SELECT * FROM reviews ORDER BY review_id DESC");
		return $hsl;
	}

	function simpan_reviews($nama,$des, $tanggal, $gambar){
		$hsl=$this->db->query("INSERT INTO reviews(review_nama,review_des, review_tanggal, review_gambar) VALUES ('$nama','$des', '$tanggal', '$gambar')");
		return $hsl;
	}

	function update_reviews($kode,$nama,$des,$tanggal,$gambar){
		$hsl=$this->db->query("UPDATE reviews SET review_nama='$nama',review_des='$des', review_tanggal='$tanggal', review_gambar='$gambar' WHERE review_id='$kode'");
		return $hsl;
	}
	// Fungsi Tambahan
	function update_reviews_no_img($kode,$nama,$des,$tanggal){
		$hsl=$this->db->query("UPDATE reviews SET review_nama='$nama',review_des='$des', review_tanggal='$tanggal' WHERE review_id='$kode'");
		return $hsl;
	}
	function hapus_reviews($kode){
		$hsl=$this->db->query("DELETE FROM reviews WHERE review_id='$kode'");
		return $hsl;
	}
}
