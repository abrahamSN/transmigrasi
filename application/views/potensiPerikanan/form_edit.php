<h2>Form Edit Potensi Usaha Perikanan</h2>
<form method="post" action="<?php echo site_url('potensiPerikanan/edit') ?>">
	<table class="table">
	<?php 
	foreach ($viewData as $view) {
		?>
		<tr>
			<td>Desa</td>
			<td></td>
		</tr>
		<tr>
			<td>Jenis Ikan</td>
			<td>
				<input type="hidden" name="id" class="form-control" value="<?php echo $view->kd_pp; ?>">
				<input type="text" name="jenis" class="form-control" value="<?php echo $view->jenis_ikan; ?>">
			</td>
		</tr>
		<tr>
			<td>Luas Kolam (M<sup>2</sup>)</td>
			<td>
				<input type="text" name="lk" class="form-control" value="<?php echo $view->lk; ?>">
			</td>
		</tr>
		<tr>
			<td>Jumlah Produksi Setahun(KW)</td>
			<td>
				<input type="text" name="jps" class="form-control" value="<?php echo $view->jumlah_produksi; ?>">
			</td>
		</tr>		
		<tr>
			<td>Harga Jual</td>
			<td>
				<input type="text" name="hargajual" class="form-control" value="<?php echo $view->harga_jual; ?>">
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