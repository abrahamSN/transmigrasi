<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kependudukan extends CI_Controller {

	public function __contruct(){

		parent::__construct();

	}

	public function index()
	{

		//provinsi model
		$this->load->model("ProvinsiModel");
		$this->load->helper("my_tool");

		$provinsi = $this->ProvinsiModel->viewAll();
		$data["provinsi"] = $provinsi;

		//kabkot model
		$this->load->model("KabkotModel");
		$kabkot = $this->KabkotModel->viewAllId(@$_GET["prov"]);
		$data["kabkot"] = $kabkot;

		//kecamatan model
		$this->load->model("KecamatanModel");
		$kecamatan = $this->KecamatanModel->viewAllId(@$_GET["prov"],@$_GET["kab"]);
		$data["kecamatan"] = $kecamatan;

		//desa model
		$this->load->model("DesaModel");
		$desa = $this->DesaModel->viewAllId(@$_GET["prov"],@$_GET["kab"],@$_GET["kec"]);
		$data["desa"] = $desa;

		//uptd model
		$this->load->model("UptdModel");
		$viewAll=$this->UptdModel->viewAll(@$_GET["prov"],@$_GET["kab"],@$_GET["kec"],@$_GET["desa"],@$_GET["tahun"]);
		$data["UptdModel"] = $viewAll;

		//load model kependudukan
		$this->load->model("KependudukanModel");
		$data['usia'] = $this->KependudukanModel->viewUsia();
		$this->load->view('templates/header');
		$this->load->view('kependudukan/index',$data);
		$this->load->view('templates/footer');
	}

	public function form_tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('kependudukan/form_tambah');
		$this->load->view('templates/footer');
	}
}
