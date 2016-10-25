<h2>Form Edit Pelaku Kelembagaan Ekonomi</h2>
<form method="post" action="<?php echo site_url('PelakuKelembagaanEkonomi/edit') ?>">
	<table class="table">
	<?php 
	foreach ($viewData as $view) {
		?>
		<tr>
			<td>Uraian</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $view->kd_pke ?>">
				<input type="text" name="uraian" class="form-control" value="<?php echo $view->uraian ?>">
			</td>
		</tr>
		<tr>
			<td>Transmigran Daerah Asal</td>
			<td>
				<input type="text" name="tda" class="form-control" value="<?php echo $view->tda ?>">
			</td>
		</tr>		
		<tr>
			<td>Transmigran Penduduk Setempat</td>
			<td>
				<input type="text" name="tps" class="form-control" value="<?php echo $view->tps ?>">
			</td>
		</tr>		
		<tr>
			<td>Penduduk Setempat</td>
			<td>
				<input type="text" name="ps" class="form-control" value="<?php echo $view->ps ?>">
			</td>
		</tr>
		<?php
	}
	?>
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