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

	hitung0 = function() {

		var laki = parseInt($("#0-l").val());
		var perempuan = parseInt($("#0-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-0").val(total);
	}

	hitung1 = function(){

		var laki = parseInt($("#1-l").val());
		var perempuan = parseInt($("#1-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-1").val(total);
	}

	hitung2 = function(){

		var laki = parseInt($("#2-l").val());
		var perempuan = parseInt($("#2-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-2").val(total);
	}

	hitung3 = function(){

		var laki = parseInt($("#3-l").val());
		var perempuan = parseInt($("#3-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-3").val(total);
	}

	hitung4 = function(){

		var laki = parseInt($("#4-l").val());
		var perempuan = parseInt($("#4-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-4").val(total);
	}

	hitung5 = function(){

		var laki = parseInt($("#5-l").val());
		var perempuan = parseInt($("#5-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-5").val(total);
	}

	hitung6 = function(){

		var laki = parseInt($("#6-l").val());
		var perempuan = parseInt($("#6-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-6").val(total);
	}

	hitung7 = function(){

		var laki = parseInt($("#7-l").val());
		var perempuan = parseInt($("#7-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-7").val(total);
	}

	hitung8 = function(){

		var laki = parseInt($("#8-l").val());
		var perempuan = parseInt($("#8-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-8").val(total);
	}

	hitung9 = function(){

		var laki = parseInt($("#9-l").val());
		var perempuan = parseInt($("#9-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-9").val(total);
	}

	hitung10 = function(){

		var laki = parseInt($("#10-l").val());
		var perempuan = parseInt($("#10-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-10").val(total);
	}

	hitung11 = function(){

		var laki = parseInt($("#11-l").val());
		var perempuan = parseInt($("#11-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-11").val(total);
	}

	hitung12 = function(){

		var laki = parseInt($("#12-l").val());
		var perempuan = parseInt($("#12-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-12").val(total);
	}

	hitung13 = function(){

		var laki = parseInt($("#13-l").val());
		var perempuan = parseInt($("#13-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-13").val(total);
	}

	hitung14 = function(){

		var laki = parseInt($("#14-l").val());
		var perempuan = parseInt($("#14-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-14").val(total);
	}

	hitung15 = function(){

		var laki = parseInt($("#15-l").val());
		var perempuan = parseInt($("#15-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-15").val(total);
	}

	hitung16 = function(){

		var laki = parseInt($("#16-l").val());
		var perempuan = parseInt($("#16-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-16").val(total);
	}

	hitung17 = function(){

		var laki = parseInt($("#17-l").val());
		var perempuan = parseInt($("#17-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-17").val(total);
	}

	hitung18 = function(){

		var laki = parseInt($("#18-l").val());
		var perempuan = parseInt($("#18-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-18").val(total);
	}

	hitung19 = function(){

		var laki = parseInt($("#19-l").val());
		var perempuan = parseInt($("#19-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-19").val(total);
	}

	hitung20 = function(){

		var laki = parseInt($("#20-l").val());
		var perempuan = parseInt($("#20-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-20").val(total);
	}

	hitung25 = function(){

		var laki = parseInt($("#25-l").val());
		var perempuan = parseInt($("#25-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-25").val(total);
	}

	hitung30 = function(){

		var laki = parseInt($("#30-l").val());
		var perempuan = parseInt($("#30-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-30").val(total);
	}

	hitung35 = function(){

		var laki = parseInt($("#35-l").val());
		var perempuan = parseInt($("#35-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-35").val(total);
	}

	hitung40 = function(){

		var laki = parseInt($("#40-l").val());
		var perempuan = parseInt($("#40-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-40").val(total);
	}

	hitung45 = function(){

		var laki = parseInt($("#45-l").val());
		var perempuan = parseInt($("#45-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-45").val(total);
	}

	hitung50 = function(){

		var laki = parseInt($("#50-l").val());
		var perempuan = parseInt($("#50-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-50").val(total);
	}

	hitung55 = function(){

		var laki = parseInt($("#55-l").val());
		var perempuan = parseInt($("#55-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-55").val(total);
	}

	hitung60 = function(){

		var laki = parseInt($("#60-l").val());
		var perempuan = parseInt($("#60-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-60").val(total);
	}

	hitung65 = function(){

		var laki = parseInt($("#65-l").val());
		var perempuan = parseInt($("#65-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-65").val(total);
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
    <th rowspan="2"><center>STRUKTUR UMUR<br>(TAHUN)</center></th>
    <th colspan="2"><center>JENIS KELAMIN</center></th>
    <th rowspan="2"><center>JUMLAH</center></th>
  </tr>
  <tr>
    <th><center>Laki - laki</center></th>
    <th><center>Perempuan</center></th>
  </tr>
  <tr>
    <td>1</td>
    <td align="center">0</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung0()" type="text" id="0-l" value="0" name="0-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung0()" type="text" id="0-p" value="0" name="0-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-0" value="0" name="jumlah-0">
		</td>
  </tr>
  <tr>
    <td>2</td>
    <td align="center">1</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung1()" type="text" id="1-l" value="0" name="1-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung1()" type="text" id="1-p" value="0" name="1-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-1" value="0" name="jumlah-1">
		</td>
  </tr>
  <tr>
    <td>3</td>
    <td align="center">2</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung2()" type="text" id="2-l" value="0" name="2-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung2()" type="text" id="2-p" value="0" name="2-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-2" value="0" name="jumlah-2">
		</td>
  </tr>
  <tr>
    <td>4</td>
    <td align="center">3</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung3()" type="text" id="3-l" value="0" name="3-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung3()" type="text" id="3-p" value="0" name="3-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-3" value="0" name="jumlah-3">
		</td>
  </tr>
  <tr>
    <td>5</td>
    <td align="center">4</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung4()" type="text" id="4-l" value="0" name="4-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung4()" type="text" id="4-p" value="0" name="4-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-4" value="0" name="jumlah-4">
		</td>
  </tr>
  <tr>
    <td>6</td>
    <td align="center">5</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung5()" type="text" id="5-l" value="0" name="5-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung5()" type="text" id="5-p" value="0" name="5-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-5" value="0" name="jumlah-5">
		</td>
  </tr>
  <tr>
    <td>7</td>
    <td align="center">6</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung6()" type="text" id="6-l" value="0" name="6-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung6()" type="text" id="6-p" value="0" name="6-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-6" value="0" name="jumlah-6">
		</td>
  </tr>
  <tr>
    <td>8</td>
    <td align="center">7</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung7()" type="text" id="7-l" value="0" name="7-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung7()" type="text" id="7-p" value="0" name="7-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-7" value="0" name="jumlah-7">
		</td>
  </tr>
  <tr>
    <td>9</td>
    <td align="center">8</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung8()" type="text" id="8-l" value="0" name="8-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung8()" type="text" id="8-p" value="0" name="8-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-8" value="0" name="jumlah-8">
		</td>
  </tr>
  <tr>
    <td>10</td>
    <td align="center">9</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung9()" type="text" id="9-l" value="0" name="9-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung9()" type="text" id="9-p" value="0" name="9-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-9" value="0" name="jumlah-9">
		</td>
  </tr>
  <tr>
    <td>11</td>
    <td align="center">10</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung10()" type="text" id="10-l" value="0" name="10-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung10()" type="text" id="10-p" value="0" name="10-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-10" value="0" name="jumlah-10">
		</td>
  </tr>
  <tr>
    <td>12</td>
    <td align="center">11</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung11()" type="text" id="11-l" value="0" name="11-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung11()" type="text" id="11-p" value="0" name="11-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-11" value="0" name="jumlah-11">
		</td>
  </tr>
  <tr>
    <td>13</td>
    <td align="center">12</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung12()" type="text" id="12-l" value="0" name="12-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung12()" type="text" id="12-p" value="0" name="12-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-12" value="0" name="jumlah-12">
		</td>
  </tr>
  <tr>
    <td>14</td>
    <td align="center">13</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung13()" type="text" id="13-l" value="0" name="13-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung13()" type="text" id="13-p" value="0" name="13-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-13" value="0" name="jumlah-13">
		</td>
  </tr>
  <tr>
    <td>15</td>
    <td align="center">14</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung14()" type="text" id="14-l" value="0" name="14-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung14()" type="text" id="14-p" value="0" name="14-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-14" value="0" name="jumlah-14">
		</td>
  </tr>
  <tr>
    <td>16</td>
    <td align="center">15</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung15()" type="text" id="15-l" value="0" name="15-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung15()" type="text" id="15-p" value="0" name="15-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-15" value="0" name="jumlah-15">
		</td>
  </tr>
  <tr>
    <td>17</td>
    <td align="center">16</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung16()" type="text" id="16-l" value="0" name="16-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung16()" type="text" id="16-p" value="0" name="16-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-16" value="0" name="jumlah-16">
		</td>
  </tr>
  <tr>
    <td>18</td>
    <td align="center">17</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung17()" type="text" id="17-l" value="0" name="17-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung17()" type="text" id="17-p" value="0" name="17-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-17" value="0" name="jumlah-17">
		</td>
  </tr>
  <tr>
    <td>19</td>
    <td align="center">18</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung18()" type="text" id="18-l" value="0" name="18-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung18()" type="text" id="18-p" value="0" name="18-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-18" value="0" name="jumlah-18">
		</td>
  </tr>
  <tr>
    <td>20</td>
    <td align="center">19</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung19()" type="text" id="19-l" value="0" name="19-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung19()" type="text" id="19-p" value="0" name="19-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-19" value="0" name="jumlah-19">
		</td>
  </tr>
  <tr>
    <td>21</td>
    <td align="center">20-24</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung20()" type="text" id="20-l" value="0" name="20-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung20()" type="text" id="20-p" value="0" name="20-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-20" value="0" name="jumlah-20">
		</td>
  </tr>
  <tr>
    <td>22</td>
    <td align="center">25 - 29</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung25()" type="text" id="25-l" value="0" name="25-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung25()" type="text" id="25-p" value="0" name="25-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-25" value="0" name="jumlah-25">
		</td>
  </tr>
  <tr>
    <td>23</td>
    <td align="center">30 - 34</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung30()" type="text" id="30-l" value="0" name="30-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung30()" type="text" id="30-p" value="0" name="30-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-30" value="0" name="jumlah-30">
		</td>
  </tr>
  <tr>
    <td>24</td>
    <td align="center">35 - 39</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung35()" type="text" id="35-l" value="0" name="35-l" >
		</td>
    <td>
			<Input required="required" class="form-control" onkeyup="hitung35()" type="text" id="35-p" value="0" name="35-p" >
		</td>
    <td>
			<Input class="form-control" type="text" readonly="" id="jumlah-35" value="0" name="jumlah-35">
		</td>
  </tr>
  <tr>
    <td>25</td>
    <td align="center">40 - 44</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung40()" type="text" id="40-l" value="0" name="40-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung40()" type="text" id="40-p" value="0" name="40-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-40" value="0" name="jumlah-40">
		</td>
  </tr>
  <tr>
    <td>26</td>
    <td align="center">45 - 49</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung45()" type="text" id="45-l" value="0" name="45-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung45()" type="text" id="45-p" value="0" name="45-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-45" value="0" name="jumlah-45">
		</td>
  </tr>
  <tr>
    <td>27</td>
    <td align="center">50 - 54</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung50()" type="text" id="50-l" value="0" name="50-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung50()" type="text" id="50-p" value="0" name="50-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-50" value="0" name="jumlah-50">
		</td>
  </tr>
  <tr>
    <td>28</td>
    <td align="center">55 - 59</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung55()" type="text" id="55-l" value="0" name="55-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung55()" type="text" id="55-p" value="0" name="55-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-55" value="0" name="jumlah-55">
		</td>
  </tr>
  <tr>
    <td>29</td>
    <td align="center">60 - 64</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung60()" type="text" id="60-l" value="0" name="60-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung60()" type="text" id="60-p" value="0" name="60-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-60" value="0" name="jumlah-60">
		</td>
  </tr>
  <tr>
    <td>30</td>
    <td align="center">65 - Keatas</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung65()" type="text" id="65-l" value="0" name="65-l" >
		</td>
		<td>
			<Input required="required" class="form-control" onkeyup="hitung65()" type="text" id="65-p" value="0" name="65-p" >
		</td>
		<td>
			<Input class="form-control" type="text" readonly="" id="jumlah-65" value="0" name="jumlah-65">
		</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>


	</form>
