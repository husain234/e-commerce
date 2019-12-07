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
		$data['banner'] = $this->M_user->imgbanner();
		$kecamatan = $this->input->post('IdKecamatan');
		if (!empty($kecamatan)) {
			$data['komuditiharga'] = $this->M_user->infohargas($kecamatan);
			$data['kecamatan'] = $this->M_user->kecamatan();
			$this->load->view('v_infoharga',$data);
		} else {
			$data['komuditiharga'] = $this->M_user->infoharga();
			$data['kecamatan'] = $this->M_user->kecamatan();
			$this->load->view('v_infoharga',$data);
		}
	}
}
?>
