<?php 
/**
 * 
 */
class M_login extends CI_Model {
	
	public function login($username, $password) {
		$periksa = $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password'");

		return $periksa->result_array();
		
	}
}
?>