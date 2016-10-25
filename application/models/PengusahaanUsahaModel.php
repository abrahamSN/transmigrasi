<?php 

class PengusahaanUsahaModel extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}
	public function viewData(){
		$query = $this->db->get('pengusahaanUsaha');
		return $query->result();
	}	
	public function getData($id){
		$this->db->where('kd_pu',$id);
		$query = $this->db->get('pengusahaanUsaha');
		return $query->result();
	}
	public function tambah(){
		$this->plst   = $this->input->post('plst');
		$this->lp     = $this->input->post('lp');
		$this->luI    = $this->input->post('luI');
		$this->luII   = $this->input->post('luII');
		$this->ld     = $this->input->post('ld');
		$this->lplas  = $this->input->post('lplas');
		$this->db->insert('pengusahaanUsaha',$this);
	}
	public function edit(){
		$id			  = $this->input->post('kd');
		$this->plst   = $this->input->post('plst');
		$this->lp     = $this->input->post('lp');
		$this->luI    = $this->input->post('luI');
		$this->luII   = $this->input->post('luII');
		$this->ld     = $this->input->post('ld');
		$this->lplas  = $this->input->post('lplas');
		$this->db->where('kd_pu',$id);
		$this->db->update('pengusahaanUsaha',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('pengusahaanUsaha');		
	}


}

?>
