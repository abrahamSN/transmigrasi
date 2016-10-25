<h2>Form Edit Pemasaran Produksi</h2>
<form method="post" action="<?php echo site_url('pemasaranProduksi/edit') ?>">
	<table class="table">
	<?php 
	foreach ($viewData as $view) {
		?>
		<tr>
			<td>Tempat Penjualan</td>
			<td>
				<input type="hidden" value="<?php echo $view->kd_pp ?>" name="id">
				<input type="text" name="tp" class="form-control" value="<?php echo $view->tempat_penjualan ?>">
			</td>
		</tr>
		<tr>
			<td>Urutan Prioritas</td>
			<td>
				<input type="number" name="prioritas" class="form-control" value="<?php echo $view->prioritas ?>">
			</td>
		</tr>
		<?php
	}
	?>
		<tr>
			<td colspan="2">
				<button type="submit" class="btn btn-primary btn-sm">
					<i class="fa fa-check fa-sm"></i>
					Simpan Data
				</button>
			</td>
		</tr>
	</table>

</form>