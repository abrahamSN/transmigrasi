<?php 

class KpksModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('kpks');
		return $query->result();
	}
	public function tambah(){		
		$this->kegiatan         = $this->input->post('kegiatan');		
		$this->kAktif           = $this->input->post('kAktif');
		$this->kAda             = $this->input->post('kAda');		
		$this->kd_desa          = $this->input->post('desa');	
		$this->db->insert('kpks',$this);
	}
	public function edit(){
		$id 				    = $this->input->post('kd');		
		$this->kegiatan         = $this->input->post('kegiatan');		
		$this->kAktif           = $this->input->post('kAktif');
		$this->kAda          = $this->input->post('kAda');				
		if($this->input->post('desa') == NULL){
			$this->kd_desa = $this->input->post('kdes');	
		}else{
			$this->kd_desa = $this->input->post('desa');		
		}
		$this->db->where('kd_kpks',$id);
		$this->db->update('kpks',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('kpks');
	}
	public function getData($id){
		$this->db->where('kd_kpks',$id);
		$query = $this->db->get('kpks');
		return $query->result();
	}

}

?>