<?php

/**
* 
*/
class sedia extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_user');
	}

	function index() {
		$data['sedia'] = $this->M_user->informasi();
		$this->load->view('v_ketersediaan',$data);
	}
}
?>