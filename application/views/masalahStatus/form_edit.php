<h2>Form Edit Masalah Status Lahan</h2>
<form method="post" action="<?php echo site_url('MasalahStatus/edit') ?>">
	<table class="table">
	<?php 
	foreach ($viewMasalah as $view) {
		?>
		<tr>		
			<td>Desa</td>
			<td></td>
		</tr>
		<tr>
			<td>Masalah</td>
			<td>
				<textarea name="masalah" class="form-control"><?php echo $view->masalah ?></textarea>
				<input type="hidden" name="kd" value="<?php echo $view->kd_ms ?>">
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
		<tr>
			<td>Lahan Pir</td>
			<td>
				<input type="text" name="lpir" class="form-control" value="<?php echo $view->lpir ?>">
			</td>
		</tr>
		<?php
	}
	?>
		<tr>
			<td colspan="2" class="text-right">
				<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
			</td>
		</tr>
	</table>

</form>