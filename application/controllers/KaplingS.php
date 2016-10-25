<?php 
defined('BASEPATH') OR exit ('no dirrect script access allowed');

class KaplingS extends CI_Controller{
	public function index()
	{
		$this->load->model('KaplingModel');
		$data['viewKapling'] = $this->KaplingModel->viewKapling();
		$this->load->view('templates/header');
		$this->load->view('kaplingS/index',$data);
		$this->load->view('templates/footer');
	}
	public function form_tambah(){
		$this->load->view('templates/header');
		$this->load->view('kaplingS/form_tambah');
		$this->load->view('templates/footer');

	}
	public function form_edit($id){
		$this->load->model('KaplingModel');
		$array = array(
				"kd_kapling" => $id,
			);
		$data['viewKapling'] = $this->KaplingModel->getKapling($array);
		$this->load->view('templates/header');
		$this->load->view('kaplingS/form_edit',$data);
		$this->load->view('templates/footer');
	}
	public function tambah(){
		$this->load->model('KaplingModel');
		$this->KaplingModel->tambah();
		KaplingS::index();
	}
	public function edit(){		
		$this->load->model('KaplingModel');
		$this->KaplingModel->edit();
		KaplingS::index();
	}
	public function hapus($id){
		$array = array(
				'kd_kapling'=>$id,
			);
		$this->load->model('KaplingModel');
		$this->KaplingModel->hapus($array);
		KaplingS::index();
	}


}



?>
