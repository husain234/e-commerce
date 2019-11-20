<?php

/**
* 
*/
class user extends CI_Controller
{

	function index() {
		$user = $this->session->userdata('level');
		if (empty($user)) {
			redirect('../login/logout');
		} else {
			if ($user == 'admin') {
				$this->load->view('admin/v_user');
			} else {
				redirect('../login/logout');
			}
			
		}
		
	}
}
?>
