<?php

/**
* 
*/
class user extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		 
		// load model 
		$this->load->model('M_user');
	}

	function index() {
		$user = $this->session->userdata('level');
		if (empty($user)) {
			redirect('../login/logout');
		} else {
			if ($user == 'Admin Kominfo') {
				$data['pasar'] = $this->M_user->getpasar();
				$data['level'] = $this->M_user->getlevel();
				$this->load->view('admin/v_user', $data);
			} else {
				redirect('../login/logout');
			}
			
		}
		
	}
}
?>
