<?php

/**
* 
*/
class komuditi extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_pasar');
	}

	function index() {
		$user = $this->session->userdata('level');
		if (empty($user)) {
			redirect('../login/logout');
		} else {
			if ($user == 'Admin Perdagangan') {
				$this->load->view('pasar/v_komuditi');
			} else {
				redirect('../login/logout');
			}
			
		}
	
	}

	public function tambahkomuditi() {
		$idbarang = $this->input->post('idbarang');
		$namabarang = $this->input->post('namabarang');

		$this->M_pasar->tambahkomoditi($idbarang,$namabarang);
		redirect('pasar/komuditi');
	}
}
?>
