<?php 

class OlahragaModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('olahraga');
		return $query->result();
	}
	public function tambah(){
		$this->olahraga         = $this->input->post('olahraga');		
		$this->jumlahK           = $this->input->post('jumlahK');
		$this->totalL           = $this->input->post('totalL');
		$this->totalP           = $this->input->post('totalP');
		$this->kegiatan         = $this->input->post('kegiatan');		
		$this->prasarana        = $this->input->post('prasarana');		
		
		if($this->input->post('sumber1') == NULL){
			$this->sumber1          = 0;
		}else{
			$this->sumber1          = $this->input->post('sumber1');	
		}
		if($this->input->post('sumber2') == NULL){
			$this->sumber2          = 0;
		}else{
			$this->sumber2          = $this->input->post('sumber2');	
		}		
		if($this->input->post('sumber3') == NULL){
			$this->sumber3          = 0;
		}else{
			$this->sumber3          = $this->input->post('sumber3');	
		}
		$this->kd_desa          = $this->input->post('desa');	
		$this->db->insert('olahraga',$this);
	}
	public function edit(){
		$id 				    = $this->input->post('kd');		
		$this->olahraga         = $this->input->post('olahraga');		
		$this->jumlahK           = $this->input->post('jumlahK');
		$this->totalL           = $this->input->post('totalL');		
		$this->totalP           = $this->input->post('totalP');
		$this->kegiatan         = $this->input->post('kegiatan');		
		$this->prasarana        = $this->input->post('prasarana');		
		if($this->input->post('sumber1') == NULL){
			$this->sumber1          = 0;
		}else{
			$this->sumber1          = $this->input->post('sumber1');	
		}
		if($this->input->post('sumber2') == NULL){
			$this->sumber2          = 0;
		}else{
			$this->sumber2          = $this->input->post('sumber2');	
		}		
		if($this->input->post('sumber3') == NULL){
			$this->sumber3          = 0;
		}else{
			$this->sumber3          = $this->input->post('sumber3');	
		}
		if($this->input->post('desa') == NULL){
			$this->kd_desa = $this->input->post('kdes');	
		}else{
			$this->kd_desa = $this->input->post('desa');		
		}
		$this->db->where('kd_or',$id);
		$this->db->update('olahraga',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('olahraga');
	}
	public function getData($id){
		$this->db->where('kd_or',$id);
		$query = $this->db->get('olahraga');
		return $query->result();
	}

}

?>