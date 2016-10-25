<?php 

class MasalahStatusModel extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function viewData(){
		$query = $this->db->get('MasalahStatus');
		return $query->result();
	}
	public function getData($id){
		$this->db->where('kd_ms',$id);
		$query = $this->db->get('MasalahStatus');
		return $query->result();
	}
	public function tambah(){
		$this->masalah = $this->input->post('masalah');
		$this->lp = $this->input->post('lp');
		$this->luI = $this->input->post('luI');
		$this->luII = $this->input->post('luII');
		$this->ld = $this->input->post('ld');
		$this->lpir = $this->input->post('lpir');
		$this->db->insert('MasalahStatus',$this);
	}
	public function edit(){
		$id			   = $this->input->post('kd');
		$this->masalah = $this->input->post('masalah');
		$this->lp      = $this->input->post('lp');
		$this->luI     = $this->input->post('luI');
		$this->luII    = $this->input->post('luII');
		$this->ld      = $this->input->post('ld');
		$this->lpir    = $this->input->post('lpir');
		$this->db->where('kd_ms',$id);
		$this->db->update('MasalahStatus',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('MasalahStatus');
	}

}

?>