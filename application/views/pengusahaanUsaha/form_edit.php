<h2>Form Edit Pengusahaan Lahan Usaha</h2>
<form method="post" action="<?php echo site_url('pengusahaanUsaha/edit') ?>">
	<table class="table">
	<?php 
	foreach ($viewPp as $view) {
		?>
		<tr>
			<td>Desa</td>
			<td></td>
		</tr>
		<tr>
			<td>Pengusahaan Lahan Setahun Terakhir</td>
			<td>
				<input type="hidden" name="kd" class="form-control" value="<?php echo $view->kd_pu; ?>">
				<input type="text" name="plst" class="form-control" value="<?php echo $view->plst; ?>">
			</td>
		</tr>
		<tr>
			<td>Lahan Pekarangan</td>
			<td>
				<input type="text" name="lp" class="form-control" value="<?php echo $view->lp; ?>">
			</td>
		</tr>
		<tr>
			<td>Lahan Usaha I</td>
			<td>
				<input type="text" name="luI" class="form-control" value="<?php echo $view->luI; ?>">
			</td>
		</tr>		
		<tr>
			<td>Lahan Usaha II</td>
			<td>
				<input type="text" name="luII" class="form-control" value="<?php echo $view->luII; ?>">
			</td>
		</tr>		
		<tr>
			<td>Lahan Diversifikasi</td>
			<td>
				<input type="text" name="ld" class="form-control" value="<?php echo $view->ld; ?>">
			</td>
		</tr>		
		<tr>
			<td>Lahan Plasma</td>
			<td>
				<input type="text" name="lplas" class="form-control" value="<?php echo $view->lplas; ?>">
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