  <script>

$(document).ready(function(){

//dependent provinsi
  $("#prov").change(function(){
      $("#loadingprov").show();  
      var prov = $(this).val();
      $.get("<?php echo site_url();?>/Uptd/getKabkot/"+prov, function(data, status){
                $("#kab").html(data);
                $("#loadingprov").hide();     
      });      

    });


//dependent  kabupaten
  $("#kab").change(function(){

    var prov = $("#prov").val();
    var kabkot = $(this).val();
    $("#loadingkab").show();
    $.get("<?php echo site_url();?>/Uptd/getKecamatan/"+prov+"/"+kabkot,function(data,status){
          $("#kec").html(data);
          $("#loadingkab").hide();    
    });

  });

  //dependent kecamatan
  $("#kec").change(function(){

    var prov = $("#prov").val();
    var kabkot = $("#kab").val();
    var kec= $("#kec").val();

    $("#loadingkec").show();

    $.get("<?php echo site_url();?>/Uptd/getDesa/"+prov+"/"+kabkot+"/"+kec,function(data,status){

        $("#desa").html(data);
        $("#loadingkec").hide();
    
    });

  });



  });



  </script><form method="post" action="<?php echo site_url('Smpf/edit') ?>">
	<h3>Form Status Murid Pendidikan Formal</h3>
	<table class="table">
  <?php 
  foreach ($viewData as $view) {
    ?>
		<tr>
			<td>Desa</td>
			<td colspan="4">
        <input type="hidden" value="<?php echo $view->kd_smpf ?>" name="kd">
        <input type="hidden" value="<?php echo $view->kd_desa ?>" name="kdes">
				<select class="form-control" name="prov" id="prov">
                          <option disabled="" selected="">-- Pilih Provinsi --</option>
                          <?php if($provinsi): ?>
                            <?php foreach($provinsi as $provinsi_row): ?>
                              <option value="<?php echo $provinsi_row->nama;?>" <?php echo @$_GET["prov"]==$provinsi_row->nama?"selected":"";?>><?php echo $provinsi_row->kode_kec;?></option>
                            <?php endforeach; ?>
                          <?php endif; ?>
                          </select>
            
                          <select name="kab" id="kab" required="required" class="form-control">
                         <option disabled="" selected="">-- Pilih Kabupaten --</option>
                          <?php if($kabkot): ?>
                            <?php foreach($kabkot as $kabkot_row): ?>
                            <option value="<?php echo $kabkot_row->parent;?>" <?php echo @$_GET["kab"]==$kabkot_row->parent?"selected":"";?>><?php echo $kabkot_row->kode_kec;?></option>
                          <?php endforeach; ?>
                          <?php endif; ?>
                        </select>
            
                          <select name="kec" id="kec" required="required" class="form-control">
                         <option disabled="" selected="">-- Pilih Kecamatan --</option>
                          <?php if($kecamatan): ?>
                            <?php foreach($kecamatan as $kecamatan_row): ?>
                            <option value="<?php echo $kecamatan_row->tingkat;?>" <?php echo @$_GET["kec"]==$kecamatan_row->tingkat?"selected":"";?>><?php echo $kecamatan_row->kode_kec;?></option>
                          <?php endforeach; ?>
                          <?php endif; ?>
                        </select>
            
				             <select name="desa" id="desa" required="required" class="form-control">
                            <option disabled="" selected="">-- Pilih Desa --</option>
                            <?php if($desa): ?>
                              <?php foreach($desa as $desa_row): ?>
                                <option value="<?php echo $desa_row->daerah;?>" <?php echo @$_GET["desa"]==$desa_row->daerah?"selected":"";?>><?php echo $desa_row->daerah;?></option>
                              <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
				
			</td>
		</tr>
		<tr>
			<td>
				Status Sekolah
			</td>			
			<td colspan="4">
				<select name="status" class="form-control" required="">
            <option selected="" disabled="">-- Pilih Status Sekolah --</option>
            <option value="0" <?php if($view->status == 0){echo "selected=''";} ?>>Negeri</option>
            <option value="1" <?php if($view->status == 1){echo "selected=''";} ?>>Swasta</option>                        
        </select>
			</td>
		</tr>
		
    <tr>
      <td>
        Jenis Pendidikan Formal
      </td>     
      <td colspan="4">
        <select name="jenis" class="form-control" required="">
            <option selected="" disabled="">-- Pilih Jenis Pendidikan Formal --</option>
            <option value="0" <?php if($view->jenis == 0){echo "selected=''";} ?>>TK</option>
            <option value="1" <?php if($view->jenis == 1){echo "selected=''";} ?>>SD</option>                        
            <option value="2" <?php if($view->jenis == 2){echo "selected=''";} ?>>SLTP</option>                        
            <option value="3" <?php if($view->jenis == 3){echo "selected=''";} ?>>SMU/SMK</option>                        
        </select>
      </td>
    </tr>
		<tr>			
      <td rowspan="3">Jumlah Murid</td>      
      <td colspan="2">Domisili Di Dalam Upt</td>
      <td colspan="2">Domisili Di Luar Upt</td>
		</tr>
    <tr>
      <td>Laki Laki</td>
      <td>Perempuan</td>
      <td>Laki Laki</td>
      <td>Perempuan</td>
    </tr>
    <tr>      
      <td><input type="text" name="jumlahUptL" class="form-control" value="<?php echo $view->jumlahUptL ?>"></td>
      <td><input type="text" name="jumlahUptP" class="form-control" value="<?php echo $view->jumlahUptP ?>"></td>
      <td><input type="text" name="jumlahNUptL" class="form-control" value="<?php echo $view->jumlahNUptL ?>"></td>      
      <td><input type="text" name="jumlahNUptP" class="form-control" value="<?php echo $view->jumlahNUptP ?>"></td>
    </tr>
    <tr>
      <td>Lokasi Sekolah</td>
      <td colspan="4">
        <select name="lokasi" class="form-control">
            <option selected="" disabled="">-- Pilih Lokasi Sekolah --</option>
            <option value="0" <?php if($view->lokasi == 0){echo "selected=''";} ?>>Di Dalam UPT</option>
            <option value="1" <?php if($view->lokasi == 1){echo "selected=''";} ?>>Di Luar UPT</option>
        </select>
      </td>
    </tr>    
    <?php
  }
  ?>
		<tr>      
			<td colspan="5" class="text-right">
				<button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
			</td>
		</tr>
	</table>
</form>