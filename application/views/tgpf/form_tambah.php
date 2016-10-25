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



  </script><form method="post" action="<?php echo site_url('Tgpf/tambah') ?>">
	<h3>Form Tenaga Guru Pendidikan Formal</h3>
	<table class="table">
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
                                <option value="<?php echo $desa_row->daerah;?>" <?php echo @$_GET["desa"]==$desa_row->daerah?"selected":"";?>><?php echo $desa_row->daerah;?></option>
                              <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
				
			</td>
		</tr>
		<tr>
			<td>
				Usia
			</td>			
			<td colspan="3">
				<select name="uraian" class="form-control" required="">
            <option selected="" disabled="">-- Pilih Tingkatan Guru --</option>
            <option value="0">Guru TK(PNS)</option>
            <option value="1">Guru TK(Honor)</option>
            <option value="2">Guru SD Negeri(PNS)</option>
            <option value="3">Guru SD Negeri(Honor)</option>
            <option value="4">Guru SD Swasta(PNS)</option>          
            <option value="5">Guru SD Swasta(Honor)</option>
            <option value="6">Guru SLTP(PNS)</option>
            <option value="7">Guru SLTP(Honor)</option>
            <option value="8">Guru SMU / SMK(PNS)</option>
            <option value="9">Guru SMU / SMK(Honor)</option>
            
            
        </select>
			</td>
		</tr>
		
    <tr>			
			<td rowspan="3">
				SLTP
			</td>
		</tr>
		<tr>			
      <td>Laki Laki</td>
      <td>Perempuan</td>
		</tr>
    <tr>
      <td>
        <input type="text" name="sltpL" class="form-control">
      </td>    
      <td>
        <input type="text" name="sltpP" class="form-control">
      </td>
    </tr>

    <tr>      
      <td rowspan="3">
        SMU / SMK
      </td>
    </tr>
    <tr>      
      <td>Laki Laki</td>
      <td>Perempuan</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="smuL" class="form-control">
      </td>    
      <td>
        <input type="text" name="smuP" class="form-control">
      </td>
    </tr>

    <tr>      
      <td rowspan="3">
        D1/D2
      </td>
    </tr>
    <tr>      
      <td>Laki Laki</td>
      <td>Perempuan</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="d1L" class="form-control">
      </td>    
      <td>
        <input type="text" name="d1P" class="form-control">
      </td>
    </tr>

    <tr>      
      <td rowspan="3">
        D3
      </td>
    </tr>
    <tr>      
      <td>Laki Laki</td>
      <td>Perempuan</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="d3L" class="form-control">
      </td>    
      <td>
        <input type="text" name="d3P" class="form-control">
      </td>
    </tr>

    <tr>      
      <td rowspan="3">
        S1
      </td>
    </tr>
    <tr>      
      <td>Laki Laki</td>
      <td>Perempuan</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="s1L" class="form-control">
      </td>    
      <td>
        <input type="text" name="s1P" class="form-control">
      </td>
    </tr>
		<tr>
			<td colspan="4" class="text-right">
				<button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
			</td>
		</tr>
	</table>
</form>