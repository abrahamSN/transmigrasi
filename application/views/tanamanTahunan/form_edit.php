<h2>Form Input Tanaman Tahunan</h2>
<form method="post" action="<?php echo site_url('tanamanTahunan/edit') ?>">
	<table class="table" style="width: 60%">
	<?php 
	foreach ($viewData as $view) {
		?>
		<tr>
			<td>Desa</td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td colspan="2">
				<input type="hidden" name="id" value="<?php echo $view->kd_tt ?>">
				<select name="jenis" class="form-control">
					<option selected="" disabled="">-- Pilih Jenis Tanaman --</option>
					<option value="0" <?php if($view->jenis == "0"){ echo "selected=''";  } ?>>Hortikultura</option>
					<option value="1" <?php if($view->jenis == "1"){echo "selected=''";  } ?>>Perkebunan</option>
				</select>
			</td>		
		</tr>
		<tr>
			<td>Jenis Tanaman</td>
			<td colspan="2">
				<input type="text" class="form-control" name="jenist" value="<?php echo $view->jenist;?>">
			</td>
		</tr>
		<tr>
			<td rowspan="2">Jumlah Pohon</td>			
			<td>TBM *)</td>
			<td>
				<input type="text" name="tbm" class="form-control" value="<?php echo $view->tbm;?>">
			</td>
		</tr>
		<tr>
			<td>TM **)</td>
			<td>
				<input type="text" name="tm" class="form-control" value="<?php echo $view->tm;?>">
			</td>
		</tr>
		<tr>
			<td>Total Produksi Dalam Setahun (Kw)</td>
			<td colspan="2">
				<input type="text" class="form-control" name="total" value="<?php echo $view->total;?>">
			</td>
		</tr>
		<tr>
			<td>Harga Jual (Rp / Kg)</td>
			<td colspan="2">
				<input type="text" class="form-control" name="harga" value="<?php echo $view->harga;?>">
			</td>
		</tr>
		<?php
	}
	?>
		<tr>
			<td colspan="4" class="text-right">
				<button type="submit" class="btn btn-primary btn-sm">
					<i class="fa fa-check fa-sm"></i> Simpan Data					
				</button>
			</td>
		</tr>
	</table>
</form>
