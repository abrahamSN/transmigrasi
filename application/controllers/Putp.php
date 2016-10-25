<?php 
defined('BASEPATH') OR exit ('no dirrect script access allowed');

class Putp extends CI_Controller{
	public function index()
	{
		$this->load->model('PutpModel');
		$data['viewPutp'] = $this->PutpModel->viewData();
		$this->load->view('templates/header');
		$this->load->view('putp/index',$data);
		$this->load->view('templates/footer');
	}
	public function form_tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('putp/form_tambah');
		$this->load->view('templates/footer');
	}
	public function form_edit($id)
	{
		$this->load->model('PutpModel');
		$data['viewPutp'] = $this->PutpModel->getData($id);
		$this->load->view('templates/header');
		$this->load->view('putp/form_edit',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$this->load->model('PutpModel');
		$this->PutpModel->tambah();
		Putp::index();
	}
	public function edit(){
		$this->load->model('PutpModel');
		$this->PutpModel->edit();
		Putp::index();
	}
	public function hapus($id){
		$array = array(
				"kd_putp"=>$id,
			);
		$this->load->model('PutpModel');
		$this->PutpModel->hapus($array);
		Putp::index();
	}

	

}



?>
