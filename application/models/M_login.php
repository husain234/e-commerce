<?php 
/**
 * 
 */
class M_login extends CI_Model {
	
	public function login($username, $password) {
		$periksa = $this->db->query("SELECT * FROM user a INNER JOIN level b ON a.id_level = b.id_level WHERE username='$username' AND password='$password'");

		return $periksa->result_array();
		
	}
}
?>