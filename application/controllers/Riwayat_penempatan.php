<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_penempatan extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('riwayat_penempatan/index');
		$this->load->view('templates/footer');
	}

	public function form_tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('riwayat_penempatan/form_tambah');
		$this->load->view('templates/footer');
	}


}

