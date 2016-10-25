<?php 

class LoginModel extends CI_Model{
	public function __construct{
		parent::__contruct;
	}
	public function login(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');		
		if($user == "admin" && $pass == "admin"){
			$data = "sukses";
		}
		else{
			$data = "gagal";
		}
		return $data;
	}

}


?>