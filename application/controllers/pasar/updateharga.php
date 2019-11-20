<?php

/**
* 
*/
class updateharga extends CI_Controller
{

	function index() {
		$user = $this->session->userdata('level');
		if (empty($user)) {
			redirect('../login/logout');
		} else {
			if ($user == 'pasar') {
				$this->load->view('pasar/update_harga');
			} else {
				redirect('../login/logout');
			}
			
		}
		
	}
}
?>
