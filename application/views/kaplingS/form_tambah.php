<h2>Form Input Pengkaplingan Dan Sertifikasi</h2>
<form method="post" action="<?php echo site_url('KaplingS/tambah') ?>">
	<table class="table">
		<tr>
			<td>Desa</td>
			<td></td>
		</tr>
		<tr>
			<td>Uraian</td>
			<td>
				<textarea name="uraian" class="form-control"></textarea>
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
			<td colspan="2" class="text-right">
				<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-sm fa-check"></i> Simpan Data</button>
			</td>
		</tr>
	</table>

</form>