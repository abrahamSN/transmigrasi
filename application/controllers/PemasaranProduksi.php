<?php 
defined('BASEPATH') OR die('no direct script access allowed');

class PemasaranProduksi extends CI_Controller{
	public function index(){
		$this->load->model('PemasaranProduksiModel');
		$data['viewData'] = $this->PemasaranProduksiModel->viewData();
		$this->load->view('templates/header');
		$this->load->view('pemasaranProduksi/index',$data);
		$this->load->view('templates/footer');
	}
	public function form_tambah(){
		$this->load->view('templates/header');
		$this->load->view('pemasaranProduksi/form_tambah');
		$this->load->view('templates/footer');	
	}
	public function form_edit($id){
		$this->load->model('PemasaranProduksiModel');
		$data['viewData'] = $this->PemasaranProduksiModel->getData($id);
		$this->load->view('templates/header');
		$this->load->view('pemasaranProduksi/form_edit',$data);
		$this->load->view('templates/footer');	
	}
	public function tambah(){
		$this->load->model('PemasaranProduksiModel');
		$this->PemasaranProduksiModel->tambah();
		PemasaranProduksi::index();
	}	
	public function edit(){
		$this->load->model('PemasaranProduksiModel');
		$this->PemasaranProduksiModel->edit();
		PemasaranProduksi::index();
	}	
	public function hapus($id){
		$array = array('kd_pp'=>$id);
		$this->load->model('PemasaranProduksiModel');
		$this->PemasaranProduksiModel->hapus($array);
		PemasaranProduksi::index();
	}


}

?>
