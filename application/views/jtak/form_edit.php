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



  </script><form method="post" action="<?php echo site_url('jtak/edit') ?>">
	<h3>Form Jenis Tenaga Medis Dan Aktivitas Kunjungan</h3>
	<table class="table">
  <?php 
  foreach ($viewData as $view) {
    ?>

		<tr>
			<td>Desa</td>
			<td colspan="2" style="width:60%">
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
				Jenis Tenaga Medis
			</td>			
			<td colspan="2">
        <input type="hidden" name="kd" value="<?php echo $view->kd_jtak?>">
        <input type="hidden" name="kdes" value="<?php echo $view->kd_desa ?>">
				<input type="text" name="jenistm" class="form-control" value="<?php echo $view->jenistm ?>">
			</td>
		</tr>
		
    <tr>
      <td rowspan="2">
        Jumlah Tenaga Medis
      </td>     
      <td>
        Laki Laki
      </td>
      <td>
        Perempuan
      </td>
    </tr>
		<tr>			      
      <td><input type="text" name="tmL" class="form-control" value="<?php echo $view->tmL ?>"></td>
      <td><input type="text" name="tmP" class="form-control" value="<?php echo $view->tmP ?>"></td>
		</tr>
    <tr>
      <td>Tempat Tinggal</td>
      <td colspan="2">
        <select name="ttinggal" class="form-control">
          <option selected="" disabled="">-- Pilih Tempat Tinggal --</option>
          <option value="0" <?php if($view->ttinggal == 0){echo "selected=''";} ?>>Di Lokasi</option>
          <option value="1" <?php if($view->ttinggal == 1){echo "selected=''";} ?>>Di Luar Lokasi</option>
        </select>
      </td>      
    </tr>  
    <tr>
      <td>Aktivitas Kunjungan</td>
      <td colspan="2">
        <input type="text" name="kunjungan" class="form-control" value="<?php echo $view->kunjungan ?>">
      </td>
    </tr>  
    <?php
  }
  ?>
		<tr>      
			<td colspan="3" class="text-right">
				<button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
			</td>
		</tr>
	</table>
</form>