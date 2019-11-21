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

		$cek = $this->M_login->login($username, $password);

		if (!empty($cek)) {
			$cek = $cek[0];
			$user['id'] = $cek['id_user'];
			$user['nama'] = $cek['nama_user'];
			$user['username'] = $cek['username'];
			$user['password'] = $cek['password'];
			$user['level'] = $cek['id_level'];
			$user['pasar'] = $cek['id_pasar'];

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
			redirect('login/logout');
		}
		
	}

	function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
 
}
?>
