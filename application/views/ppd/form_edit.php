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



  </script><form method="post" action="<?php echo site_url('ppd/edit') ?>">
	<h3>Form Perangkat Pemerintah Desa</h3>
	<table class="table">
  <?php 
  foreach ($viewData as $view) {
    ?>
		<tr>
			<td>Desa</td>
			<td colspan="4">
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
				Perangkat Pemerintah Desa
			</td>			      
			<td colspan="4">
      <input type="hidden" name="kd" value="<?php echo $view->kd_ppd ?>">
      <input type="hidden" name="kdes" value="<?php echo $view->kd_desa ?>">
				<select name="ppd" class="form-control">
          <option selected="" disabled="">-- Silahkan Pilih Ppd --</option>    
          <option value="0" <?php if($view->ppd == 0){echo "selected=''";} ?>>Kepala Desa</option>
          <option value="1" <?php if($view->ppd == 1){echo "selected=''";} ?>>Sekretaris Desa</option>
          <option value="2" <?php if($view->ppd == 2){echo "selected=''";} ?>>Kepala Urusan</option>
          <option value="3" <?php if($view->ppd == 3){echo "selected=''";} ?>>Kepala Dusun</option>
          <option value="4" <?php if($view->ppd == 4){echo "selected=''";} ?>>LMD</option>
          <option value="5" <?php if($view->ppd == 5){echo "selected=''";} ?>>LKMD</option>
          <option value="6" <?php if($view->ppd == 6){echo "selected=''";} ?>>BPD</option>
        </select>
			</td>
		</tr>
		
    <tr>
      <td rowspan="3"> 
        Jumlah Perangkat
      </td>     
      <td colspan="2">Definitif</td>
      <td colspan="2">Non Definitif</td>      
    </tr>   
    <tr>
      <td>Laki-laki</td>
      <td>Perempuan</td>

      <td>Laki-laki</td>
      <td>Perempuan</td>			
		</tr>
    <tr>
      <td><input type="text" name="defL" class="form-control" value="<?php echo $view->defL ?>"></td>
      <td><input type="text" name="defP" class="form-control" value="<?php echo $view->defP ?>"></td>
      <td><input type="text" name="ndefL" class="form-control" value="<?php echo $view->ndefL ?>"></td>
      <td><input type="text" name="ndefP" class="form-control" value="<?php echo $view->ndefP ?>"></td>
    </tr>    
    <tr>
      <td rowspan="2">Keaktifan</td>
      <td colspan="2">Aktif</td>
      <td colspan="2">Non Aktif</td>
    </tr>
    <tr>
      <td colspan="2"><input type="text" name="aktif" class="form-control" value="<?php echo $view->aktif ?>"></td>
      <td colspan="2"><input type="text" name="naktif" class="form-control" value="<?php echo $view->naktif ?>"></td>
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
