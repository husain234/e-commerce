<?php

/**
 * 
 */
 class M_user extends CI_Model {
 	
 	public function avgkomuditi() {
 		$query = $this->db->query("SELECT nama_komuditi, avg(harga_baru) as hargabaru, avg(harga_lama) as hargalama, img FROM harga_komuditi a LEFT JOIN komuditi b ON a.id_komuditi = b.id_komuditi GROUP BY a.id_komuditi");
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
 		$query = $this->db->query("SELECT nama_komuditi, tanggal, harga_baru FROM updateharga a LEFT JOIN komuditi b ON a.id_komuditi = b.id_komuditi LEFT JOIN pasar c ON a.id_pasar = c.id_pasar LEFT JOIN kecamatan d ON c.id_kecamatan = d.id_kecamatan WHERE a.id_komuditi = '$komuditi' AND c.id_kecamatan = '$kecamatan' AND YEAR(tanggal) = '$tahun' LIMIT 40");
 		return $query->result_array();
 	}

 	public function informasi()	{
 		$query = $this->db->query("SELECT * FROM informasi a LEFT JOIN bahan_pokok b ON a.id_bahan=b.id_bahan");
 		return $query->result_array();
 	}

 	public function informasifilter($bln, $thn) {
 		$query = $this->db->query("SELECT * FROM informasi a LEFT JOIN bahan_pokok b ON a.id_bahan=b.id_bahan WHERE MONTH(tanggal) = '$bln' AND YEAR(tanggal) = '$thn'");
 		return $query->result_array();
 	}

 	public function getpasar() {
 		$query = $this->db->query("SELECT * FROM pasar");
 		return $query->result_array();
 	}

 	public function getlevel() {
 		$query = $this->db->query("SELECT * FROM level");
 		return $query->result_array();
 	}

 	public function insertuser($nama, $username, $password, $level, $pasar)	{
 		$query = $this->db->query("INSERT INTO user (nama_user, username, password, id_level, id_pasar) VALUES ('$nama','$username','$password','$level','$pasar')");
 	}

 	public function imgbanner()	{
 		$query = $this->db->query("SELECT * FROM banner");
 		return $query->result_array();
 	}
 } 
 ?>