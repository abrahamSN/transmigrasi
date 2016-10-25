<?php 
defined('BASEPATH') OR exit ('no dirrect script access allowed');

class Hortikultura extends CI_Controller{
	public function index()
	{
		$this->load->model('HortikulturaModel');
		$data['viewHk'] = $this->HortikulturaModel->viewData();
		$this->load->view('templates/header');
		$this->load->view('hortikultura/index',$data);
		$this->load->view('templates/footer');
	}
	public function form_tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('hortikultura/form_tambah');
		$this->load->view('templates/footer');
	}
	public function form_edit($id)
	{
		$this->load->model('HortikulturaModel');
		$data['viewHk'] = $this->HortikulturaModel->getData($id);
		$this->load->view('templates/header');
		$this->load->view('hortikultura/form_edit',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$this->load->model('HortikulturaModel');
		$this->HortikulturaModel->tambah();
		Hortikultura::index();
	}
	public function edit(){
		$this->load->model('HortikulturaModel');
		$this->HortikulturaModel->edit();
		Hortikultura::index();		
	}	
	public function hapus($id){
		$array = array(
				"kd_hk" => $id,
			);
		$this->load->model('HortikulturaModel');
		$this->HortikulturaModel->hapus($array);
		Hortikultura::index();		
	}

}



?>
