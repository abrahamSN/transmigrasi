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



  </script>

<form method="post" action="<?php echo site_url('FasilitasUmum/edit') ?>">
	<h3>Form Edit Fasilitas Umum</h3>
	<table class="table">
	<?php 
	foreach ($FU as $view) {
	?>
		<tr>
			<td>Desa</td>
			<td colspan="3">
			
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
                                <option value="<?php echo $desa_row->daerah;?>" <?php echo @$_GET["desa"]==$desa_row->wilayah_id?"selected":"";?>><?php echo $desa_row->kode_kec;?></option>
                              <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

			</td>
		</tr>
		<tr>
			<td>
				Jenis Prasarana
			</td>			
			<td colspan="3">
				<input type="text" name="jenis" class="form-control" required="" value="<?php echo $view->jenis_fasilitas ?>">
				<input type="hidden" name="kd" class="form-control" required="" value="<?php echo $view->kd_jenis ?>">
			</td>
		</tr>
		<tr>			
			<td>
				Jumlah				
			</td>
			<td colspan="3">
				<input type="text" name="jumlah" class="form-control" required="" value="<?php echo $view->jumlah ?>">				
			</td>
		</tr>
		<tr>			
			<td rowspan="3">
				Kondisi
			</td>
		</tr>
		<tr>
			<td>Rusak</td>
			<td>Rusak Sedang</td>
			<td>Rusak Berat</td>
		</tr>
		<tr>
				<td><input type="text" class="form-control" name="rusak" value="<?php echo $view->rusak ?>"></td>
				<td><input type="text" class="form-control" name="rusak-sedang" value="<?php echo $view->rusak_sedang ?>"></td>
				<td><input type="text" class="form-control" name="rusak-berat" value="<?php echo $view->rusak_berat ?>"></td>	
		</tr>
		<?php	
	}

	?>
		<tr>
			<td colspan="4" class="text-right">
				<button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-sm fa-check"></i> Edit Data</button>
			</td>
		</tr>
	</table>
</form>