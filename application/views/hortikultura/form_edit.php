<h2>Form Edit Tanaman Semusim (Hortikultura)</h2>
<form method="post" action="<?php echo site_url('Hortikultura/edit') ?>">
	<table class="table">
	<?php 
	foreach ($viewHk as $view) {
		?>	
		<tr>
			<td>Desa</td>
			<td></td>
		</tr>
		<tr>
			<td>Jenis Tanaman</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $view->kd_hk ?>"> 
				<input type="text" name="jenis" class="form-control" value="<?php echo $view->jenis_tanaman ?>">
			</td>
		</tr>
		<tr>
			<td>Luas Tanam</td>
			<td>
				<input type="text" name="lt" class="form-control" value="<?php echo $view->lt ?>">
			</td>
		</tr>
		<tr>
			<td>Luas Panen</td>
			<td>
				<input type="text" name="lp" class="form-control" value="<?php echo $view->lp ?>"> 
			</td>
		</tr>		
		<tr>
			<td>Produktivitas</td>
			<td>
				<input type="text" name="produktiv" class="form-control" value="<?php echo $view->prodi ?>">
			</td>
		</tr>		
		<tr>
			<td>Harga Jual</td>
			<td>
				<input type="text" name="hargajual" class="form-control" value="<?php echo $view->harga ?>">
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