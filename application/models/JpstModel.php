<?php 

class JpstModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('jpst');
		return $query->result();
	}
	public function tambah(){		
		$this->jenisp          = $this->input->post('jenisp');		
		$this->wargaL          = $this->input->post('wargaL');
		$this->wargaP          = $this->input->post('wargaP');
		$this->ketObat         = $this->input->post('ketObat');		
		$this->kd_desa         = $this->input->post('desa');	
		$this->db->insert('jpst',$this);
	}
	public function edit(){
		$id 				   = $this->input->post('kd');		
		$this->jenisp          = $this->input->post('jenisp');		
		$this->wargaL          = $this->input->post('wargaL');
		$this->wargaP          = $this->input->post('wargaP');
		$this->ketObat         = $this->input->post('ketObat');		
		$this->kd_desa         = $this->input->post('desa');	
		if($this->input->post('desa') == NULL){
			$this->kd_desa = $this->input->post('kdes');	
		}else{
			$this->kd_desa = $this->input->post('desa');		
		}
		$this->db->where('kd_jpst',$id);
		$this->db->update('jpst',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('jpst');
	}
	public function getData($id){
		$this->db->where('kd_jpst',$id);
		$query = $this->db->get('jpst');
		return $query->result();
	}

}

?>