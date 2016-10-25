<h2>Form Tambah Kondisi Fasilitas Pendidikan</h2>
<form method="post" action="<?php echo site_url('fasilitasPendidikan/tambah') ?>">
	<table class="table" style="width: 50%">
		<tr>
			<td>Lokasi</td>
			<td colspan="2">ini desa</td>
		</tr>
		<tr>
			<td>Jenis Gedung Pendidikan</td>
			<td colspan="2">
				<select name="jenisged" class="form-control">
					<option selected="" disabled="">-- Pilih Jenis Gedung --</option>
					<?php 

						foreach ($Gedung as $viewGed) {
							?>
							<option value="<?php echo $viewGed->kd_gedung ?>"><?php echo $viewGed->jenis_gedung ?></option>
							<?php
						}
					?>

				</select>

			</td>
		</tr>
		<tr>
			<td rowspan="3">Telah Dibangun</td>
		</tr>
		<tr>
			<td>Unit</td>
			<td><input type="text" name="bangun_unit" class="form-control"></td>
		</tr>
		<tr>
			<td>Lokal</td>
			<td><input type="text" name="bangun_lokal" class="form-control"></td>
		</tr>
		<tr>
			<td rowspan="3">Baik</td>
		</tr>
		<tr>
			<td>Unit</td>
			<td><input type="text" name="baik_unit" class="form-control"></td>
		</tr>
		<tr>
			<td>Lokal</td>
			<td><input type="text" name="baik_lokal" class="form-control"></td>
		</tr>
		<tr>
			<td rowspan="3">Rusak Sedang</td>
		</tr>
		<tr>
			<td>Unit</td>
			<td><input type="text" name="rusakS_unit" class="form-control"></td>
		</tr>
		<tr>
			<td>Lokal</td>
			<td><input type="text" name="rusakS_lokal" class="form-control"></td>
		</tr>
		<tr>
			<td rowspan="3">Rusak Berat</td>
		</tr>
		<tr>
			<td>Unit</td>
			<td><input type="text" name="rusakB_unit" class="form-control"></td>
		</tr>
		<tr>
			<td>Lokal</td>
			<td><input type="text" name="rusakB_lokal" class="form-control"></td>
		</tr>
		<tr>
			<td colspan="3">
				<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
			</td>
		</tr>

	</table>
</form>