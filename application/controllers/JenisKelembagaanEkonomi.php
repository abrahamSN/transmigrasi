<?php 
defined('BASEPATH') OR die('no direct script access allowed');

class JenisKelembagaanEkonomi extends CI_Controller{
	public function index(){
		$this->load->model('JkeModel');
		$data['viewJke'] = $this->JkeModel->viewData();
		$this->load->view('templates/header');
		$this->load->view('jke/index',$data);
		$this->load->view('templates/footer');
	}
	public function form_tambah(){
		$this->load->model('AktivitasKModel');
		$data['aktivitas'] = $this->AktivitasKModel->viewData();
		$this->load->model('KelembagaanModel');
		$data['kelembagaan'] = $this->KelembagaanModel->viewData();		
		$this->load->view('templates/header');
		$this->load->view('jke/form_tambah',$data);
		$this->load->view('templates/footer');
	}
	public function form_edit(){
		$this->load->model('AktivitasKModel');
		$data['aktivitas'] = $this->AktivitasKModel->viewData();
		$this->load->model('KelembagaanModel');
		$data['kelembagaan'] = $this->KelembagaanModel->viewData();		
		$this->load->model('JkeModel');
		$data['jke'] = $this->JkeModel->viewData();				
		$this->load->view('templates/header');
		$this->load->view('jke/form_edit',$data);
		$this->load->view('templates/footer');
	}
	public function tambah(){
		$this->load->model('JkeModel');
		$this->JkeModel->tambah();
		JenisKelembagaanEkonomi::index();		
	}
	public function edit(){
		$this->load->model('JkeModel');
		$this->JkeModel->edit();
		JenisKelembagaanEkonomi::index();		
	}
	public function hapus($id){
		$array = array("kd_jke"=>$id);
		$this->load->model('JkeModel');
		$this->JkeModel->hapus($array);
		JenisKelembagaanEkonomi::index();		
	}

}

?>
