<?php

/**
* 
*/
class grafikharga extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_user');
	}

	function index() {
		$data['kecamatan'] = $this->M_user->kecamatan();
		$data['komuditi'] = $this->M_user->komuditi();
		$data['updateharga'] = $this->M_user->updateharga();
		$this->load->view('v_grafikharga',$data);
	}
}
?>
