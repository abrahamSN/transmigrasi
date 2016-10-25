<?php 

class PolaTransModel extends CI_Model{	
	
	public function __construct()
        {
                parent::__construct();
        }
    public function viewPola(){
    	$query = $this->db->get('pola_transmigrasi');
    	return $query->result();
    }

}


?>