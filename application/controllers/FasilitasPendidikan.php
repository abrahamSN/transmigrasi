<?php 
defined('BASEPATH') OR exit('no dirrect script access allowed');

/**
* 
*/
class FasilitasPendidikan extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('FasilitasPendModel');
		$data['Gedung'] = $this->FasilitasPendModel->getGedung();
		$this->load->view('templates/header');
		$this->load->view('fasilitasPendidikan/index',$data);
		$this->load->view('templates/footer');
	}
	public function form_tambah(){
		$this->load->model('FasilitasPendModel');
		$data['Gedung'] = $this->FasilitasPendModel->getGedung();
		$this->load->view('templates/header');
		$this->load->view('fasilitasPendidikan/form_tambah',$data);
		$this->load->view('templates/footer');
	}

}

?>