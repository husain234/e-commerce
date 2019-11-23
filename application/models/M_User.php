<?php

/**
 * 
 */
 class M_user extends CI_Model {
 	
 	public function avgkomuditi() {
 		$query = $this->db->query("SELECT nama_komuditi, avg(harga_baru) as hargabaru, avg(harga_lama) as hargalama FROM harga_komuditi a LEFT JOIN komuditi b ON a.id_komuditi = b.id_komuditi GROUP BY a.id_komuditi");
 		return $query->result_array();
 	}
 } 
 ?>