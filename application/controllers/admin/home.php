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

	function hapusdata($id)
	{
		$id = $this->input->post('id_user');

		$this->M_home->hapusdata($id);
		redirect('admin/home');
	}
}
?>
