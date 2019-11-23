<?php

/**
* 
*/
class updateharga extends CI_Controller {

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
				$data['id_komuditi'] = $this->M_pasar->idkomuditi();
				$this->load->view('pasar/update_harga',$data);
			} else {
				redirect('../login/logout');
			}
			
		}
		
	}

	public function datakomuditi() {
		$id = $this->input->post('id',TRUE);
		$idpasar = $this->input->post('idpasar',TRUE);

        $nama = $this->M_pasar->komuditi($id, $idpasar)->result_array();
        echo json_encode($nama);
	}

	public function updatekomuditi() {
		$id = $this->input->post('idkomuditi');
		$idh = $this->input->post('idharga');
		$lama = $this->input->post('lamakomuditi');
		$baru = $this->input->post('barukomuditi');
		$idpasar = $this->input->post('id_pasar');

		$cek = $this->M_pasar->cekhargakomuditi($idh, $idpasar);

		if ($cek == 1) {
			$this->M_pasar->updatehargakomuditi($id, $idh, $lama, $baru, $idpasar);
			redirect('pasar/updateharga');
		} else {
			$this->M_pasar->inserthargakomuditi($id, $lama, $baru, $idpasar);
			redirect('pasar/updateharga');
		}

	}
}
?>
