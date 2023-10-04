<?php
class M_blog extends CI_Model
{

	function get_all_blog()
	{
		$hsl = $this->db->get('blog');
		return $hsl;
	}

	function simpan_blog($judul, $isi, $author, $tanggal, $link, $gambar)
	{
		$hsl = $this->db->query("INSERT INTO blog (blog_gambar,blog_judul,blog_isi,blog_author,blog_tanggal,blog_link) VALUES ('$gambar','$judul','$isi','$author','$tanggal','$link')");
		return $hsl;
	}

	// function simpan_blog($judul,$isi,$author,$tanggal,$link,$gambar)
	// {
	// 	$hsl = $this->db->query("INSERT INTO `blog` (`blog_judul`, `blog_isi`, `blog_author`, `blog_tanggal`, `blog_link`, `blog_gambar`) VALUES ('$judul','$isi','$author','$tanggal,'$link','$gambar')");
	// 	return $hsl;
	// }

	function get_blog_by_kode($kode)
	{
		$hsl = $this->db->query("SELECT * FROM blog WHERE blog_id='$kode'");
		return $hsl;
	}

	function update_blog($kode, $judul, $isi, $author, $tanggal, $link, $gambar)
	{
		$hsl = $this->db->query("UPDATE blog SET blog_judul='$judul',blog_isi='$isi',blog_author='$author',blog_tanggal='$tanggal',blog_link='$link',blog_gambar='$gambar' WHERE blog_id='$kode'");
		return $hsl;
	}

	function update_blog_no_img($kode, $judul, $isi, $author, $tanggal, $link)
	{
		$hsl = $this->db->query("UPDATE blog SET blog_judul='$judul',blog_isi='$isi',blog_author='$author',blog_tanggal='$tanggal',blog_link='$link' WHERE blog_id='$kode'");
		return $hsl;
	}

	function hapus_blog($kode)
	{
		$hsl = $this->db->query("DELETE FROM blog WHERE blog_id='$kode'");
		return $hsl;
	}
}
