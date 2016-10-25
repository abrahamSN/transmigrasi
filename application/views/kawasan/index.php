<?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata("success");?></div>
  <?php endif; ?>

  <?php if($this->session->flashdata('error')): ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata("error");?></div>
  <?php endif; ?>


<div class="row">
<div class="col-md-12">

<a style="margin-bottom:5px" 
class="btn btn-primary btn-sm" 
href="<?php echo site_url('kAgama/form_tambah') ?>">
<i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
<h1>Kawasan</h1>

<table class="table table-bordered table-striped">
<thead>
	<tr>
	<th>Nomor WPT/LPT/SP</th>
	<th>SK Penetapan WPT/LPT/SP</th>
	<th>Nama Kawasan</th>
	</tr>	
</thead>
<tbody>
<?php if($kawasan): ?>
<?php foreach($kawasan as $kawasan_row): ?>
<tr>
	<td><?php echo $kawasan_row->no_wtp;?></td>
	<td><?php echo $kawasan_row->sk_penetapan;?></td>
	<td><?php echo $kawasan_row->nama_kawasan;?></td>
</tr>
<?php endforeach; ?>
<?php endif; ?>
</tbody>
</table>
               
</div>
</div>