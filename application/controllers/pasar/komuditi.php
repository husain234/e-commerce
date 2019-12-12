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
				$data['komuditi'] = $this->M_pasar->idkomuditi();
				$this->load->view('pasar/v_komuditi',$data);
			} else {
				redirect('../login/logout');
			}
			
		}
	
	}

	public function tambahkomuditi() {
		$namabarang = $this->input->post('namabarang');

		$this->M_pasar->tambahkomoditi($namabarang);
		redirect('pasar/komuditi');
	}
}
?>
