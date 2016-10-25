<?php 
defined('BASEPATH') OR exit ('no dirrect script access allowed');

class PotensiPerikanan extends CI_Controller{
	public function index()
	{
		$this->load->model('PotensiPerikananModel');
		$data['viewPP'] = $this->PotensiPerikananModel->viewData();
		$this->load->view('templates/header');
		$this->load->view('potensiPerikanan/index',$data);
		$this->load->view('templates/footer');
	}
	public function form_tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('potensiPerikanan/form_tambah');
		$this->load->view('templates/footer');
	}
	public function tambah(){
		$this->load->model('PotensiPerikananModel');
		$this->PotensiPerikananModel->tambah();
		PotensiPerikanan::index();
	}
		public function form_edit($id)
	{
		$this->load->model('PotensiPerikananModel');
		$data['viewData'] = $this->PotensiPerikananModel->getData($id);
		$this->load->view('templates/header');
		$this->load->view('potensiPerikanan/form_edit',$data);
		$this->load->view('templates/footer');
	}	
	public function edit(){
		$this->load->model('PotensiPerikananModel');
		$this->PotensiPerikananModel->edit();
		PotensiPerikanan::index();
	}
	public function hapus($id){
		$array = array(
				"kd_pp"=>$id,
			);		
		$this->load->model('PotensiPerikananModel');
		$this->PotensiPerikananModel->hapus($array);
		PotensiPerikanan::index();
	}


}



?>
