<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jpa extends CI_Controller{
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
		$this->load->model("JpaModel");
		$viewAll=$this->JpaModel->viewAll(@$_GET["prov"],@$_GET["kab"],@$_GET["kec"],@$_GET["desa"],@$_GET["tahun"]);
		$data["viewData"] = $viewAll;
				
		$this->load->view('templates/header');
		$this->load->view("jpa/index",$data);
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
		$this->load->view('jpa/form_tambah',$data);
		$this->load->view('templates/footer');
	}
	public function tambah(){	
		$this->load->model('JpaModel');
		$this->JpaModel->tambah();
		Jpa::index();
	}
	public function hapus($id){
		$array = array(
				'kd_jpa' =>$id,
			);
		$this->load->model('JpaModel');
		$this->JpaModel->hapus($array);
		Jpa::index();
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


		$this->load->model('JpaModel');				
		$data['viewData'] = $this->JpaModel->getData($id);
		$this->load->view('templates/header');
		$this->load->view('jpa/form_edit',$data);
		$this->load->view('templates/footer');
	}
	public function edit(){
		$this->load->model('JpaModel');
		$this->JpaModel->edit();
		Jpa::index();

	}

}


?>