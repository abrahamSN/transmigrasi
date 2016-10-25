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

	hitungkk = function() {

		var laki = parseInt($("#kk-laki").val());
		var perempuan = parseInt($("#kk-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-kk").val(total);

	}



	hitungJiwa = function(){

		var laki = parseInt($("#jiwa-l").val());
		var perempuan = parseInt($("#jiwa-p").val());
		var total;

		total = parseInt(laki+perempuan);
		$("#jumlah-jiwa").val(total);

	}




	});



	</script>

	<h3>Form Input Uptd</h3>


	<?php if($this->session->flashdata('success')): ?>
		<div class="alert alert-success"><?php echo $this->session->flashdata("success");?></div>
	<?php endif; ?>

	<?php if($this->session->flashdata('error')): ?>
		<div class="alert alert-danger"><?php echo $this->session->flashdata("error");?></div>
	<?php endif; ?>


	<form method="post" action="<?php echo site_url('Uptd/proses_tambah') ?>">
		<table class="table">
			<tr>
				<td>Kode Lokasi</td>
				<td>
					<select name="prov" id="prov" class="form-control" required="required">
						<option disabled="" selected="">-- Pilih Provinsi --</option>
						<?php if($provinsi): ?>
							<?php foreach($provinsi as $provinsi_row): ?>
								<option value="<?php echo $provinsi_row->nama;?>"><?php echo $provinsi_row->kode_kec;?></option>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
					<span id="loadingprov" style="display:none">Loading ...</span>
				</td>
				<td>
					<select name="kab" id="kab" required="required" class="form-control">
						<option disabled="" selected="">-- Pilih Kabupaten --</option>
					</select>
					<span id="loadingkab" style="display:none">loading...</span>
				</td>
				<td>
					<input type="text" name="lok" id="lok" required="required" value="" class="form-control" placeholder="Kode Lokasi">
					</select>
				</td>
			</tr>
			<tr>
				<td>Tahun</td>
				<td colspan="3">
				<?php $tahun = list_tahun(); ?>
				<select required="required" name="tahun" class="form-control">
				<option value="">--Pilih tahun --</option>
				<?php foreach($tahun as $key=>$value): ?>
					<option value="<?php echo $value;?>"><?php echo $value;?></option>
					<?php endforeach; ?>
				</select>
				</td>
			</tr>
			<tr>
				<td>
					Status Lokasi
				</td>
				<td colspan="3">
					<select name="statuslok" required="required" class="form-control">
						<option selected="" disabled="">-- Pilih Status Lokasi --</option>
						<?php foreach(list_status_lokasi() as $list_status_lokasi_key=>$list_status_lokasi_value): ?>
						<option value="<?php echo $list_status_lokasi_key;?>"><?php echo $list_status_lokasi_value;?></option>
					<?php endforeach; ?>
					</select>
				</td>
			
			</tr>
			
			<tr>
				<td>Nama Lokasi</td>
				<td colspan="3">
					<Input type="text" required="required" name="namaLokasi" class="form-control" placeholder="masukan nama lokasi">
				</td>
			</tr>
			
			<tr>
				<td>Nama Lokasi Lama</td>
				<td colspan="3">
					<Input type="text" required="required" name="namaLokasiLama" class="form-control" placeholder="masukan nama lokasi lama">
				</td>
			</tr>
			<tr>
				<td>Nomor WPT/LPT/SP</td>
				<td colspan="3">
					<Input type="text" required="required" name="nomorWpt" class="form-control" placeholder="ex: XII/D/2">
				</td>
			</tr>
			<tr>
				<td>SK Penetapan WPT/LPT/SP</td>
				<td colspan="3">
					<Input type="text" required="required" name="skPenetapan" class="form-control" placeholder="">
				</td>
			</tr>
			<tr>
				<td>Nama Kawasan</td>
				<td colspan="3">
					<input type="text" required="required" name="nama_kawasan" class="form-control" placeholder="">
				</td>
			</tr>
			<tr>
				<td>No KTM</td>
				<td colspan="3">
					<input type="text" required="required" name="no_ktm" class="form-control" placeholder="">
				</td>
			</tr>
			<tr>
				<td>SK KTM</td>
				<td colspan="3">
				<input type="text" required="required" name="sk_ktm" class="form-control" placeholder="">
				</td>
			</tr>
			<tr>
				<td>Nama KTM</td>
				<td colspan="3">
				<input type="text" required="required" name="nama_ktm" class="form-control" placeholder="">
				</td>
			</tr>
			<tr>
				<td>Lokasi Ini Terletak Pada Kecamatan</td>
				<td colspan="3">
				<select required="required" class="form-control" id="namaKec" name="namaKec">
						<option value="">--Pilih Kecamatan</option>
				</select>
				<span id="loadingkec" style="display:none">Loading..</span>
				</td>
			</tr>

			<tr>
				<td>Nama Desa</td>
				<td colspan="3">
				<select required="required" id="namaDesa" name="namaDesa" class="form-control">
				<option value="">--pilih desa--</option>
				</select>
				</td>
			</tr>
			
			<tr>
				<td>Jenis Transmigrasi</td>
				<td colspan="3">
					<select name="jenisTrans" required="" class="form-control">
					<option selected="" disabled="">-- Pilih Jenis Transmigrasi --</option>
						<?php foreach(list_jenis_transmigrasi()  as $list_jenis_transmigrasi_key=>$list_jenis_transmigrasi_value): ?>
							<option value="<?php echo $list_jenis_transmigrasi_key;?>"><?php echo $list_jenis_transmigrasi_value;?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Pola Usaha Trans</td>
				<td colspan="3">
					<select name="polaTrans" required="required" class="form-control">
					<option selected="" disabled="">-- Pilih Pola Usaha Trans--</option>						
						<?php 
							foreach ($pola_trans as $viewPola) {
								?>
									<option value="<?php echo $viewPola->kd_pola ?>"><?php echo $viewPola->pola_trans ?></option>
								<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr rowspan="3">
				<td colspan="4">Penempatan Awal</td>								
			</tr>
			<tr>
				<td></td>
				<td>Tahun Anggaran</td>
				<td><Input type="text" required="required" name="thn" class="form-control" placeholder="ex: 2011/2012"></td>

			</tr>
			<tr>
				<td></td>
				<td>Penempatan Sampai Saat Ini</td>
				<td>
				KK
				</td>
				<td>Jiwa</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
					<div class="form-group">
					<label>Laki Laki</label>
					<Input required="required" class="form-control input-kk" onkeyup="hitungkk();" type="text" name="kk-l" id="kk-laki" value="0">				
					<label>Perempuan</label>
					<Input required="required"  onkeyup="hitungkk();" class="form-control" type="text" name="kk-p" id="kk-p" value="0">
					<label>Jumlah</label>
					<Input class="form-control" type="text" readonly="" id="jumlah-kk" value="0" name="jumlah-kk">
					</div>
				</td>
				<td>
					<div class="form-group">
					<label>Laki Laki</label>
					<Input required="required" class="form-control" onkeyup="hitungJiwa()" type="text" id="jiwa-l" value="0" name="jiwa-l" >				
					<label>Perempuan</label>
					<Input required="required" class="form-control" onkeyup="hitungJiwa()" type="text" value="0" id="jiwa-p" name="jiwa-p" >
					<label>Jumlah</label>
					<Input required="required" class="form-control" type="text" readonly="" value="0" id="jumlah-jiwa">
					</div>
				</td>

			</tr>
			<tr>
				<td>Status Pembinaan UPT</td>
				<td colspan="3">
					<select required="required" name="status_upt" class="form-control">
						<option selected="" disabled="">-- Pilih Status Pembinaan --</option>
						<?php foreach(list_status_pembinaan_lokasi() as $list_status_pembinaan_lokasi_key=>$list_status_pembinaan_lokasi_value):?>
							<option value="<?php echo $list_status_pembinaan_lokasi_key;?>"><?php echo $list_status_pembinaan_lokasi_value;?></option>
						<?php endforeach; ?>
					</select>

				</td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td align="right">
					<button type="submit" name="simpan" class="btn btn-primary btn-sm"><i class="fa fa-sm fa-check"></i> Simpan Data</button>

				</td>
			</tr>

		</table>
		
	</form>