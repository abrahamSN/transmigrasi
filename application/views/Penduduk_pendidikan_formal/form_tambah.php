	<script>

$(document).ready(function(){

	$("#prov").change(function(){
			$("#loadingprov").show();
			var prov = $(this).val();
			$.get("<?php echo site_url();?>/Uptd/getKabkot/"+prov, function(data, status){

      				 $("#kab").html(data);
   				 	$("#loadingprov").hide();
   				 });

		});

	$("#kab").change(function(){

		var prov = $("#prov").val();
		var kabkot = $(this).val();
		$("#loadingkab").show();
		$.get("<?php echo site_url();?>/Uptd/getKecamatan/"+prov+"/"+kabkot,function(data,status){

			$("#namaKec").html(data);

			$("#loadingkab").hide();

		});

	});

	$("#namaKec").change(function(){

		$("#loadingkec").show();

		var prov = $("#prov").val();
		var kabkot = $("#kab").val();
		var kecamatan = $(this).val();

		$.get("<?php echo site_url();?>/Uptd/getDesa/"+prov+"/"+kabkot+"/"+kecamatan,function(data,status){

			$("#namaDesa").html(data);
			$("#loadingkec").hide();

		});

	});

	hitungbh = function() {

		var laki = parseInt($("#bh-l").val());
		var perempuan = parseInt($("#bh-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-bh").val(total);
	}

	hitungTdkskl = function(){

		var laki = parseInt($("#tdkSkl-l").val());
		var perempuan = parseInt($("#tdkSkl-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-tdkSkl").val(total);
	}

	hitungTdkSd = function(){

		var laki = parseInt($("#tdkSd-l").val());
		var perempuan = parseInt($("#tdkSd-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-tdkSd").val(total);
	}

	hitungLSd = function(){

		var laki = parseInt($("#LSd-l").val());
		var perempuan = parseInt($("#LSd-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-LSd").val(total);
	}

	hitungLSmp = function(){

		var laki = parseInt($("#LSmp-l").val());
		var perempuan = parseInt($("#LSmp-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-LSmp").val(total);
	}

	hitungLSma = function(){

		var laki = parseInt($("#LSma-l").val());
		var perempuan = parseInt($("#LSma-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-LSma").val(total);
	}

	hitungLSmk = function(){

		var laki = parseInt($("#LSmk-l").val());
		var perempuan = parseInt($("#LSmk-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-LSmk").val(total);
	}

	hitungPt = function(){

		var laki = parseInt($("#Pt-l").val());
		var perempuan = parseInt($("#Pt-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Pt").val(total);
	}

	hitungPrtanian = function(){

		var laki = parseInt($("#Prtanian-l").val());
		var perempuan = parseInt($("#Prtanian-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Prtanian").val(total);
	}

	hitungPrtnkan = function(){

		var laki = parseInt($("#Prtnkan-l").val());
		var perempuan = parseInt($("#Prtnkan-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Prtnkan").val(total);
	}

	hitungPrikanan = function(){

		var laki = parseInt($("#Prikanan-l").val());
		var perempuan = parseInt($("#Prikanan-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Prikanan").val(total);
	}

	hitungKud = function(){

		var laki = parseInt($("#Kud-l").val());
		var perempuan = parseInt($("#Kud-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Kud").val(total);
	}

	hitungKpm = function(){

		var laki = parseInt($("#Kpm-l").val());
		var perempuan = parseInt($("#Kpm-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Kpm").val(total);
	}

	hitungPhp = function(){

		var laki = parseInt($("#Php-l").val());
		var perempuan = parseInt($("#Php-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Php").val(total);
	}

	hitungPkk = function(){

		var laki = parseInt($("#Pkk-l").val());
		var perempuan = parseInt($("#Pkk-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Pkk").val(total);
	}

	hitungMjh = function(){

		var laki = parseInt($("#Mjh-l").val());
		var perempuan = parseInt($("#Mjh-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Mjh").val(total);
	}

	hitungUpgk = function(){

		var laki = parseInt($("#Upgk-l").val());
		var perempuan = parseInt($("#Upgk-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Upgk").val(total);
	}

	hitungBert = function(){

		var laki = parseInt($("#Bert-l").val());
		var perempuan = parseInt($("#Bert-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Bert").val(total);
	}

	hitungDkn = function(){

		var laki = parseInt($("#Dkn-l").val());
		var perempuan = parseInt($("#Dkn-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Dkn").val(total);
	}

	hitungKctk = function(){

		var laki = parseInt($("#Kctk-l").val());
		var perempuan = parseInt($("#Kctk-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-Kctk").val(total);
	}
	});



	</script>

	<h3>Form Input Penduduk Pendidikan Formal</h3>


	<?php if($this->session->flashdata('success')): ?>
		<div class="alert alert-success"><?php echo $this->session->flashdata("success");?></div>
	<?php endif; ?>

	<?php if($this->session->flashdata('error')): ?>
		<div class="alert alert-danger"><?php echo $this->session->flashdata("error");?></div>
	<?php endif; ?>


	<form method="post" action="<?php echo site_url('Uptd/proses_tambah') ?>">
		<table class="table">
  <tr>
    <th rowspan="2">No</th>
    <th rowspan="2">Jenis Pendidikan</th>
    <th colspan="3"><center>Jiwa</center></th>
  </tr>
  <tr>
    <td>Laki - laki</td>
    <td>Perempuan</td>
    <td>Jumlah</td>
  </tr>
  <tr>
    <td></td>
    <td>A. Buta Huruf</td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td>1</td>
    <td>Buta Huruf ( Umur &gt; 10th )</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungbh()" type="text" id="bh-l" value="0" name="bh-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungbh()" type="text" id="bh-p" value="0" name="bh-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-bh" value="0" name="jumlah-bh">
		</td>
  </tr>
  <tr>
    <td colspan="5"></td>
  </tr>
  <tr>
    <td></td>
    <td>B. Pendidikan Formal</td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td>1</td>
    <td>Tidak Sekolah</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungTdkskl()" type="text" id="tdkSkl-l" value="0" name="tdkSkl-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungTdkskl()" type="text" id="tdkSkl-p" value="0" name="tdkSkl-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-tdkSkl" value="0" name="jumlah-tdkSkl">
		</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Tidak Tamat SD</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungTdkSd()" type="text" id="tdkSd-l" value="0" name="tdkSd-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungTdkSd()" type="text" id="tdkSd-p" value="0" name="tdkSd-p	" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-tdkSd" value="0" name="jumlah-tdkSd">
		</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Tamat SD</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungLSd()" type="text" id="LSd-l" value="0" name="LSd-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungLSd()" type="text" id="LSd-p" value="0" name="LSd-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-LSd" value="0" name="jumlah-LSd">
		</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Tamat S M P</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungLSmp()" type="text" id="LSmp-l" value="0" name="LSmp-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungLSmp()" type="text" id="LSmp-p" value="0" name="LSmp-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-LSmp" value="0" name="jumlah-LSmp">
		</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Tamat S M A</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungLSma()" type="text" id="LSma-l" value="0" name="LSma-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungLSma()" type="text" id="LSma-p" value="0" name="LSma-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-LSma" value="0" name="jumlah-LSma">
		</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Tamat S M K</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungLSmk()" type="text" id="LSmk-l" value="0" name="LSmk-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungLSmk()" type="text" id="LSmk-p" value="0" name="LSmk-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-LSmk" value="0" name="jumlah-LSmk">
		</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Perguruan Tinggi</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungPt()" type="text" id="Pt-l" value="0" name="Pt-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungPt()" type="text" id="Pt-p" value="0" name="Pt-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Pt" value="0" name="jumlah-Pt">
		</td>
  </tr>
  <tr>
    <td colspan="5"></td>
  </tr>
  <tr>
    <td></td>
    <td>C. Latihan Trans (AKUMULATIF)</td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td>1</td>
    <td>Pertanian (Pangan, Hortikultura, Kebun)</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungPrtanian()" type="text" id="Prtanian-l" value="0" name="Prtanian-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungPrtanian()" type="text" id="Prtanian-p" value="0" name="Prtanian-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Prtanian" value="0" name="jumlah-Prtanian">
		</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Perternakan</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungPrtnkan()" type="text" id="Prtnkan-l" value="0" name="Prtnkan-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungPrtnkan()" type="text" id="Prtnkan-p" value="0" name="Prtnkan-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Prtnkan" value="0" name="jumlah-Prtnkan">
		</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Perikanan</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungPrikanan()" type="text" id="Prikanan-l" value="0" name="Prikanan-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungPrikanan()" type="text" id="Prikanan-p" value="0" name="Prikanan-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Prikanan" value="0" name="jumlah-Prikanan">
		</td>
  </tr>
  <tr>
    <td>4</td>
    <td>K U D</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungKud()" type="text" id="Kud-l" value="0" name="Kud-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungKud()" type="text" id="Kud-p" value="0" name="Kud-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Kud" value="0" name="jumlah-Kud">
		</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Pemerintahan Desa/Kepemimpinan</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungKpm()" type="text" id="Kpm-l" value="0" name="Kpm-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungKpm()" type="text" id="Kpm-p" value="0" name="Kpm-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Kpm" value="0" name="jumlah-Kpm">
		</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Pengolahan Hasil Pertanian</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungPhp()" type="text" id="Php-l" value="0" name="bh-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungPhp()" type="text" id="Php-p" value="0" name="bh-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Php" value="0" name="jumlah-Php">
		</td>
  </tr>
  <tr>
    <td colspan="5"></td>
  </tr>
  <tr>
    <td></td>
    <td>D. Peninkatan Peranan Perempuan (AKUMULATIF)</td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td>1</td>
    <td>P K K</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungPkk()" type="text" id="Pkk-l" value="0" name="bh-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungPkk()" type="text" id="Pkk-p" value="0" name="bh-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Pkk" value="0" name="jumlah-Pkk">
		</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Menjahit</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungMjh()" type="text" id="Mjh-l" value="0" name="Mjh-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungMjh()" type="text" id="Mjh-p" value="0" name="Mjh-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Mjh" value="0" name="jumlah-Mjh">
		</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Usaha Peningkatan Gizi Keluarga</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungUpgk()" type="text" id="Upgk-l" value="0" name="Upgk-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungUpgk()" type="text" id="Upgk-p" value="0" name="Upgk-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Upgk" value="0" name="jumlah-Upgk">
		</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Bimbingan Ekonomi Rumah Tangga</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungBert()" type="text" id="Bert-l" value="0" name="Bert-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungBert()" type="text" id="Bert-p" value="0" name="Bert-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Bert" value="0" name="jumlah-Bert">
		</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Dukun Bayi</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungDkn()" type="text" id="Dkn-l" value="0" name="Dkn-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungDkn()" type="text" id="Dkn-p" value="0" name="Dkn-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Dkn" value="0" name="jumlah-Dkn">
		</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Kecantikan</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitungKctk()" type="text" id="Kctk-l" value="0" name="Kctk-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitungKctk()" type="text" id="Kctk-p" value="0" name="Kctk-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-Kctk" value="0" name="jumlah-Kctk">
		</td>
  </tr>
</table>


	</form>
