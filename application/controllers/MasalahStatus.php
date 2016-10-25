<?php 
defined('BASEPATH') OR exit ('no dirrect script access allowed');

class MasalahStatus extends CI_Controller{
	public function index()
	{
		$this->load->model('MasalahStatusModel');
		$data['viewMasalah'] = $this->MasalahStatusModel->viewData();
		$this->load->view('templates/header');
		$this->load->view('masalahStatus/index',$data);
		$this->load->view('templates/footer');
	}
	public function form_tambah(){
		$this->load->view('templates/header');
		$this->load->view('masalahStatus/form_tambah');
		$this->load->view('templates/footer');
	}
	public function form_edit($id){
		$this->load->model('MasalahStatusModel');
		$data['viewMasalah'] = $this->MasalahStatusModel->getData($id);
		$this->load->view('templates/header');
		$this->load->view('masalahStatus/form_edit',$data);
		$this->load->view('templates/footer');
	}	
	public function tambah(){
		$this->load->model('MasalahStatusModel');
		$this->MasalahStatusModel->tambah();
		MasalahStatus::index();
	}
	public function edit(){
		$this->load->model('MasalahStatusModel');
		$this->MasalahStatusModel->edit();
		MasalahStatus::index();
	}
	public function hapus($id){
		$array = array(
				'kd_ms' => $id,
			);
		$this->load->model('MasalahStatusModel');
		$this->MasalahStatusModel->hapus($array);
		MasalahStatus::index();
	}

}



?>
