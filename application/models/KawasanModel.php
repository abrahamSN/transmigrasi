<?php 
defined('BASEPATH') OR exit('no dirrect script access allowed');

class KawasanModel extends CI_Model{
	
	protected $table = "";

	public function __contruct(){
	
	
		parent::__construct();
	
	
	}

	
	public function viewAll(){
		
	
		$query = $this->db->get($this->table);
		return $query->result();

	
	
	}


}


?>