<h2>Form Input Masalah Status Lahan</h2>
<form method="post" action="<?php echo site_url('MasalahStatus/tambah') ?>">
	<table class="table">
		<tr>
			<td>Desa</td>
			<td></td>
		</tr>
		<tr>
			<td>Masalah</td>
			<td>
				<textarea name="masalah" class="form-control"></textarea>
			</td>
		</tr>
		<tr>
			<td>Lahan Pekarangan</td>
			<td>
				<input type="text" name="lp" class="form-control">
			</td>
		</tr>
		<tr>
			<td>Lahan Usaha I</td>
			<td>
				<input type="text" name="luI" class="form-control">
			</td>
		</tr>		
		<tr>
			<td>Lahan Usaha II</td>
			<td>
				<input type="text" name="luII" class="form-control">
			</td>
		</tr>		
		<tr>
			<td>Lahan Diversifikasi</td>
			<td>
				<input type="text" name="ld" class="form-control">
			</td>
		</tr>
		<tr>
			<td>Lahan Pir</td>
			<td>
				<input type="text" name="lpir" class="form-control">
			</td>
		</tr>
		<tr>
			<td colspan="2" class="text-right">
				<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
			</td>
		</tr>
	</table>

</form>