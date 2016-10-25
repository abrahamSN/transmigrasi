<?php 

class PpdModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('ppd');
		return $query->result();
	}
	public function tambah(){
		$this->ppd          = $this->input->post('ppd');		
		$this->defL         = $this->input->post('defL');		
		$this->defP         = $this->input->post('defP');
		$this->ndefL        = $this->input->post('ndefL');
		$this->ndefP        = $this->input->post('ndefP');
		$this->aktif        = $this->input->post('aktif');
		$this->naktif       = $this->input->post('naktif');
		$this->kd_desa      = $this->input->post('desa');	
		$this->db->insert('ppd',$this);
	}
	public function edit(){
		$id 				    = $this->input->post('kd');		
		$this->ppd          = $this->input->post('ppd');		
		$this->defL         = $this->input->post('defL');		
		$this->defP         = $this->input->post('defP');
		$this->ndefL        = $this->input->post('ndefL');
		$this->ndefP        = $this->input->post('ndefP');
		$this->aktif        = $this->input->post('aktif');
		$this->naktif       = $this->input->post('naktif');
		if($this->input->post('desa') == NULL){
			$this->kd_desa = $this->input->post('kdes');	
		}else{
			$this->kd_desa = $this->input->post('desa');		
		}
		$this->db->where('kd_ppd',$id);
		$this->db->update('ppd',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('ppd');
	}
	public function getData($id){
		$this->db->where('kd_ppd',$id);
		$query = $this->db->get('ppd');
		return $query->result();
	}

}

?>