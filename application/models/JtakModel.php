<?php 

class JtakModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('jtak');
		return $query->result();
	}
	public function tambah(){		
		$this->jenistm         = $this->input->post('jenistm');		
		$this->tmL             = $this->input->post('tmL');
		$this->tmP             = $this->input->post('tmP');
		$this->ttinggal        = $this->input->post('ttinggal');
		$this->kunjungan       = $this->input->post('kunjungan');
		$this->kd_desa         = $this->input->post('desa');	
		$this->db->insert('jtak',$this);
	}
	public function edit(){
		$id 				   = $this->input->post('kd');		
		$this->jenistm         = $this->input->post('jenistm');		
		$this->tmL             = $this->input->post('tmL');
		$this->tmP             = $this->input->post('tmP');
		$this->ttinggal        = $this->input->post('ttinggal');
		$this->kunjungan       = $this->input->post('kunjungan');		
		if($this->input->post('desa') == NULL){
			$this->kd_desa = $this->input->post('kdes');	
		}else{
			$this->kd_desa = $this->input->post('desa');		
		}
		$this->db->where('kd_jtak',$id);
		$this->db->update('jtak',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('jtak');
	}
	public function getData($id){
		$this->db->where('kd_jtak',$id);
		$query = $this->db->get('jtak');
		return $query->result();
	}

}

?>