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



  </script><form method="post" action="<?php echo site_url('mpt/tambah') ?>">
	<h3>Form Manajemen Pelayanan Transmigrasi</h3>
	<table class="table">
		<tr>
			<td>Desa</td>
			<td colspan="8">
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
				Petugas UPT
			</td>			
			<td colspan="8">
				<select name="petugasUpt" class="form-control" required="">
          <option selected="" disabled="">-- Silahkan Pilih Jenis Lembaga Desa --</option>    
          <option value="0">KA KUPT / Penanggung Jawab UPT</option>
          <option value="1">Pembina Bidang Ekonomi & Sosial Budaya</option>
          <option value="2">Pembina Bidang Sarana & Prasarana Pemukiman</option>
          <option value="3">Petugas Penyuluh Pertanian</option>
          <option value="4">TKPMP - BUT</option>
          <option value="5">TKPMP - KUD</option>
        </select>
			</td>
		</tr>
		
    <tr>
      <td rowspan="4"> 
        Jumlah
      </td>         
      <td colspan="4" >PNS</td>
      <td colspan="4">Honorer</td>      
    </tr>   
    <tr>

      <td colspan="2">Aktif</td>
      <td colspan="2">Non Aktif</td>

      <td colspan="2">Aktif</td>
      <td colspan="2">Non Aktif</td>
		</tr>
    <tr>
      <td>Laki-laki</td>
      <td>Perempuan</td>
      <td>Laki-laki</td>
      <td>Perempuan</td>
      <td>Laki-laki</td>
      <td>Perempuan</td>
      <td>Laki-laki</td>
      <td>Perempuan</td>
    </tr>
    <tr>      
      <td><input type="text" name="pAktifL" class="form-control"></td>
      <td><input type="text" name="pAktifP" class="form-control"></td>
      <td><input type="text" name="pnAktifL" class="form-control"></td>
      <td><input type="text" name="pnAktifP" class="form-control"></td>
      <td><input type="text" name="hAktifL" class="form-control"></td>
      <td><input type="text" name="hAktifP" class="form-control"></td>
      <td><input type="text" name="hnAktifL" class="form-control"></td>
      <td><input type="text" name="hnAktifP" class="form-control"></td>
    </tr>        
    <tr>
      <td>Pendidikan Terakhir</td>
      <td colspan="8">
        <select name="penAkhir" class="form-control" >
            <option selected="" disabled="">-- Pilih Pendidikan Terakhir --</option>
            <option value="0">SMA</option>
            <option value="1">D1/D2</option>
            <option value="2">D3</option>
            <option value="3">S1</option>            
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="9" class="text-right">
        <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
      </td>
    </tr>
	</table>
</form>
