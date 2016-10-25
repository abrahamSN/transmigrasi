<?php 

class JkeModel extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function viewData(){
		$query = $this->db->query("Select j.*,k.*,a.* from jke j,aktivitasK a,kelembagaan k where j.kd_lembaga = k.kd_kelembagaan and j.kd_ak = a.kd_ak");
		return $query->result();
	}
	public function getData($id){
		$this->db->where('kd_jke',$id);
		$query = $this->db->get('jke');
		return $query->result();	
	}
	public function tambah(){
		$this->kd_lembaga = $this->input->post('jk');
		$this->jumlah = $this->input->post('jumlah');
		$this->kd_ak = $this->input->post('ak');
		$this->db->insert('jke',$this);
	}
	public function edit(){
		$id = $this->input->post('id');
		$this->kd_lembaga = $this->input->post('jk');
		$this->jumlah = $this->input->post('jumlah');
		$this->kd_ak = $this->input->post('ak');
		$this->db->where('kd_jke',$id);
		$this->db->update('jke',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('jke');	
	}


}


?>