<?php 
/**
 * 
 */
class M_pangan extends CI_Model {

	// Update komoditi
	public function idkomuditi() {
		$query = $this->db->query("SELECT * FROM komuditi");
		return $query->result_array();
	}
	
	
}
?>