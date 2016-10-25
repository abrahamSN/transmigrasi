<?php 
defined('BASEPATH') OR exit('no dirrect script access allowed');

class KecamatanModel extends CI_Model{
	

	protected $table= "tb_kec";


	public function __contruct(){
		parent::__construct();
	}


	public function viewAllId($idprov,$idkabkot){

		$query = $this->db->where("nama",$idprov)
						  ->where("parent",$idkabkot)
						  ->get($this->table);

		return $query->result();
	
	}


}


?>