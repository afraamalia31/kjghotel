<?php
class Blogs extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('M_blog', 'm_blog');
		$this->load->library('upload');
	}

	function index()
	{
		$x['blog'] = $this->m_blog->get_all_blog();
		$this->load->view('admin/v_blog', $x);
	}

	function add_new()
	{
		$this->load->view('admin/v_add_blog');
	}

	function edit()
	{
		$kode = $this->uri->segment(4);
		$x['blog'] = $this->m_blog->get_blog_by_kode($kode);
		$this->load->view('admin/v_edit_blog', $x);
	}

	function simpan_blog()
	{
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 770;
				$config['height'] = 420;
				$config['new_image'] = './assets/images/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name'];
				$judul = strip_tags(htmlspecialchars($this->input->post('xjudul', TRUE), ENT_QUOTES));
				$isi = $this->input->post('xisi', TRUE);
				$author = $this->input->post('xauthor', TRUE);
				$tanggal = $this->input->post('xtanggal', TRUE);
				$link = $this->input->post('xlink', TRUE);

				$this->m_blog->simpan_blog($judul,$isi,$author,$tanggal,$link,$gambar);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/blogs');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/blogs');
			}
		} else {
			redirect('admin/blogs');
		}
	}

	function update_blog()
	{
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 770;
				$config['height'] = 420;
				$config['new_image'] = './assets/images/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name'];
				$kode = $this->input->post('kode');
				$judul = strip_tags(htmlspecialchars($this->input->post('xjudul', TRUE), ENT_QUOTES));
				$isi = $this->input->post('xisi', TRUE);
				$author = $this->input->post('xauthor', TRUE);
				$tanggal = $this->input->post('xtanggal', TRUE);
				$link = $this->input->post('xlink', TRUE);

				$this->m_blog->update_blog($kode,$judul,$isi,$author,$tanggal,$link,$gambar);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/blogs');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/blogs');
			}
		} else {
			$kode = $this->input->post('kode');
			$judul = strip_tags(htmlspecialchars($this->input->post('xjudul', TRUE), ENT_QUOTES));
			$isi = $this->input->post('xisi', TRUE);
			$author = $this->input->post('xauthor', TRUE);
			$tanggal = $this->input->post('xtanggal', TRUE);
			$link = $this->input->post('xlink', TRUE);

			$this->m_blog->update_blog_no_img($kode,$judul,$isi,$author,$tanggal,$link);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/blogs');
		}
	}

	function hapus_blog()
	{
		$kode = $this->input->post('kode2');
		$this->m_blog->hapus_blog($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/blogs');
	}
}

