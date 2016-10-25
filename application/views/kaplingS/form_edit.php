<h2>Form Edit Pengkaplingan Dan Sertifikasi</h2>
<form method="post" action="<?php echo site_url('KaplingS/edit') ?>">
	<table class="table">
	<?php 
	foreach ($viewKapling as $view) {
		?>
		<tr>
			<td>Desa</td>
			<td></td>
		</tr>
		<tr>
			<td>Uraian</td>
			<td>
				<textarea name="uraian" class="form-control"><?php echo $view->uraian ?></textarea>
				<input type="hidden" value="<?php echo $view->kd_kapling ?>" name="kd">
			</td>
		</tr>
		<tr>
			<td>Lahan Pekarangan</td>
			<td>
				<input type="text" name="lp" class="form-control" value="<?php echo $view->lp ?>">
			</td>
		</tr>
		<tr>
			<td>Lahan Usaha I</td>
			<td>
				<input type="text" name="luI" class="form-control" value="<?php echo $view->luI ?>">
			</td>
		</tr>		
		<tr>
			<td>Lahan Usaha II</td>
			<td>
				<input type="text" name="luII" class="form-control" value="<?php echo $view->luII ?>">
			</td>
		</tr>		
		<tr>
			<td>Lahan Diversifikasi</td>
			<td>
				<input type="text" name="ld" class="form-control" value="<?php echo $view->ld ?>">
			</td>
		</tr>
		<?php
	}

	?>
		<tr>
			<td colspan="2" class="text-right">
				<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-sm fa-check"></i> Edit Data</button>
			</td>
		</tr>
	</table>

</form>