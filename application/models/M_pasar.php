<?php 
/**
 * 
 */
class M_pasar extends CI_Model {
	
	public function tambahkomoditi($idbarang,$namabarang) {
		$query = $this->db->query("INSERT INTO komuditi VALUES ('$idbarang','$namabarang')");
	}

	// Update komoditi
	public function idkomuditi() {
		$query = $this->db->query("SELECT id_komuditi FROM komuditi");
		return $query->result_array();
	}

	public function komuditi($id) {
		$query = $this->db->query("SELECT * FROM komuditi a LEFT JOIN harga_komuditi b ON a.id_komuditi = b.id_komuditi WHERE a.id_komuditi = '$id'");
		return $query;
	}

	public function cekhargakomuditi($idh) {
		$query = $this->db->query("SELECT * FROM harga_komuditi WHERE id_harga='$idh'");

		if ($query->num_rows()>0) {
			return 1;
		} else {
			return 0;
		}
		
	}

	public function inserthargakomuditi($id,$lama, $baru) {
		$query = $this->db->query("INSERT INTO harga_komuditi (tanggal, harga_lama, harga_baru, id_komuditi) VALUES (CURDATE(),'$lama','$baru','$id')");
	}

	public function updatehargakomuditi($id, $idh, $lama, $baru) {
		$query = $this->db->query("UPDATE harga_komuditi SET tanggal=CURDATE(), harga_lama='$lama', harga_baru='$baru', id_komuditi='$id' WHERE id_harga = '$idh'");
	}
}
?>