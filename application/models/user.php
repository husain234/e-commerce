public function login_warga($username, $password) {
			$periksa = $this->db->get_where('warga',array('username'=>$username, 'password'=>$password));

			if ($periksa->num_rows()>0) {
	 			return 1;
	 		} else {
	 			return 0;
	 		}
		}