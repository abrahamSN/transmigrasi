<?php 

class PotensiPerikananModel extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}
	public function viewData(){
		$query = $this->db->get('potensiPerikanan');
		return $query->result();
	}
	public function tambah(){
		$this->jenis_ikan = $this->input->post('jenis');
		$this->lk = $this->input->post('lk');
		$this->jumlah_produksi = $this->input->post('jps');		
		$this->harga_jual = $this->input->post('hargajual');
		$this->db->insert('potensiPerikanan',$this);
	}
	public function getData($id){
		$this->db->where('kd_pp',$id);
		$query = $this->db->get('potensiPerikanan');	
		return $query->result();

	}
	public function edit(){
		$id   	               = $this->input->post('id');
		$this->jenis_ikan      = $this->input->post('jenis');
		$this->lk         	   = $this->input->post('lk');
		$this->jumlah_produksi = $this->input->post('jps');		
		$this->harga_jual      = $this->input->post('hargajual');		
		$this->db->where('kd_pp',$id);
		$this->db->update('potensiPerikanan',$this);		
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('potensiPerikanan');
	}


}

?>
