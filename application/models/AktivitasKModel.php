<?php 

class AktivitasKModel extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function viewData(){
		$query = $this->db->get('aktivitasK');
		return $query->result();
	}


}


?>