	<h3>Form Input Uptd</h3>
	<form method="post" action="<?php echo site_url('Uptd/tambah') ?>">
		<table class="table">
			<tr>
				<td align="center">Kode Lokasi</td>
				<td>
					<select name="prov" class="form-control">
						<option disabled="" selected="">-- Pilih Provinsi --</option>
					</select>
				</td>
				<td>
					<select name="kab" class="form-control">
						<option disabled="" selected="">-- Pilih Kabupaten --</option>
					</select>
				</td>
				<td>
					<select name="lok" class="form-control">
						<option disabled="" selected="">-- Pilih Lokasi --</option>
					</select>
				</td>
			</tr>

		</table>
	</form>