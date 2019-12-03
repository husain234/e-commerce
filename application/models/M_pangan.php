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
		$query = $this->db->query("SELECT * FROM informasi a LEFT JOIN komuditi b ON a.id_bahan = b.id_komuditi");
		return $query->result_array();
	}

	public function bahanpokok() {
		$query = $this->db->query("SELECT * FROM bahan_pokok");
		return $query->result_array();
	}

	public function cekstokkomuditi($id) {
		$query = $this->db->query("SELECT * FROM informasi WHERE id_informasi='$id'");

		if ($query->num_rows()>0) {
			return 1;
		} else {
			return 0;
		}
		
	}

	
	public function cekpokok($idbarang) {
		$query = $this->db->query("SELECT * FROM bahan_pokok WHERE id_bahan='$idbarang'");

		if ($query->num_rows()>0) {
			return 1;
		} else {
			return 0;
		}
		
	}

	public function informasi($id) {
		$query = $this->db->query("SELECT * FROM informasi WHERE id_bahan=$id");
		return $query;
	}

	public function inputstok($idkomuditi, $jumlah, $kebutuhan)	{
		$query = $this->db->query("INSERT INTO informasi (tanggal, ketersediaan, kebutuhan, id_bahan) VALUES (NOW(),'$jumlah','$kebutuhan','$idkomuditi')");
	}

	public function inputpokok($idbahan, $namabahan)	{
		$query = $this->db->query("INSERT INTO bahan_pokok VALUES ('$idbahan','$namabahan')");
	}

	public function updatestok($idinformasi, $idkomuditi, $jumlah, $kebutuhan) {
		$query = $this->db->query("UPDATE informasi SET tanggal=CURDATE(), ketersediaan='$jumlah', kebutuhan='$kebutuhan' WHERE id_bahan='$idkomuditi' AND id_informasi='$idinformasi'");
	}

	public function updatepokok($idbahan, $namabahan) {
		$query = $this->db->query("UPDATE bahan_pokok SET nama_bahan=$namabahan WHERE id_bahan='$idbahan' AND id_informasi='$idinformasi'");
	}
		
}
?>