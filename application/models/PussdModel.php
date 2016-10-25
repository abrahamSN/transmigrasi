<?php 

class PussdModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('pussd');
		return $query->result();
	}
	public function tambah(){		
		$this->usia        = $this->input->post('usia');		
		$this->l           = $this->input->post('l');
		$this->p           = $this->input->post('p');
		$this->kd_desa     = $this->input->post('desa');		
		$this->db->insert('pussd',$this);
	}
	public function edit(){
		$id 				   = $this->input->post('kd');
		$this->usia        = $this->input->post('usia');		
		$this->l           = $this->input->post('l');
		$this->p           = $this->input->post('p');
		$this->kd_desa     = $this->input->post('kd_desa');		
		$this->db->where('kd_pussd',$id);
		$this->db->update('fasilitasUmum',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('pussd');
	}
	public function getData($id){
		$this->db->where('kd_pussd',$id);
		$query = $this->db->get('pussd');
		return $query->result();
	}

}

?>