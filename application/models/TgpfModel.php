<?php 

class TgpfModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('tgpf');
		return $query->result();
	}
	public function tambah(){		
		$this->uraian          = $this->input->post('uraian');		
		$this->sltpL           = $this->input->post('sltpL');
		$this->sltpP           = $this->input->post('sltpP');
		$this->smuL            = $this->input->post('smuL');		
		$this->smuP            = $this->input->post('smuP');
		$this->d1L             = $this->input->post('d1L');	
		$this->d1P            = $this->input->post('d1P');
		$this->d3L            = $this->input->post('d3L');		
		$this->d3P            = $this->input->post('d3P');		
		$this->s1L            = $this->input->post('s1L');		
		$this->s1P            = $this->input->post('s1P');		
		$this->kd_desa        = $this->input->post('desa');	
		$this->db->insert('tgpf',$this);
	}
	public function edit(){
		$id 				   = $this->input->post('kd');		
		$this->uraian          = $this->input->post('uraian');		
		$this->sltpL           = $this->input->post('sltpL');
		$this->sltpP           = $this->input->post('sltpP');
		$this->smuL            = $this->input->post('smuL');		
		$this->smuP            = $this->input->post('smuP');
		$this->d1L             = $this->input->post('d1L');	
		$this->d1P            = $this->input->post('d1P');
		$this->d3L            = $this->input->post('d3L');		
		$this->d3P            = $this->input->post('d3P');		
		$this->s1L            = $this->input->post('s1L');		
		$this->s1P            = $this->input->post('s1P');		
		if($this->input->post('desa') == NULL){
			$this->kd_desa = $this->input->post('kdes');	
		}else{
			$this->kd_desa = $this->input->post('desa');		
		}
		$this->db->where('kd_tgpf',$id);
		$this->db->update('tgpf',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('tgpf');
	}
	public function getData($id){
		$this->db->where('kd_tgpf',$id);
		$query = $this->db->get('tgpf');
		return $query->result();
	}

}

?>