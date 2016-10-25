<?php 
defined('BASEPATH') OR exit('no dirrect script access allowed');

class ProvinsiModel extends CI_Model{
	
	public function __contruct(){
		parent::__construct();
	}
	public function viewAll(){
		$query = $this->db->get('tb_prov');
		return $query->result();
	}
	

}


?>