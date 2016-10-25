<?php 

class MptModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('mpt');
		return $query->result();
	}
	public function tambah(){
		$this->petugasUpt   = $this->input->post('petugasUpt');		
		$this->pAktifL      = $this->input->post('pAktifL');
		$this->pAktifP      = $this->input->post('pAktifP');
		$this->pnAktifL     = $this->input->post('pnAktifL');
		$this->pnAktifP     = $this->input->post('pnAktifP');
		$this->hAktifL      = $this->input->post('hAktifL');
		$this->hAktifP      = $this->input->post('hAktifP');
		$this->hnAktifL     = $this->input->post('hnAktifL');
		$this->hnaktifP     = $this->input->post('hnAktifP');
		$this->penAkhir     = $this->input->post('penAkhir');
		$this->kd_desa      = $this->input->post('desa');	
		$this->db->insert('mpt',$this);
	}
	public function edit(){
		$id 				= $this->input->post('kd');		
		$this->petugasUpt   = $this->input->post('petugasUpt');		
		$this->pAktifL      = $this->input->post('pAktifL');
		$this->pAktifP      = $this->input->post('pAktifP');
		$this->pnAktifL     = $this->input->post('pnAktifL');
		$this->pnAktifP     = $this->input->post('pnAktifP');
		$this->hAktifL      = $this->input->post('hAktifL');
		$this->hAktifP      = $this->input->post('hAktifP');
		$this->hnAktifL     = $this->input->post('hnAktifL');
		$this->hnaktifP     = $this->input->post('hnAktifP');
		$this->penAkhir     = $this->input->post('penAkhir');		
		if($this->input->post('desa') == NULL){
			$this->kd_desa = $this->input->post('kdes');	
		}else{
			$this->kd_desa = $this->input->post('desa');		
		}
		$this->db->where('kd_mpt',$id);
		$this->db->update('mpt',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('mpt');
	}
	public function getData($id){
		$this->db->where('kd_mpt',$id);
		$query = $this->db->get('mpt');
		return $query->result();
	}

}

?>