<h2>Form Edit Jenis Kelembagaan Ekonomi</h2>
<form method="post" action="<?php echo site_url('JenisKelembagaanEkonomi/edit') ?>">
	<table class="table">
	<?php 
	foreach ($jke as $data) {
		?>
		<tr>
			<td>Jenis Kelembagaan</td>
			<td>
				<input type="hidden" value="<?php echo $data->kd_jke ?>" name="id">
				<select name="jk" class="form-control">
					<option selected="" disabled="">-- Pilih Jenis Kelembagaan --</option>
					<?php 
					foreach ($kelembagaan as $view) {
						?>
						<option value="<?php echo $view->kd_kelembagaan ?>" <?php if($data->kd_lembaga == $view->kd_kelembagaan){echo "selected=''";} ?> ><?php echo $view->kelembagaan ?></option>
						<?php
					}
					?>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>Jumlah Unit</td>
			<td>
				<input type="text" name="jumlah" class="form-control" value="<?php echo $data->jumlah ?>">
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
						<option value="<?php echo $view->kd_ak ?>" <?php if($data->kd_ak == $view->kd_ak){echo "selected=''";} ?>><?php echo $view->aktivitas ?></option>
						<?php
					}
					?>
					
				</select>
			</td>
		</tr>
		<?php
	}
	?>
		<tr>
			<td colspan="2">
				<button class="btn btn-primary btn-sm">
					<i class="fa fa-check fa-sm"></i> Simpan Data
				</button>
			</td>
		</tr>
	</table>

</form>