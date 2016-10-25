<?php 

//untuk get status lokasi
function get_status_lokasi($id){

	if($id==1){
			$data = "Unit Pemukiman Transmigrasi (UPT)";
	}else{
			$data = "Non Unit Pemukiman Transmigrasi (Non UPT)";
	}

	return $data;

}

//untuk list tahun
function list_tahun(){
	$tahun = array("2014","2015","2016","2017","2018","2019","2020");
	return $tahun;
}

//untuk jenis transmigrasi
function list_jenis_transmigrasi(){
	
	$jenis_transmigrasi = array(
								0=>"Transmigrasi Umum (TU)",
								1=>"Transmigrasi Swasta (TS)"
								);

	return $jenis_transmigrasi;

}

//untuk list lokasi
function list_status_lokasi(){
	

	$status_lokasi = array(1=>"Unit Pemukiman Transmigrasi (UPT)",
						   0=>"Non Unit Pemukiman Transmigrasi (Non UPT)"
						   );

	return $status_lokasi;

}

//untuk status pembinaan lokasi
function list_status_pembinaan_lokasi(){

	$status_pembinaan_lokasi = array(0=>"Masih Dibina",1=>"Sudah Diserahkan");
	return $status_pembinaan_lokasi;


}





?>