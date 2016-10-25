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



  </script><form method="post" action="<?php echo site_url('jpa/edit') ?>">
	<h3>Form Jumlah Pemeluk Agama</h3>
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
				Agama
			</td>			
			<td colspan="4">
      <input type="hidden" name="kd" value="<?php echo $view->kd_jpa ?>">
      <input type="hidden" name="kdes" value="<?php echo $view->kd_desa ?>">
				<select name="agama" class="form-control">
          <option selected="" disabled="">-- Pilih Agama --</option>
          <option value="0" <?php if($view->agama == 0){echo "selected=''";} ?>>Islam</option>
          <option value="1" <?php if($view->agama == 1){echo "selected=''";} ?>>Kristen Protestan</option>
          <option value="2" <?php if($view->agama == 2){echo "selected=''";} ?>>Kristen Katholik</option>
          <option value="3" <?php if($view->agama == 3){echo "selected=''";} ?>>Hindu</option>
          <option value="4" <?php if($view->agama == 4){echo "selected=''";} ?>>Budha</option>          
        </select>
			</td>
		</tr>
		
    <tr>
      <td rowspan="2">
        Jumlah Pemeluk
      </td>     
      <td colspan="2">
        Laki-laki
      </td>
      <td colspan="2">
        Perempuan
      </td>
    </tr>
		<tr>			      
      <td colspan="2"><input type="text" name="pemelukL" class="form-control" value="<?php echo $view->pemelukL ?>"></td>
      <td colspan="2"><input type="text" name="pemelukP" class="form-control" value="<?php echo $view->pemelukP ?>"></td>
		</tr>     

	<tr>
      <td rowspan="3">
        Tenaga Rohaniawan Yang Aktif Di UPT Berdomisili
      </td>     
      <td colspan="2">
        Di Dalam UPT
      </td>
      <td colspan="2">
        Di Luar UPT
      </td>      
    </tr>
    <tr>     
      <td>
        Laki-laki
      </td>
      <td>
        Perempuan
      </td>
      <td>
        Laki-laki
      </td>
      <td>
        Perempuan
      </td>
    </tr>
		<tr>			      
      <td><input type="text" name="uptL" class="form-control" value="<?php echo $view->uptL ?>"></td>
      <td><input type="text" name="uptP" class="form-control" value="<?php echo $view->uptP ?>"></td>

      <td><input type="text" name="nUptL" class="form-control" value="<?php echo $view->nUptL ?>"></td>
      <td><input type="text" name="nUptP" class="form-control" value="<?php echo $view->nUptP ?>"></td>
		</tr>     	
    <tr>
<?php
  }
  ?>
			<td colspan="5" class="text-right">
				<button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
			</td>
		</tr>
	</table>
</form>