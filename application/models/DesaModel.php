<?php 
defined('BASEPATH') OR exit('no dirrect script access allowed');

class DesaModel extends CI_Model{
	
	protected $table = "tb_kel";

	public function __contruct(){
		parent::__construct();
	}

	public function viewAllId($idprov,$idkabkot,$idkec){
		
		$query = $this->db->where("nama",$idprov)
						  ->where("parent",$idkabkot)
						  ->where("tingkat",$idkec)
						  ->get($this->table);

		return $query->result();
	}
	public function getDesa($kd){
		$this->db->where('daerah',$kd);
		$query = $this->db->get($this->table);
		return $query->result();
	}




}


?>