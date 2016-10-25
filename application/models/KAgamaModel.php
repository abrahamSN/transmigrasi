<?php 

class KAgamaModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('kAgama');
		return $query->result();
	}
	public function tambah(){
		$this->kegiatan         = $this->input->post('kegiatan');		
		$this->frekuensi        = $this->input->post('frekuensi');		
		$this->kd_desa          = $this->input->post('desa');	
		$this->db->insert('kAgama',$this);
	}
	public function edit(){
		$id 				    = $this->input->post('kd');		
		$this->kegiatan         = $this->input->post('kegiatan');		
		$this->frekuensi        = $this->input->post('frekuensi');		
		if($this->input->post('desa') == NULL){
			$this->kd_desa = $this->input->post('kdes');	
		}else{
			$this->kd_desa = $this->input->post('desa');		
		}
		$this->db->where('kd_ka',$id);
		$this->db->update('kAgama',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('kAgama');
	}
	public function getData($id){
		$this->db->where('kd_ka',$id);
		$query = $this->db->get('kAgama');
		return $query->result();
	}

}

?>