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



  </script><form method="post" action="<?php echo site_url('kesenian/edit') ?>">
	<h3>Form Kesenian</h3>
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
				Jenis Kesenian
			</td>			
			<td colspan="2">
        <input type="hidden" value="<?php echo $view->kd_ks ?>" name="kd">
        <input type="hidden" value="<?php echo $view->kd_ks ?>" name="kdes">
				<select name="kesenian" class="form-control">
          <option selected="" disabled="">-- Pilih Jenis Kesenian --</option>
          <option value="0" <?php if($view->kesenian == 0){echo "selected=''";} ?>>Ludruk</option>
          <option value="1" <?php if($view->kesenian == 1){echo "selected=''";} ?>>Ketoprak</option>
          <option value="2" <?php if($view->kesenian == 2){echo "selected=''";} ?>>Wayang Orang</option>
          <option value="3" <?php if($view->kesenian == 3){echo "selected=''";} ?>>Wayang Kulit</option>
          <option value="4" <?php if($view->kesenian == 4){echo "selected=''";} ?>>Orkes Keroncong</option>
          <option value="5" <?php if($view->kesenian == 5){echo "selected=''";} ?>>Orkes Melayu/Dangdut</option>
          <option value="6" <?php if($view->kesenian == 6){echo "selected=''";} ?>>Rebana</option>
        </select>
			</td>
		</tr>
		
    <tr>
      <td>
        Jumlah Perkumpulan
      </td>     
      <td colspan="2">
        <input type="text" name="jumlahK" class="form-control" value="<?php echo $view->jumlahK ?>">
      </td>
    </tr>   
    <tr>
      <td rowspan="2">
        Total Anggota
      </td>     
      <td>
        Laki-laki
      </td>
      <td>
        Perempuan
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" name="totalL" class="form-control" value="<?php echo $view->totalL ?>">
      </td>
      <td>
        <input type="text" name="totalP" class="form-control" value="<?php echo $view->totalP ?>">
      </td>
    </tr>
    <tr>
      <td>Kegiatan Per Bulan</td>
      <td colspan="2">
        <input type="text" name="kegiatan" class="form-control" value="<?php echo $view->kegiatan ?>">
      </td>
    </tr>
    <tr>
      <td rowspan="2">Perlengkapan Prasarana</td>
      <td>
        Ketersediaan
      </td>
      <td>
        Sumber Prasarana
      </td>
    </tr>
    <tr>
      <td>
        <input type="radio" value="0" name="prasarana" <?php if($view->prasarana == 0){echo"checked=''";} ?>> Ya
        <input type="radio" value="1" name="prasarana" <?php if($view->prasarana == 1){echo"checked=''";} ?>> Tidak
      </td>
      <td>
        <input type="checkbox" value="1" name="sumber1" <?php if($view->sumber1 == 1){echo"checked=''";} ?>> Swadaya<br/>
        <input type="checkbox" value="1" name="sumber2" <?php if($view->sumber2 == 1){echo"checked=''";} ?>> Bantuan Depnaker Trans<br/>
        <input type="checkbox" value="1" name="sumber1" <?php if($view->sumber3 == 1){echo"checked=''";} ?>> Bantuan Non Depnaker Trans<br/>
      </td>
    </tr>
    <?php
  }
  ?>
			<td colspan="3" class="text-right">
				<button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
			</td>
		</tr>
	</table>
</form>