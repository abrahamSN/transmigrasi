<?php 

class KelembagaanModel extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function viewData(){
		$query = $this->db->get('kelembagaan');
		return $query->result();
	}


}


?>