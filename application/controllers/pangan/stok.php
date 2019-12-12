<?php

/**
* 
*/
class stok extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_pangan');
	}

	function index() {
		$user = $this->session->userdata('level');
		if (empty($user)) {
			redirect('../login/logout');
		} else {
			if ($user == 'Admin Ketahanan Pangan') {
				$data['id_komuditi'] = $this->M_pangan->idkomuditi();
				$data['stok'] = $this->M_pangan->stok();
				$data['bahanpokok'] = $this->M_pangan->bahanpokok();
				$this->load->view('pangan/v_stok', $data);
			} else {
				redirect('../login/logout');
			}
			
		}
		
	}

	public function datastok() {
		$id = $this->input->post('id',TRUE);

        $nama = $this->M_pangan->informasi($id)->result_array();
        echo json_encode($nama);
	}

	public function inputstok()	{
		$idkomuditi = $this->input->post('idkomuditi');
		$jumlah = $this->input->post('jumlah');
		$kebutuhan = $this->input->post('kebutuhan');
		$idinformasi = $this->input->post('id_informasi');

		$cek = $this->M_pangan->cekstokkomuditi($idkomuditi);

		if ($cek == 1) {
			$this->M_pangan->updatestok($idinformasi, $idkomuditi, $jumlah, $kebutuhan);
			redirect('pangan/stok');
		} else {
			$this->M_pangan->inputstok($idkomuditi, $jumlah, $kebutuhan);
			redirect('pangan/stok');
		}

		
	}

	public function inputpokok() {
		$namabahan = $this->input->post('namabarang');

		$cek = $this->M_pangan->cekpokok($namabahan)->row();

		if (!empty($cek)) {
			$this->M_pangan->updatepokok($cek->id_bahan, $namabahan);
			redirect('pangan/stok');
		} else {
			$this->M_pangan->inputpokok($namabahan);
			redirect('pangan/stok');
		}

		
	}
}
?>
