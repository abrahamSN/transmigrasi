<h2>Form Input Tanaman Tahunan</h2>
<form method="post" action="<?php echo site_url('tanamanTahunan/tambah') ?>">
	<table class="table" style="width: 60%">
		<tr>
			<td>Desa</td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td colspan="2">
				<select name="jenis" class="form-control">
					<option selected="" disabled="">-- Pilih Jenis Tanaman --</option>
					<option value="0">Hortikultura</option>
					<option value="1">Perkebunan</option>
				</select>
			</td>		
		</tr>
		<tr>
			<td>Jenis Tanaman</td>
			<td colspan="2">
				<input type="text" class="form-control" name="jenist">
			</td>
		</tr>
		<tr>
			<td rowspan="2">Jumlah Pohon</td>			
			<td>TBM *)</td>
			<td>
				<input type="text" name="tbm" class="form-control">
			</td>
		</tr>
		<tr>
			<td>TM **)</td>
			<td>
				<input type="text" name="tm" class="form-control">
			</td>
		</tr>
		<tr>
			<td>Total Produksi Dalam Setahun (Kw)</td>
			<td colspan="2">
				<input type="text" class="form-control" name="total">
			</td>
		</tr>
		<tr>
			<td>Harga Jual (Rp / Kg)</td>
			<td colspan="2">
				<input type="text" class="form-control" name="harga">
			</td>
		</tr>
		<tr>
			<td colspan="4" class="text-right">
				<button type="submit" class="btn btn-primary btn-sm">
					<i class="fa fa-check fa-sm"></i> Simpan Data					
				</button>
			</td>
		</tr>
	</table>
</form>
