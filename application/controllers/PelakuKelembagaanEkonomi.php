<?php 
defined('BASEPATH') OR die('no direct script access allowed');

class PelakuKelembagaanEkonomi extends CI_Controller{
	public function index(){
		$this->load->model('PkeModel');
		$data['viewData'] = $this->PkeModel->viewData();
		$this->load->view('templates/header');
		$this->load->view('pke/index',$data);
		$this->load->view('templates/footer');
	}
	public function form_tambah(){
		$this->load->view('templates/header');
		$this->load->view('pke/form_tambah');
		$this->load->view('templates/footer');	
	}
	public function form_edit($id){
		$this->load->model('PkeModel');
		$data['viewData'] = $this->PkeModel->getData($id);
		$this->load->view('templates/header');
		$this->load->view('pke/form_edit',$data);
		$this->load->view('templates/footer');
	}
	public function tambah(){
		$this->load->model("PkeModel");
		$this->PkeModel->tambah();		
		PelakuKelembagaanEkonomi::index();
	}
	public function edit(){
		$this->load->model("PkeModel");
		$this->PkeModel->edit();		
		PelakuKelembagaanEkonomi::index();
	}
	public function hapus($id){
		$array = array("kd_pke"=>$id);
		$this->load->model("PkeModel");
		$this->PkeModel->hapus($array);		
		PelakuKelembagaanEkonomi::index();	
	}


}

?>
