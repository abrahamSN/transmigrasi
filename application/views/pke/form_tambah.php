<h2>Form Input Pelaku Kelembagaan Ekonomi</h2>
<form method="post" action="<?php echo site_url('PelakuKelembagaanEkonomi/tambah') ?>">
	<table class="table">
		<tr>
			<td>Uraian</td>
			<td>
				<input type="text" name="uraian" class="form-control">
			</td>
		</tr>
		<tr>
			<td>Transmigran Daerah Asal</td>
			<td>
				<input type="text" name="tda" class="form-control">
			</td>
		</tr>		
		<tr>
			<td>Transmigran Penduduk Setempat</td>
			<td>
				<input type="text" name="tps" class="form-control">
			</td>
		</tr>		
		<tr>
			<td>Penduduk Setempat</td>
			<td>
				<input type="text" name="ps" class="form-control">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button class="btn btn-primary btn-sm" type="submit">
					<i class="fa fa-check fa-sm"></i>
					Simpan Data
				</button>
			</td>
		</tr>
	</table>

</form>