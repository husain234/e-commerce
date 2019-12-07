<?php

/**
* 
*/
class Beranda extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_user');
	}

	function index() {
		$data['avgkomuditi'] = $this->M_user->avgkomuditi();
		$data['banner'] = $this->M_user->imgbanner();
		$this->load->view('v_beranda',$data);
	}
}
?>
