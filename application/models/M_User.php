<?php

/**
 * 
 */
 class M_user extends CI_Model {
 	
 	 function insertdata()
	{
		$nama = $this->input->post('nama_user');
		$user = $this->input->post('username');
		$pass = $this->input->post('password');	
		$level = $this->input->post('id_level');

		// $this->load->library('upload');
		// $nmfile = "file_".time();
		// $config['upload_path'] = 'assets/admin/img/';
		// $config['allowed_types'] = 'jpg|png|jpeg';
		// $config['max_size'] = '5120';
		// $config['max_width'] = '4300';
		// $config['max_height'] = '4300';
		// $config['file_name'] = $nmfile;

		// $this->upload->initialize($config);

		// if ($_FILES['foto']['name']) {

		// 	if ($this->upload->do_upload('foto'))

		// {
		// 	$gbr = $this->upload->data();

			$data = array (

				'nama_user' => $nama,
				'username' => $user,
				'password' => $pass,
				'id_level' => $level
			);	

			$this->db->insert('user',$data);
		}
	// }else{
	// 	$gbr = $this->upload->data();

	// 	$data = array (

	// 			'kode_barang' => $kode,
	// 			'kd_kategori' => $kateg,
	// 			'nama_barang' => $nama,
	// 			'stok' => $stok,
	// 			'harga' => $harga,
	// 			'deskripsi' => $des,
	// 			'kd_status_barang' => $stat,

	// 	);	

	// 	$this->db->insert('barang', $data);
	// 	}
	// }
 } 
 ?>