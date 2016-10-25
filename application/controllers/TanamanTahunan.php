<?php 
defined('BASEPATH') OR exit ('no dirrect script access allowed');

class TanamanTahunan extends CI_Controller{
	public function index()
	{
		$this->load->model('TanamanTahunanModel');
		$data['viewKebun'] = $this->TanamanTahunanModel->viewDataKebun();
		$data['viewHt'] = $this->TanamanTahunanModel->viewDataHt();
		$this->load->view('templates/header');
		$this->load->view('tanamanTahunan/index',$data);
		$this->load->view('templates/footer');
	}
	public function form_tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('tanamanTahunan/form_tambah');
		$this->load->view('templates/footer');
	}
	public function form_edit($id)
	{
		$this->load->model('TanamanTahunanModel');
		$data['viewData'] = $this->TanamanTahunanModel->getData($id);
		$this->load->view('templates/header');
		$this->load->view('tanamanTahunan/form_edit',$data);
		$this->load->view('templates/footer');
	}
	public function tambah(){
		$this->load->model('TanamanTahunanModel');
		$this->TanamanTahunanModel->tambah();
		TanamanTahunan::index();
	}	
	public function edit(){
		$this->load->model('TanamanTahunanModel');
		$this->TanamanTahunanModel->edit();
		TanamanTahunan::index();
	}
	public function hapus($id){
		$array = array(
				"kd_tt"=>$id,
			);		
		$this->load->model('TanamanTahunanModel');
		$this->TanamanTahunanModel->hapus($array);
		TanamanTahunan::index();
	}



}



?>
