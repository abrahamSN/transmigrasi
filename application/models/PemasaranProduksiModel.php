<?php 

class PemasaranProduksiModel extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function viewData(){
		$query = $this->db->get('pemasaranProduksi');
		return $query->result();
	}
	public function getData($id){
		$this->db->where('kd_pp',$id);
		$query = $this->db->get('pemasaranProduksi');
		return $query->result();
	}
	public function tambah(){
		$this->tempat_penjualan = $this->input->post('tp');
		$this->prioritas = $this->input->post('prioritas');
		$this->db->insert('pemasaranProduksi',$this);
	}
	public function edit(){
		$id = $this->input->post('id');
		$this->tempat_penjualan = $this->input->post('tp');
		$this->prioritas = $this->input->post('prioritas');
		$this->db->where('kd_pp',$id);
		$this->db->update('pemasaranProduksi',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('pemasaranProduksi');
	}
}

?>