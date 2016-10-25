<?php 
defined('BASEPATH') OR exit ('no dirrect script access allowed');

class PengusahaanUsaha extends CI_Controller{
	public function index()
	{
		$this->load->model('PengusahaanUsahaModel');
		$data['viewPp'] = $this->PengusahaanUsahaModel->viewData(); 
		$this->load->view('templates/header');
		$this->load->view('pengusahaanUsaha/index',$data);
		$this->load->view('templates/footer');
	}
	public function form_tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('pengusahaanUsaha/form_tambah');
		$this->load->view('templates/footer');
	}
	public function form_edit($id)
	{		
		$this->load->model('PengusahaanUsahaModel');
		$data['viewPp'] = $this->PengusahaanUsahaModel->getData($id); 
		$this->load->view('templates/header');
		$this->load->view('pengusahaanUsaha/form_edit',$data);
		$this->load->view('templates/footer');
	}
	public function tambah(){
		$this->load->model('PengusahaanUsahaModel');
		$this->PengusahaanUsahaModel->tambah();
		PengusahaanUsaha::index();
	}
	public function edit(){
		$this->load->model('PengusahaanUsahaModel');
		$this->PengusahaanUsahaModel->edit();
		PengusahaanUsaha::index();
	}
	public function hapus($id){
		$array = array("kd_pu"=>$id);
		$this->load->model('PengusahaanUsahaModel');
		$this->PengusahaanUsahaModel->hapus($array);
		PengusahaanUsaha::index();
	}


	

}



?>
