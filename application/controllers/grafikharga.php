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
		$data['banner'] = $this->M_user->imgbanner();
		$kecamatan = $this->input->post('IdKecamatan');
		$komuditi = $this->input->post('IdKomuditi');
		$tahun = $this->input->post('tahun');
		if (!empty($kecamatan) AND !empty($komuditi) AND !empty($tahun)) {
			$data['kecamatan'] = $this->M_user->kecamatan();
			$data['komuditi'] = $this->M_user->komuditi();
			$data['updateharga'] = $this->M_user->updatehargas($kecamatan, $komuditi, $tahun);
			$this->load->view('v_grafikharga',$data);
		} else {
			$data['kecamatan'] = $this->M_user->kecamatan();
			$data['komuditi'] = $this->M_user->komuditi();
			$data['updateharga'] = $this->M_user->updateharga();
			$this->load->view('v_grafikharga',$data);
		}
	}
}
?>
