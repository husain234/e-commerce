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
		$data['banner'] = $this->M_user->imgbanner();
		$submit = $this->input->post('submit');
		$thn = $this->input->post('thn');
		$bln = $this->input->post('bln');
		if (isset($submit)) {
			$data['sedia'] = $this->M_user->informasifilter($bln, $thn);
			$this->load->view('v_ketersediaan',$data);
		} else {
			$data['sedia'] = $this->M_user->informasi();
			$this->load->view('v_ketersediaan',$data);
		}
	}
}
?>