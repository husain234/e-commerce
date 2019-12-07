<?php

/**
* 
*/
class Kami extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('M_user');
	}


	function index()
	{
		$data['banner'] = $this->M_user->imgbanner();
		$this->load->view('v_kami',$data);
		
	}
}
?>
