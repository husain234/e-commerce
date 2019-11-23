<?php

/**
* 
*/
class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_login');
	}

	function index() {
		$user = $this->session->userdata('level');
		if (empty($user)) {
			$this->load->view('v_login');
		} else {
			if ($user == '1') {
				redirect('admin/home');
			} elseif ($user == '2') {
				redirect('pasar/home');
			} elseif ($user == '3') {
				redirect('pangan/home');
			} else {
				redirect('login/logout');
			}
		}
		
		
	}

	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->M_login->login_pasar($username, $password);

		if (!empty($cek)) {
			$cek = $cek[0];
			$user['id'] = $cek['id_user'];
			$user['nama'] = $cek['nama_user'];
			$user['username'] = $cek['username'];
			$user['password'] = $cek['password'];
			$user['level'] = $cek['level'];
			$user['idpasar'] = $cek['id_pasar'];
			$user['pasar'] = $cek['nama_pasar'];

			$this->session->set_userdata($user);
			if ($cek['id_level'] == '1') {
				redirect('admin/home');
			} elseif ($cek['id_level'] == '2') {
				redirect('pasar/home');
			} elseif ($cek['id_level'] == '3') {
				redirect('pangan/home');
			} else {
				redirect('login/logout');
			}
			
		} else {
			$cekadmin = $this->M_login->login_admin($username, $password);
			if (!empty($cekadmin)) {
				$cekadmin = $cekadmin[0];
				$user['id'] = $cekadmin['id_user'];
				$user['nama'] = $cekadmin['nama_user'];
				$user['username'] = $cekadmin['username'];
				$user['password'] = $cekadmin['password'];
				$user['level'] = $cekadmin['level'];
				$user['idpasar'] = $cekadmin['id_pasar'];
				$user['pasar'] = $cekadmin['nama_pasar'];

				$this->session->set_userdata($user);

				if ($cekadmin['id_level'] == '1') {
					redirect('admin/home');
				} elseif ($cekadmin['id_level'] == '2') {
					redirect('pasar/home');
				} elseif ($cekadmin['id_level'] == '3') {
					redirect('pangan/home');
				} else {
					redirect('login/logout');
				}
			} else {
				# code...
			}
			
			redirect('login/logout');
		}
		
	}

	function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
 
}
?>
