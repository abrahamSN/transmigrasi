<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jtak extends CI_Controller{
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
		$this->load->model("JtakModel");
		$viewAll=$this->JtakModel->viewAll(@$_GET["prov"],@$_GET["kab"],@$_GET["kec"],@$_GET["desa"],@$_GET["tahun"]);
		$data["viewData"] = $viewAll;
				
		$this->load->view('templates/header');
		$this->load->view('jtak/index',$data);
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
		$this->load->view('jtak/form_tambah',$data);
		$this->load->view('templates/footer');
	}
	public function tambah(){	
		$this->load->model('JtakModel');
		$this->JtakModel->tambah();
		Jtak::index();
	}
	public function hapus($id){
		$array = array(
				'kd_jtak' =>$id,
			);
		$this->load->model('JtakModel');
		$this->JtakModel->hapus($array);
		Jtak::index();
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


		$this->load->model('JtakModel');				
		$data['viewData'] = $this->JtakModel->getData($id);
		$this->load->view('templates/header');
		$this->load->view('jtak/form_edit',$data);
		$this->load->view('templates/footer');
	}
	public function edit(){
		$this->load->model('JtakModel');
		$this->JtakModel->edit();
		Jtak::index();

	}

}


?>