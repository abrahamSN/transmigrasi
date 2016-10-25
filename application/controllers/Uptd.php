<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uptd extends CI_Controller {


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

		$this->load->view('templates/header');
		$this->load->view('uptd/index',$data);
		$this->load->view('templates/footer');
	
	
	}
	
	public function form_tambah()
	{
		//load model
		$this->load->model("ProvinsiModel");
		$this->load->model("PolaTransModel");

		$provinsi = $this->ProvinsiModel->viewAll();
		$pola_trans = $this->PolaTransModel->viewPola();	
		
		$data["provinsi"] = $provinsi;
		$data['pola_trans'] = $pola_trans;

		$this->load->view('templates/header');
		$this->load->view('uptd/form_tambah',$data);
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
	public function getNamaDesa($kd){
		$this->load->model("DesaModel");
		$desa = $this->DesaModel->getDesa($kd);
		foreach ($desa as $view) {
			echo $view->kode_kec;
		}
	}

		public function proses_tambah(){

		$this->load->model("UptdModel");
		if(isset($_POST["simpan"])){

				$data["kd_prov"] = $this->input->post("prov");
				$data["kd_kab"] = $this->input->post("kab");
				$data["kd_lok"] = $this->input->post("lok");
				$data["status_lok"] = $this->input->post("statuslok");
				$data["nama_lok"] = $this->input->post("namaLokasi");
				$data["thn_data"] = $this->input->post("tahun");
				$data["nama_lok_lama"] = $this->input->post("namaLokasiLama");
				$data["nomor_wpt"] = $this->input->post("nomorWpt");
				$data["sk_penetapan"] = $this->input->post("skPenetapan");
				
				/*$data["nama_kawasan"] = $this->input->post("nama_kawasan");
				$data["no_ktm"] = $this->input->post("no_ktm");
				$data["sk_ktm"] = $this->input->post("sk_ktm");
				$data["nama_ktm"] = $this->input->post("nama_ktm");
				*/
				$data["nama_desa"] = $this->input->post("namaDesa");
				$data["lokasi_desa"] = $this->input->post("namaKec");
				$data["jenis_trans"] = $this->input->post("jenisTrans");
				$data["pola_usaha_trans"] = $this->input->post("polaTrans");
				$data["tahun_anggaran"] = $this->input->post("thn");
				$data["kk_lakilaki"] = $this->input->post("kk-l");
				$data["kk_perempuan"] = $this->input->post("kk-p");
				$data["jiwa_lakilaki"] = $this->input->post("jiwa-l");
				$data["jiwa_perempuan"] = $this->input->post("jiwa-p");	
				$data["status_pembinaan"] = $this->input->post("status_upt");	
					

				$insert= $this->UptdModel->tambah($data);
				if($insert){

						$this->session->set_flashdata('success', 'Database berhaisl disimpan');
						redirect("Uptd/index");
				
				}else{
				
					$this->session->set_flashdata('error', 'Database gagal disimpan');
					redirect("Uptd/form_tambah");
				}


		}else{

			$this->session->set_flashdata('error', 'akses tidak valid');
			redirect("Uptd/form_tambah");


		}

	
	}


}
