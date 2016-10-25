<?php 
defined('BASEPATH') OR exit('no dirrect script access allowed');

class KabkotModel extends CI_Model{
	
	public function __contruct(){
		parent::__construct();
	}

	public function viewAllId($id){
		$query = $this->db->where("nama",$id)->get('tb_kab');
		return $query->result();
	}


}


?>