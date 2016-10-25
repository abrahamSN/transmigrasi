<h2>Form Input Pemasaran Produksi</h2>
<form method="post" action="<?php echo site_url('pemasaranProduksi/tambah') ?>">
	<table class="table">
		<tr>
			<td>Tempat Penjualan</td>
			<td>
				<input type="text" name="tp" class="form-control">
			</td>
		</tr>
		<tr>
			<td>Urutan Prioritas</td>
			<td>
				<input type="number" name="prioritas" class="form-control">
			</td>
		</tr>
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