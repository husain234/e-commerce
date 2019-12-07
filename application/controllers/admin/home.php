<?php

/**
* 
*/
class Home extends CI_Controller
{
		
	function __construct() {
		parent::__construct();
		$this->load->model('M_home');
	}

	function index() {
	
		 $user = $this->session->userdata();
		 if (empty($user)) {
		 	redirect('../login');
		 } else {
		 	$data['user'] = $this->M_home->selectuser();
		 	$this->load->view('admin/v_home',$data);
		 }

	}

	function tampil()
	{
		$data['data'] = $this->M_home->tampildata();
		$this->load->view('admin/v_home',$data);
	}

	function hapusdata() {
		$id = $this->uri->segment(4);

		$this->M_home->hapusdata($id);
		redirect('admin/home');
	}

	function editdata()	{
		$id = $this->uri->segment(4);

		// $this->M_home->editdata($id);
		// redirect('admin/home');
	}
}
?>
