<?php 
/**
 * 
 */
class M_pasar extends CI_Model {
	
	public function tambahkomoditi($namabarang) {
		$query = $this->db->query("INSERT INTO komuditi (nama_komuditi) VALUES ('$namabarang')");
	}

	// Update komoditi
	public function idkomuditi() {
		$query = $this->db->query("SELECT * FROM komuditi");
		return $query->result_array();
	}

	public function komuditipasar($idpasar) {
		$query = $this->db->query("SELECT * FROM komuditi a LEFT JOIN harga_komuditi b ON a.id_komuditi = b.id_komuditi WHERE b.id_pasar = '$idpasar'");
		return $query->result_array();
	}

	public function komuditi($id,$idpasar) {
		$query = $this->db->query("SELECT * FROM komuditi a LEFT JOIN harga_komuditi b ON a.id_komuditi = b.id_komuditi WHERE a.id_komuditi = '$id' AND b.id_pasar = '$idpasar'");
		return $query;
	}

	public function cekhargakomuditi($idh, $idpasar) {
		$query = $this->db->query("SELECT * FROM harga_komuditi WHERE id_harga='$idh' AND id_pasar = '$idpasar'");

		if ($query->num_rows()>0) {
			return 1;
		} else {
			return 0;
		}
		
	}

	public function inserthargakomuditi($id,$lama, $baru, $idpasar) {
		$query = $this->db->query("INSERT INTO harga_komuditi (tanggal, harga_lama, harga_baru, id_komuditi, id_pasar) VALUES (CURDATE(),'$lama','$baru','$id','$idpasar')");
	}

	public function updatehargakomuditi($id, $idh, $lama, $baru, $idpasar) {
		$query = $this->db->query("UPDATE harga_komuditi SET tanggal=CURDATE(), harga_lama='$lama', harga_baru='$baru', id_komuditi='$id' WHERE id_harga = '$idh' AND id_pasar='$idpasar'");
	}

	public function getkecamatan() {
		$query = $this->db->query("SELECT * FROM kecamatan");
		return $query->result_array();
	}
}
?>