<?php

/**
* 
*/
class pasar extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('M_pasar');
	}

	function index() {
		$user = $this->session->userdata();
		if (empty($user)) {
			redirect('../login');
		} else {
			$data['kecamatan'] = $this->M_pasar->getkecamatan();
			$this->load->view('admin/v_pasar', $data);
		}
	}
}
?>
