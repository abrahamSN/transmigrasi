<?php 

class UptdModel extends CI_Model{	
		
	protected $table = "uptd";
	protected $key = "kd_uptd";

	public function __construct()
        {
                parent::__construct();
        }



        public function viewAll($kd_prov,$kd_kab,$kd_kec,$kd_desa,$thn_data){

          $hasil = $this->db->where("kd_prov",$kd_prov)
                            ->where("kd_kab",$kd_kab)
                            ->where("lokasi_desa",$kd_kec)
                            ->where("nama_desa",$kd_desa)
                            ->where("thn_data",$thn_data)
                            ->get($this->table);

          return $hasil->result();


        }


        //tambah
        //untuk tambah data
      public function tambah($data=array()){

      		$insert= $this->db->insert($this->table,$data);
      		return $insert;



      }

      //pdate
      public function update($data=array(),$id){


      	$update = $this->db->where($this->key,$id)->update($this->table,$data);
      	return $update;

      }

      //haps
      public function hapus($id){

      	$hapus = $this->db->where($this->key,$id)->delete($this->table);
      	return $hapus;
      }

      //get id 
      public function getId($id){

      	$get = $this->db->where($this->key,$id)->get($this->table)->row();
      	return $get;
      }



}


?>