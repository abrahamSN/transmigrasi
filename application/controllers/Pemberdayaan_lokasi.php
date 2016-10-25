<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemberdayaan_lokasi extends CI_Controller {

	public function __contruct(){
		parent::__construct();
	}

	public function index()
	{
		//load model provinsi
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

		$this->load->view('templates/header');
		$this->load->view('Pemberdayaan_lokasi/index',$data);
		$this->load->view('templates/footer');
	}

	public function form_tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('Pemberdayaan_lokasi/form_tambah');
		$this->load->view('templates/footer');
	}


		public function getKabkot($id){

			$this->load->model("KabkotModel");
			$kabkot = $this->KabkotModel->viewAllId($id);

			if($kabkot){
				echo "<option value=''>--Pilih Kabkot--</option>";
				foreach($kabkot as $kabkot_row){
					echo "<option value='".$kabkot_row->parent."'>".$kabkot_row->kode_kec."</option>";
				}

			}else{
				echo "<option value=''>Data tidak ada</option>";
			}


		}

		public function getKecamatan($idprov,$idkabkot){

			$this->load->model("KecamatanModel");
			$kecamatan = $this->KecamatanModel->viewAllId($idprov,$idkabkot);
			if($kecamatan){
					echo "<option value=''>--Pilih Kecamatan--</option>";
					foreach($kecamatan as $kecamatan_row){
						echo "<option value='".$kecamatan_row->tingkat."'>".$kecamatan_row->kode_kec."</option>";

					}
			}else{
				echo "<option value=''>Data tidak ada</option>";
			}

		}

		public function getDesa($idprov,$idkabkot,$idkec){

			$this->load->model("DesaModel");
			$desa = $this->DesaModel->viewAllId($idprov,$idkabkot,$idkec);

			if($desa){
				echo "<option value=''>--Pilih Desa--</option>";
				foreach($desa as $desa_row){
					echo "<option value='".$desa_row->daerah."'>".$desa_row->kode_kec."</option>";
				}

			}else{
				echo "<option value=''>Data Tidak ada</option>";
			}

		}

		public function getUpt($idprov,$idkabkot,$idkec,$iddesa){

			$this->load->model("DesaModel");
			$desa = $this->DesaModel->viewAllId($idprov,$idkabkot,$idkec);

			if($desa){
				echo "<option value=''>--Pilih Desa--</option>";
				foreach($desa as $desa_row){
					echo "<option value='".$desa_row->daerah."'>".$desa_row->kode_kec."</option>";
				}

			}else{
				echo "<option value=''>Data Tidak ada</option>";
			}

		}


		public function getNamaDesa($kd){
			$this->load->model("DesaModel");
			$desa = $this->DesaModel->getDesa($kd);
			foreach ($desa as $view) {
				echo $view->kode_kec;
			}
		}


}
