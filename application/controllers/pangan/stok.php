<?php

/**
* 
*/
class stok extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_pangan');
	}

	function index() {
		$user = $this->session->userdata('level');
		if (empty($user)) {
			redirect('../login/logout');
		} else {
			if ($user == 'Admin Ketahanan Pangan') {
				$data['id_komuditi'] = $this->M_pangan->idkomuditi();
				$this->load->view('pangan/v_stok', $data);
			} else {
				redirect('../login/logout');
			}
			
		}
		
	}
}
?>
