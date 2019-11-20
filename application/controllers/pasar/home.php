<?php

/**
* 
*/
class Home extends CI_Controller
{

	function index() {
		$user = $this->session->userdata('level');
		if (empty($user)) {
			redirect('../login');
		} else {
			$this->load->view('pasar/v_home');
		}

	}
}
?>
