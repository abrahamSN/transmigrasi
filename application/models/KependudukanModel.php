<?php 

class KependudukanModel extends CI_Model{	
	
	public function __construct()
        {
                parent::__construct();
        }
        public function viewUsia()
        {
    		$query = $this->db->get('usia');
    		return $query->result();
    	}

}


?>