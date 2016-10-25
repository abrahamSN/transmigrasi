<?php 
defined('BASEPATH') OR exit('no dirrect script access allowed');

class FasilitasPendModel extends CI_Model{
	
	public function __contruct(){
		parent::__construct();
	}
	public function viewPend(){
		$query = $this->db->get('fasilitasPend');
		return $query->result();
	}
	public function getGedung(){
		$query = $this->db->get('gedungPend');
		return $query->result();
	}


}


?>