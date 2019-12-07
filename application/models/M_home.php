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

	public function upload_image($title,$image)	{
		$data = array(
            'judul' => $title,
            'img' => $image, 
            );
        $result=$this->db->insert('banner',$data);
        return $result;
	}

	public function cekkomuditi($id) {
		$query = $this->db->query("SELECT * FROM komuditi where id_komuditi = '$id'");
		
		if ($query->num_rows()>0) {
			return 1;
		} else {
			return 0;
		}
	}

	public function upload_image_pokok($id,$nama,$image) {
		$data = array(
			'id_komuditi' => $id,
            'nama_komuditi' => $nama,
            'img' => $image, 
            );
        $result=$this->db->insert('komuditi',$data);
        return $result;
	}
	public function update_image_pokok($id,$nama,$image) {
		$result = $this->db->query("UPDATE komuditi SET nama_komuditi = '$nama', img = '$image' WHERE id_komuditi = '$id'");
        return $result;
	}
}