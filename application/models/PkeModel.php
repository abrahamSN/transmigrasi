<?php 

class PkeModel extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function viewData(){
		$query = $this->db->get('pke');
		return $query->result();
	}
	public function getData($id){
		$this->db->where('kd_pke',$id);
		$query = $this->db->get('pke');
		return $query->result();
	}	
	public function tambah(){
		$this->uraian = $this->input->post('uraian');
		$this->tda = $this->input->post('tda');
		$this->tps = $this->input->post('tps');
		$this->ps = $this->input->post('ps');
		$this->db->insert('pke',$this);
	}
	public function edit(){
		$id = $this->input->post('id');
		$this->uraian = $this->input->post('uraian');
		$this->tda = $this->input->post('tda');
		$this->tps = $this->input->post('tps');
		$this->ps = $this->input->post('ps');
		$this->db->where('kd_pke',$id);
		$this->db->update('pke',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('pke');
	}
	public function filterDesa($kd){		
		$this->db->where('kd_desa',$kd);
		$query = $this->db->get('pke');
		return $query->result();
	}
}

?>
