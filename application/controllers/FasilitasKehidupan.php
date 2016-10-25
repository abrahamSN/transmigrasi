<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FasilitasKehidupan extends CI_Controller {

	//kpt
	public function kpt()
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

		//uptd model
		$this->load->model("KptModel");
		$viewAll=$this->KptModel->viewKpt(@$_GET["prov"],@$_GET["kab"],@$_GET["kec"],@$_GET["desa"],@$_GET["tahun"]);
		$data["viewKpt"] = $viewAll;

		
		$this->load->view('templates/header');
		$this->load->view('fasilitasKehidupan/kpt',$data);
		$this->load->view('templates/footer');
	}	
	public function form_tambahKpt()
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
		$this->load->view('fasilitasKehidupan/form_tambahKpt',$data);
		$this->load->view('templates/footer');
	}
	public function form_editKpt($id){

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

		
		$array = array(
				'kd_prasarana' => $id,
			);	
		$this->load->model('KptModel');		
		$data['dataKpt'] = $this->KptModel->getKpt($array);		
		$this->load->view('templates/header');
		$this->load->view('fasilitasKehidupan/form_editKpt',$data);
		$this->load->view('templates/footer');
	}

	public function tambahKpt(){
		$this->load->model('KptModel');
		$this->KptModel->tambahKpt();
		FasilitasKehidupan::kpt();
	}
	public function editKpt(){
		$id = $this->input->post('kd');
		$array = array(
				'kd_prasarana' => $id,
			);
		$this->load->model('KptModel');
		$this->KptModel->editKpt($array);
		FasilitasKehidupan::kpt();
	}
	public function hapusKpt($id){
		$array = array(
				'kd_prasarana' => $id,
			);
		$this->load->model('KptModel');
		$this->KptModel->hapusKpt($array);
		FasilitasKehidupan::kpt();
	}
	//end kpt

	//kst
	public function kst()
	{
		$this->load->view('templates/header');
		$this->load->view('fasilitasKehidupan/kst');
		$this->load->view('templates/footer');
	}

	//end kst
}
