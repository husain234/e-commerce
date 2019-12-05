<?php

/**
* 
*/
class M_home extends CI_Model
{
	
	public function selectuser() {
		$query = $this->db->query("SELECT * FROM user a LEFT JOIN level b ON a.id_level = b.id_level");
 		return $query->result_array();
	}

	public function hapusdata($id)
	{
		$query = $this->db->query("DELETE from user where id_user = '$id' ");
			return $query;
	}
}