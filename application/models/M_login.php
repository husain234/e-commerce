<?php 
/**
 * 
 */
class M_login extends CI_Model {
	
	public function login_pasar($username, $password) {
		$periksa = $this->db->query("SELECT * FROM user a INNER JOIN level b ON a.id_level = b.id_level INNER JOIN pasar c ON a.id_pasar = c.id_pasar WHERE username='$username' AND password='$password'");

		return $periksa->result_array();
		
	}

	public function login_admin($username, $password) {
		$periksa = $this->db->query("SELECT * FROM user a INNER JOIN level b ON a.id_level = b.id_level WHERE username='$username' AND password='$password'");

		return $periksa->result_array();
	}
}
?>