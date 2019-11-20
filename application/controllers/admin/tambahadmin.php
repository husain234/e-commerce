<?php

/**
* 
*/
class Tambahadmin extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		 
		// load model 
		$this->load->model('M_User');
	}

	function index()
	{
		$this->load->view('admin/v_user.php');
	}

	function insertadmin()
	{
		$this->M_User->insertdata();
		redirect('admin/Tambahadmin');
	}

}
?>