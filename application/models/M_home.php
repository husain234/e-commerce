<?php

/**
* 
*/
class M_home extends CI_Model
{
	
	public function tampildata() {
		$query = $this->db->query("SELECT * FROM user INNER JOIN level ON use.id_level = level.id_level");
 		return $query->result_array();
	}
}