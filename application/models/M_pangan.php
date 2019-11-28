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

	public function stok() {
		$query = $this->db->query("SELECT * FROM informasi");
		return $query->result_array();
	}

	public function cekstokkomuditi($id) {
		$query = $this->db->query("SELECT * FROM informasi WHERE id_komuditi='$id'");

		if ($query->num_rows()>0) {
			return 1;
		} else {
			return 0;
		}
		
	}

	public function informasi($id) {
		$query = $this->db->query("SELECT * FROM informasi WHERE id_komuditi=$id");
		return $query;
	}

	public function inputstok($idkomuditi, $jumlah, $kebutuhan)	{
		$query = $this->db->query("INSERT INTO informasi (tanggal, ketersediaan, kebutuhan, id_komuditi) VALUES (NOW(),'$jumlah','$kebutuhan','$idkomuditi')");
	}

	public function updatestok($idinformasi, $idkomuditi, $jumlah, $kebutuhan) {
		$query = $this->db->query("UPDATE informasi SET tanggal=CURDATE(), ketersediaan='$jumlah', kebutuhan='$kebutuhan' WHERE id_komuditi='$idkomuditi' AND id_informasi='$idinformasi'");
	}
	
	
}
?>