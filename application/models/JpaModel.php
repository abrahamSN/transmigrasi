<?php 

class JpaModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('jpa');
		return $query->result();
	}
	public function tambah(){		
		$this->agama         = $this->input->post('agama');		
		$this->pemelukL      = $this->input->post('pemelukL');
		$this->pemelukP      = $this->input->post('pemelukP');
		$this->uptL          = $this->input->post('uptL');
		$this->uptP          = $this->input->post('uptP');
		$this->nUptL          = $this->input->post('nUptL');
		$this->nUptP          = $this->input->post('nUptP');
		$this->kd_desa       = $this->input->post('desa');	
		$this->db->insert('jpa',$this);
	}
	public function edit(){
		$id 				    = $this->input->post('kd');		
		$this->agama         = $this->input->post('agama');		
		$this->pemelukL      = $this->input->post('pemelukL');
		$this->pemelukP      = $this->input->post('pemelukP');
		$this->uptL          = $this->input->post('uptL');
		$this->uptP          = $this->input->post('uptP');
		$this->nUptL          = $this->input->post('nUptL');
		$this->nUptP          = $this->input->post('nUptP');
		if($this->input->post('desa') == NULL){
			$this->kd_desa = $this->input->post('kdes');	
		}else{
			$this->kd_desa = $this->input->post('desa');		
		}
		$this->db->where('kd_jpa',$id);
		$this->db->update('jpa',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('jpa');
	}
	public function getData($id){
		$this->db->where('kd_jpa',$id);
		$query = $this->db->get('jpa');
		return $query->result();
	}

}

?>