komuditi.php<?php

/**
* 
*/
class stok extends CI_Controller
{

	function index() {
		$user = $this->session->userdata('level');
		if (empty($user)) {
			redirect('../login/logout');
		} else {
			if ($user == 'pangan') {
				$this->load->view('pangan/v_stok');
			} else {
				redirect('../login/logout');
			}
			
		}
		
	}
}
?>