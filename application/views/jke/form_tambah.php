<h2>Form Input Jenis Kelembagaan Ekonomi</h2>
<form method="post" action="<?php echo site_url('JenisKelembagaanEkonomi/tambah') ?>">
	<table class="table">
		<tr>
			<td>Jenis Kelembagaan</td>
			<td>
				<select name="jk" class="form-control">
					<option selected="" disabled="">-- Pilih Jenis Kelembagaan --</option>
					<?php 
					foreach ($kelembagaan as $view) {
						?>
						<option value="<?php echo $view->kd_kelembagaan ?>"><?php echo $view->kelembagaan ?></option>
						<?php
					}
					?>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>Jumlah Unit</td>
			<td>
				<input type="text" name="jumlah" class="form-control">
			</td>
		</tr>
		<tr>
			<td>Aktivitas</td>
			<td>
				<select name="ak" class="form-control">
					<option selected="" disabled="">-- Pilih Aktivitas --</option>
					<?php 
					foreach ($aktivitas as $view) {
						?>
						<option value="<?php echo $view->kd_ak ?>"><?php echo $view->aktivitas ?></option>
						<?php
					}
					?>
					
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button class="btn btn-primary btn-sm">
					<i class="fa fa-check fa-sm"></i> Simpan Data
				</button>
			</td>
		</tr>
	</table>

</form>