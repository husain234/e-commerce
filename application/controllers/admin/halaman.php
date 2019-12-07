<?php

/**
* 
*/
class Halaman extends CI_Controller
{
	function __construct(){
        parent::__construct();
        $this->load->model('M_home'); //load model upload model
        $this->load->library('upload'); //load library upload 
    }

	function index() {
		$user = $this->session->userdata();
		if (empty($user)) {
			redirect('../login');
		} else {
			$this->load->view('admin/v_halaman');
		}
	}

	public function uploud_banner()	{
		$config['upload_path'] = './assets/imgbanner/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
        $config['encrypt_name'] = TRUE; //encrypt file name 
 
        $this->upload->initialize($config);
		if(!empty($_FILES['imgbanner']['name'])){
 
            if ($this->upload->do_upload('imgbanner')){
 
                $data   = $this->upload->data();
                $image  = $data['file_name']; //get file name
                $title  = $this->input->post('title');
                $this->M_home->upload_image($title,$image);
                echo "Upload Successful";
 
            }else{
                echo "Upload failed. Image file must be gif|jpg|png|jpeg|bmp";
            }
                      
        }else{
            echo "Failed, Image file is empty.";
        }
	}

	public function uploud_pokok()	{
        $cek = $this->M_home->cekkomuditi($this->input->post('id'));

        if ($cek == '1') {
            $config['upload_path'] = './assets/imgbahanpokok/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
            $config['encrypt_name'] = TRUE; //encrypt file name 
     
            $this->upload->initialize($config);
            if(!empty($_FILES['imgpokok']['name'])){
     
                if ($this->upload->do_upload('imgpokok')){
     
                    $data   = $this->upload->data();
                    $image  = $data['file_name']; //get file name
                    $id  = $this->input->post('id');
                    $nama  = $this->input->post('barang');
                    $this->M_home->update_image_pokok($id,$nama,$image);
                    echo "Upload Successful";
     
                }else{
                    echo "Upload failed. Image file must be gif|jpg|png|jpeg|bmp";
                }
                          
            }else{
                echo "Failed, Image file is empty.";
            }
        } else {
            $config['upload_path'] = './assets/imgbahanpokok/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
            $config['encrypt_name'] = TRUE; //encrypt file name 
     
            $this->upload->initialize($config);
            if(!empty($_FILES['imgpokok']['name'])){
     
                if ($this->upload->do_upload('imgpokok')){
     
                    $data   = $this->upload->data();
                    $image  = $data['file_name']; //get file name
                    $id  = $this->input->post('id');
                    $nama  = $this->input->post('barang');
                    $this->M_home->upload_image_pokok($id,$nama,$image);
                    echo "Upload Successful";
     
                }else{
                    echo "Upload failed. Image file must be gif|jpg|png|jpeg|bmp";
                }
                          
            }else{
                echo "Failed, Image file is empty.";
            }
        }
		
	}
}
?>
