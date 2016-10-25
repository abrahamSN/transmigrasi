<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kawasan extends CI_Controller{

	public function __construct(){
		
		Parent::__construct();
		$this->load->model("KawasanModel");

	}

	//untuk view all
	public function index(){

		$kawasan = $this->KawasanModel->viewAll();
		$data["kawasan"] = $kawasan;

		$this->load->view("templates/header");
		$this->load->view("kawasan/index",$data);
		$this->load->view("templates/footer");
		
	}

	//untuk tambah
	public function tambah(){

	}

	//untuk edit
	public function edit(){

	}

	//untuk hapus
	public function hapus(){

	
	}





}

?>