<?php 

class SmpfModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('smpf');
		return $query->result();
	}
	public function tambah(){		
		$this->status          = $this->input->post('status');		
		$this->jenis           = $this->input->post('jenis');
		$this->jumlahUptL      = $this->input->post('jumlahUptL');
		$this->jumlahUptP      = $this->input->post('jumlahUptP');		
		$this->jumlahNUptL     = $this->input->post('jumlahNUptL');
		$this->jumlahNUptP     = $this->input->post('jumlahNUptP');	
		$this->lokasi          = $this->input->post('lokasi');
		$this->kd_desa        = $this->input->post('desa');	
		$this->db->insert('smpf',$this);
	}
	public function edit(){
		$id 				   = $this->input->post('kd');		
		$this->status          = $this->input->post('status');		
		$this->jenis           = $this->input->post('jenis');
		$this->jumlahUptL      = $this->input->post('jumlahUptL');
		$this->jumlahUptP      = $this->input->post('jumlahUptP');		
		$this->jumlahNUptL     = $this->input->post('jumlahNUptL');
		$this->jumlahNUptP     = $this->input->post('jumlahNUptP');	
		$this->lokasi          = $this->input->post('lokasi');		
		if($this->input->post('desa') == NULL){
			$this->kd_desa = $this->input->post('kdes');	
		}else{
			$this->kd_desa = $this->input->post('desa');		
		}
		$this->db->where('kd_smpf',$id);
		$this->db->update('smpf',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('smpf');
	}
	public function getData($id){
		$this->db->where('kd_smpf',$id);
		$query = $this->db->get('smpf');
		return $query->result();
	}

}

?>