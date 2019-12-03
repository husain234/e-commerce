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
		$this->load->model('M_user');
	}

	function index()
	{
		$data['pasar'] = $this->M_user->getpasar();
		$data['level'] = $this->M_user->getlevel();
		$this->load->view('admin/v_user', $data);
	}

	function insertadmin()
	{
		$nama = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pasar = $this->input->post('pasar');
		$level = $this->input->post('id_level');

		$this->M_user->insertuser($nama, $username, $password, $level, $pasar);

		redirect('admin/Tambahadmin');
	}

}
?>