<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Smpf extends CI_Controller{
	public function index(){
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
		$this->load->model("SmpfModel");
		$viewAll=$this->SmpfModel->viewAll(@$_GET["prov"],@$_GET["kab"],@$_GET["kec"],@$_GET["desa"],@$_GET["tahun"]);
		$data["viewData"] = $viewAll;
				
		$this->load->view('templates/header');
		$this->load->view('smpf/index',$data);
		$this->load->view('templates/footer');
	}
	public function getNamaDesa($kd){
		$this->load->model("DesaModel");
		$desa = $this->DesaModel->getDesa($kd);		
	}
	public function form_tambah()
	{
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

		$this->load->view('templates/header');
		$this->load->view('smpf/form_tambah',$data);
		$this->load->view('templates/footer');
	}
	public function tambah(){	
		$this->load->model('SmpfModel');
		$this->SmpfModel->tambah();
		Smpf::index();
	}
	public function hapus($id){
		$array = array(
				'kd_smpf' =>$id,
			);
		$this->load->model('SmpfModel');
		$this->SmpfModel->hapus($array);
		Smpf::index();
	}
	public function form_edit($id){

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


		$this->load->model('SmpfModel');				
		$data['viewData'] = $this->SmpfModel->getData($id);
		$this->load->view('templates/header');
		$this->load->view('smpf/form_edit',$data);
		$this->load->view('templates/footer');
	}
	public function edit(){
		$this->load->model('SmpfModel');
		$this->SmpfModel->edit();
		Smpf::index();

	}

}


?>