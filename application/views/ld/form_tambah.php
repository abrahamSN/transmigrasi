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



  </script><form method="post" action="<?php echo site_url('ld/tambah') ?>">
	<h3>Form Lembaga Desa</h3>
	<table class="table">
		<tr>
			<td>Desa</td>
			<td colspan="5">
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
				Lembaga Desa
			</td>			
			<td colspan="5">
				<select name="ld" class="form-control" required="">
          <option selected="" disabled="">-- Silahkan Pilih Jenis Lembaga Desa --</option>    
          <option value="0">Rukun Warga / RW</option>
          <option value="1">Rukun Tetangga / RT</option>
          <option value="2">Kelompencapir</option>
          <option value="3">Siskamling / SRD</option>
          <option value="4">Musyawarah Warga</option>
          <option value="5">Kelompok Tani</option>
          <option value="6">Kelompok Usaha Bersama</option>
          <option value="7">Karang Taruna</option>
          <option value="8">Gapoktan</option>
        </select>
			</td>
		</tr>
		
    <tr>
      <td rowspan="3"> 
        Jumlah
      </td>   
      <td rowspan="2">Unit</td>  
      <td colspan="2">Pengurus</td>
      <td colspan="2">Anggota</td>      
    </tr>   
    <tr>

      <td>Laki-laki</td>
      <td>Perempuan</td>

      <td>Laki-laki</td>
      <td>Perempuan</td>			
		</tr>
    <tr>
      <td><input type="text" name="unit" class="form-control"></td>
      <td><input type="text" name="pengurusL" class="form-control"></td>
      <td><input type="text" name="pengurusP" class="form-control"></td>
      <td><input type="text" name="anggotaL" class="form-control"></td>
      <td><input type="text" name="anggotaP" class="form-control"></td>
    </tr>    
    <tr>
      <td rowspan="2">Keaktifan</td>
      <td colspan="2">Aktif</td>
      <td colspan="2">Non Aktif</td>
    </tr>
    <tr>
      <td colspan="2"><input type="text" name="aktif" class="form-control"></td>
      <td colspan="2"><input type="text" name="naktif" class="form-control"></td>
    </tr>
    <tr>
      <td colspan="6" class="text-right">
        <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
      </td>
    </tr>
	</table>
</form>