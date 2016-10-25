<?php 

class LdModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('ld');
		return $query->result();
	}
	public function tambah(){
		$this->ld          = $this->input->post('ld');		
		$this->unit         = $this->input->post('unit');
		$this->pengurusL    = $this->input->post('pengurusL');
		$this->pengurusP    = $this->input->post('pengurusP');
		$this->anggotaL     = $this->input->post('anggotaL');
		$this->anggotaP     = $this->input->post('anggotaP');		
		$this->aktif        = $this->input->post('aktif');
		$this->naktif       = $this->input->post('naktif');
		$this->kd_desa      = $this->input->post('desa');	
		$this->db->insert('ld',$this);
	}
	public function edit(){
		$id 				= $this->input->post('kd');		
		$this->ld           = $this->input->post('ld');		
		$this->unit         = $this->input->post('unit');
		$this->pengurusL    = $this->input->post('pengurusL');
		$this->pengurusP    = $this->input->post('pengurusP');
		$this->anggotaL     = $this->input->post('anggotaL');
		$this->anggotaP     = $this->input->post('anggotaP');		
		$this->aktif        = $this->input->post('aktif');
		$this->naktif       = $this->input->post('naktif');		
		if($this->input->post('desa') == NULL){
			$this->kd_desa = $this->input->post('kdes');	
		}else{
			$this->kd_desa = $this->input->post('desa');		
		}
		$this->db->where('kd_ld',$id);
		$this->db->update('ld',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('ld');
	}
	public function getData($id){
		$this->db->where('kd_ld',$id);
		$query = $this->db->get('ld');
		return $query->result();
	}

}

?>