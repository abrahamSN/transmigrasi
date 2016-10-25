<?php 
defined('BASEPATH') OR exit ('no dirrect script access allowed');

class PotensiPeternakan extends CI_Controller{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('potensiPeternakan/index');
		$this->load->view('templates/footer');
	}
	

}



?>
