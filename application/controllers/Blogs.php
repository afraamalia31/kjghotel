<?php
class Blogs extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_blog','m_blog');
		$this->load->model('M_pengunjung','m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}

	function index(){
		$x['data']=$this->m_blog->get_all_blog();
		$this->load->view('frontend/blogs_view',$x);
	}
}
