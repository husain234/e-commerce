<?php

/**
* 
*/
class komuditi extends CI_Controller
{

	function index() {
		$user = $this->session->userdata('level');
		if (empty($user)) {
			redirect('../login/logout');
		} else {
			if ($user == 'pasar') {
				$this->load->view('pasar/v_komuditi');
			} else {
				redirect('../login/logout');
			}
			
		}
	
	}
}
?>
