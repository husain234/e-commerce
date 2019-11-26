<?php

/**
 * 
 */
 class M_user extends CI_Model {
 	
 	public function avgkomuditi() {
 		$query = $this->db->query("SELECT nama_komuditi, avg(harga_baru) as hargabaru, avg(harga_lama) as hargalama FROM harga_komuditi a LEFT JOIN komuditi b ON a.id_komuditi = b.id_komuditi GROUP BY a.id_komuditi");
 		return $query->result_array();
 	}

 	public function infoharga()	{
 		$query = $this->db->query("SELECT nama_komuditi, avg(harga_baru) as hargabaru, avg(harga_lama) as hargalama, (harga_lama-harga_baru) as selisih, (((harga_lama-harga_baru)/harga_lama)*100) as persel,tanggal FROM harga_komuditi a LEFT JOIN komuditi b ON a.id_komuditi = b.id_komuditi GROUP BY a.id_komuditi");
 		return $query->result_array();
 	}

 	public function infohargas($kecamatan) {
 		$query = $this->db->query("SELECT nama_komuditi, avg(harga_baru) as hargabaru, avg(harga_lama) as hargalama, (harga_lama-harga_baru) as selisih, (((harga_lama-harga_baru)/harga_lama)*100) as persel,tanggal FROM harga_komuditi a LEFT JOIN komuditi b ON a.id_komuditi = b.id_komuditi LEFT JOIN pasar c ON a.id_pasar = c.id_pasar LEFT JOIN kecamatan d ON c.id_kecamatan = d.id_kecamatan WHERE c.id_kecamatan = '$kecamatan' GROUP BY a.id_komuditi");
 		return $query->result_array();
 	}

 	public function kecamatan()	{
 		$query = $this->db->query("SELECT * FROM kecamatan");
 		return $query->result_array();
 	}

 	public function komuditi()	{
 		$query = $this->db->query("SELECT * FROM komuditi");
 		return $query->result_array();
 	}

 	public function updateharga() {
 		$query = $this->db->query("SELECT nama_komuditi, tanggal, harga_baru FROM updateharga a LEFT JOIN komuditi b ON a.id_komuditi = b.id_komuditi WHERE a.id_komuditi = (SELECT MIN(id_komuditi) FROM updateharga) AND id_pasar = '01'");
 		return $query->result_array();
 	}

 	public function updatehargas($kecamatan, $komuditi, $tahun)	{
 		$query = $this->db->query("SELECT nama_komuditi, tanggal, harga_baru FROM updateharga a LEFT JOIN komuditi b ON a.id_komuditi = b.id_komuditi LEFT JOIN pasar c ON a.id_pasar = c.id_pasar LEFT JOIN kecamatan d ON c.id_kecamatan = d.id_kecamatan WHERE a.id_komuditi = '$komuditi' AND a.id_pasar = '01' AND c.id_kecamatan = '$kecamatan'");
 		return $query->result_array();
 	}
 } 
 ?>