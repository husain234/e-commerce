<?php

/**
* 
*/
class pasar extends CI_Controller
{

	function index() {
		$user = $this->session->userdata();
		if (empty($user)) {
			redirect('../login');
		} else {
			$this->load->view('admin/v_pasar');
		}
	}
}
?>
