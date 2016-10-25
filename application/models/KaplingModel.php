<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

class KaplingModel extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function tambah(){
		$this->uraian = $this->input->post('uraian');
		$this->lp     = $this->input->post('lp');
		$this->luI    = $this->input->post('luI');
		$this->luII   = $this->input->post('luII');
		$this->ld     = $this->input->post('ld');
		$this->db->insert('kaplingS',$this);
	}
	public function edit(){
		$id			  = $this->input->post('kd');
		$this->uraian = $this->input->post('uraian');
		$this->lp     = $this->input->post('lp');
		$this->luI    = $this->input->post('luI');
		$this->luII   = $this->input->post('luII');
		$this->ld     = $this->input->post('ld');
		$this->db->where('kd_kapling',$id);
		$this->db->update('kaplingS',$this);
	}
	public function viewKapling(){		
		$query = $this->db->get('kaplingS');
		return $query->result();
	}
	public function getKapling($array){
		$this->db->where($array);
		$query = $this->db->get('kaplingS');
		return $query->result();
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('kaplingS');		
	}


}


?>