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



  </script><form method="post" action="<?php echo site_url('kpks/edit') ?>">
	<h3>Form Kegiatan Pelayanan Keluarga Sejahtera</h3>
	<table class="table">
  <?php 
  foreach ($viewData as $view) {
    ?>
		<tr>
			<td>Desa</td>
			<td colspan="2">
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
				Kegiatan
			</td>			      
			<td colspan="2">
        <input type="hidden" value="<?php echo $view->kd_kpks ?>" name="kd">
        <input type="hidden" value="<?php echo $view->kd_desa ?>" name="kdes">
				<select name="kegiatan" class="form-control">
          <option selected="" disabled="">-- Pilih Jenis Kegiatan --</option>
          <option value="0" <?php if($view->kegiatan == 0){echo "selected=''";} ?>>TKBK</option>
          <option value="1" <?php if($view->kegiatan == 1){echo "selected=''";} ?>>Posyandu</option>
          <option value="2" <?php if($view->kegiatan == 2){echo "selected=''";} ?>>Kelompok BKB</option>
          <option value="3" <?php if($view->kegiatan == 3){echo "selected=''";} ?>>Kelompok BKR</option>
          <option value="4" <?php if($view->kegiatan == 4){echo "selected=''";} ?>>Kelompok UPPKS</option>
          <option value="5" <?php if($view->kegiatan == 5){echo "selected=''";} ?>>Kelompok TAKESRA dan KUKESRA</option>
        </select>
			</td>
		</tr>
		
    <tr>
      <td rowspan="2">
        Jumlah Kelompok
      </td>     
      <td>
        Yang Ada
      </td>
      <td>
        Yang Aktif
      </td>
    </tr>
		<tr>			      
      <td><input type="text" name="kAda" class="form-control" value="<?php echo $view->kAda ?>"></td>
      <td><input type="text" name="kAktif" class="form-control" value="<?php echo $view->kAktif ?>"></td>
		</tr>         
    <?php } ?>
    <tr>
			<td colspan="3" class="text-right">
				<button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
			</td>
		</tr>
	</table>
</form>