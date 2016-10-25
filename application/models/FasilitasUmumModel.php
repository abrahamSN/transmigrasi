<?php 

class FasilitasUmumModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function viewFU($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){
		$this->db->where("kd_desa",$kd_desa);
		$query = $this->db->get('fasilitasUmum');
		return $query->result();
	}
	public function tambah(){
		$this->jenis_fasilitas = $this->input->post('jenis');
		$this->jumlah          = $this->input->post('jumlah');		
		$this->rusak           = $this->input->post('rusak');
		$this->rusak_sedang    = $this->input->post('rusak-sedang');
		$this->rusak_berat     = $this->input->post('rusak-berat');
		$this->kd_desa         = $this->input->post('desa');
		$this->db->insert('fasilitasUmum',$this);
	}
	public function edit(){
		$id 				   = $this->input->post('kd');
		$this->jenis_fasilitas = $this->input->post('jenis');
		$this->jumlah          = $this->input->post('jumlah');		
		$this->rusak           = $this->input->post('rusak');
		$this->rusak_sedang    = $this->input->post('rusak-sedang');
		$this->rusak_berat     = $this->input->post('rusak-berat');
		$this->kd_desa         = $this->input->post('desa');
		$this->db->where('kd_jenis',$id);
		$this->db->update('fasilitasUmum',$this);
	}
	public function hapus($array){
		$this->db->where($array);
		$this->db->delete('fasilitasUmum');
	}
	public function getData($id){
		$this->db->where('kd_jenis',$id);
		$query = $this->db->get('fasilitasUmum');
		return $query->result();
	}

}

?>