<?php

/**
* 
*/
class infoharga extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_user');
	}

	function index() {
		$data['komuditiharga'] = $this->M_user->infoharga();
		$data['kecamatan'] = $this->M_user->kecamatan();
		$this->load->view('v_infoharga',$data);
	}
}
?>
