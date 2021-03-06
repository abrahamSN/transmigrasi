<?php 

class PutpModel extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}
	public function viewData(){
		$query = $this->db->get('putp');
		return $query->result();
	}	
	public function getData($id){
		$this->db->where('kd_putp',$id);		
		$query = $this->db->get('putp');
		return $query->result();
	}
	public function tambah(){
		$this->jenis_tanaman = $this->input->post('jenis');
		$this->lt = $this->input->post('lt');
		$this->lp = $this->input->post('lp');
		$this->prodi = $this->input->post('produktiv');
		$this->harga = $this->input->post('hargajual');
		$this->db->insert('putp',$this);
	}
	public function edit(){
		$id		= $this->input->post('id');
		$this->jenis_tanaman = $this->input->post('jenis');
		$this->lt = $this->input->post('lt');
		$this->lp = $this->input->post('lp');
		$this->prodi = $this->input->post('produktiv');
		$this->harga = $this->input->post('hargajual');
		$this->db->where('kd_putp',$id);
		$this->db->update('putp',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('putp');
	}


}

?>
