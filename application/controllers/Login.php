<?php 

class Login extends CI_Controller{
	
	public function index(){
		$this->load->view('templates/login');
	}
	public function proseslogin(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');		
		if($user == "admin" && $pass == "admin"){
			redirect('welcome/');
		}
		else{
			redirect('login/');
		}

	}
}

?>