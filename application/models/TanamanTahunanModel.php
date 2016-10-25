<?php 

class TanamanTahunanModel extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	public function viewDataKebun(){
		$this->db->where('jenis','1');
		$query = $this->db->get('tanamanTahunan');
		return $query->result();
	}
	public function viewDataHt(){
		$this->db->where('jenis','0');
		$query = $this->db->get('tanamanTahunan');
		return $query->result();
	}
	public function getData($id){
		$this->db->where('kd_tt',$id);
		$query = $this->db->get('tanamanTahunan');	
		return $query->result();

	}
	public function tambah(){
		$this->jenis  = $this->input->post('jenis');
		$this->jenist = $this->input->post('jenist'); 
		$this->tbm    = $this->input->post('tbm');
		$this->tm     = $this->input->post('tm');
		$this->total  = $this->input->post('total');
		$this->harga  = $this->input->post('harga');
		$this->db->insert('tanamanTahunan',$this);		
	}
	public function edit(){
		$id   	      = $this->input->post('id');
		$this->jenis  = $this->input->post('jenis');
		$this->jenist = $this->input->post('jenist'); 
		$this->tbm    = $this->input->post('tbm');
		$this->tm     = $this->input->post('tm');
		$this->total  = $this->input->post('total');
		$this->harga  = $this->input->post('harga');
		$this->db->where('kd_tt',$id);
		$this->db->update('tanamanTahunan',$this);		
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('tanamanTahunan');
	}


}

?>