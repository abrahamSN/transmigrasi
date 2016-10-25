<?php 

class KptModel extends CI_Model{
	//public $table = "kpt";
	public function __construct(){
		parent::__construct();		
	}
	public function viewKpt($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get("kpt");
		return $query->result();
	}
	public function tambahKpt(){
		
		$this->jenis_prasarana  = $_POST['jenisp'];
		$this->jumlah = $_POST['jumlah'];
		$this->kd_desa = $_POST['desa'];
		if(isset($_POST['rusak'])){
			$this->rusak = "-";
		}
		else{
			$this->rusak = $_POST['rusak'];
		}
		if(isset($_POST['rusakb'])){
			$this->rusak_berat = "-";
		}
		else{
			$this->rusak_berat = $_POST['rusakb'];
		}
		$this->db->insert('kpt',$this);
	}
	public function getKpt($array){
		$this->db->where($array);
		$query = $this->db->get('kpt');		
		return $query->result();
	}
	public function editKpt(){
		$kd = $_POST['kd'];
		$this->kd_desa = $this->input->post('desa');
		$this->jenis_prasarana  = $_POST['jenisp'];
		$this->jumlah = $_POST['jumlah'];
		if(!isset($_POST['rusak'])){
			$this->rusak = "-";
		}
		else{
			$this->rusak = $_POST['rusak'];
		}
		if(!isset($_POST['rusakb'])){
			$this->rusak_berat = "-";
		}
		else{
			$this->rusak_berat = $_POST['rusakb'];
		}
		$this->db->where('kd_prasarana',$kd);
		$this->db->update('kpt',$this);

	}
	public function hapusKpt($array){
		$this->db->where($array);
		$query = $this->db->delete('kpt');
	}

}


?>