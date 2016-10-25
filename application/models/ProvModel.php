<?php 

class ProvModel extends CI_Model{	
	
	public function __construct()
        {
                parent::__construct();
        }
    public function viewData(){    	
    	$query = $this->db->get('tb_prov');
    	return $query->result();
    }


}


?>