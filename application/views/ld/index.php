  <script>

$(document).ready(function(){

//dependent provinsi
  $("#prov").change(function(){
      $("#loadingprov").show();  
      var prov = $(this).val();
      $.get("<?php echo site_url();?>/Uptd/getKabkot/"+prov, function(data, status){
                $("#kab").html(data);
                $("#loadingprov").hide();     
      });      

    });


//dependent  kabupaten
  $("#kab").change(function(){

    var prov = $("#prov").val();
    var kabkot = $(this).val();
    $("#loadingkab").show();
    $.get("<?php echo site_url();?>/Uptd/getKecamatan/"+prov+"/"+kabkot,function(data,status){
          $("#kec").html(data);
          $("#loadingkab").hide();    
    });

  });

  //dependent kecamatan
  $("#kec").change(function(){

    var prov = $("#prov").val();
    var kabkot = $("#kab").val();
    var kec= $("#kec").val();

    $("#loadingkec").show();

    $.get("<?php echo site_url();?>/Uptd/getDesa/"+prov+"/"+kabkot+"/"+kec,function(data,status){

        $("#desa").html(data);
        $("#loadingkec").hide();
    
    });

  });



  });



  </script>
<?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata("success");?></div>
  <?php endif; ?>

  <?php if($this->session->flashdata('error')): ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata("error");?></div>
  <?php endif; ?>

<!-- Page Heading -->

                <div class="row">                                        
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('ld/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Lembaga Desa
                        </h1> 
                        <div class="well">

                        <form class="form-horizontal" method="get" action="<?php echo site_url("ld/");?>" role="form">
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Provinsi</label>
                        <div class="col-sm-5">
                          <select class="form-control" name="prov" id="prov">
                          <option disabled="" selected="">-- Pilih Provinsi --</option>
                          <?php if($provinsi): ?>
                            <?php foreach($provinsi as $provinsi_row): ?>
                              <option value="<?php echo $provinsi_row->nama;?>" <?php echo @$_GET["prov"]==$provinsi_row->nama?"selected":"";?>><?php echo $provinsi_row->kode_kec;?></option>
                            <?php endforeach; ?>
                          <?php endif; ?>
                          </select>
                        </div>
                        </div>

                        <div class="form-group">
                         <label for="inputEmail3" class="col-sm-2 control-label">Kabkot</label>
                         <div class="col-sm-5">
                          <select name="kab" id="kab" required="required" class="form-control">
                         <option disabled="" selected="">-- Pilih Kabupaten --</option>
                          <?php if($kabkot): ?>
                            <?php foreach($kabkot as $kabkot_row): ?>
                            <option value="<?php echo $kabkot_row->parent;?>" <?php echo @$_GET["kab"]==$kabkot_row->parent?"selected":"";?>><?php echo $kabkot_row->kode_kec;?></option>
                          <?php endforeach; ?>
                          <?php endif; ?>
                        </select>
                        </div>
                        </div>

                        <div class="form-group">
                         <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan</label>
                         <div class="col-sm-5">
                          <select name="kec" id="kec" required="required" class="form-control">
                         <option disabled="" selected="">-- Pilih Kecamatan --</option>
                          <?php if($kecamatan): ?>
                            <?php foreach($kecamatan as $kecamatan_row): ?>
                            <option value="<?php echo $kecamatan_row->tingkat;?>" <?php echo @$_GET["kec"]==$kecamatan_row->tingkat?"selected":"";?>><?php echo $kecamatan_row->kode_kec;?></option>
                          <?php endforeach; ?>
                          <?php endif; ?>
                        </select>
                        </div>
                        </div>


                        <div class="form-group">
                         <label for="inputEmail3" class="col-sm-2 control-label">Desa</label>
                        <div class="col-sm-5"> 
                         <select name="desa" id="desa" required="required" class="form-control">
                            <option disabled="" selected="">-- Pilih Desa --</option>
                            <?php if($desa): ?>
                              <?php foreach($desa as $desa_row): ?>
                                <option value="<?php echo $desa_row->daerah;?>" <?php echo @$_GET["desa"]==$desa_row->daerah?"selected":"";?>><?php echo $desa_row->kode_kec;?></option>
                              <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        </div>
                        </div>

                        <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>
                         <div class="col-sm-5">
                          <select class="form-control" name="Tahun">
                          <option value="">--Pilih Tahun--</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Filter</button>
                        </div>
                      </div>
                    </form>

                  </div>                                                                   
                <!-- /.row -->                                
                            <table class="table table-hover table-bordered">                                
                                <tr>
                                    <th rowspan="3">Lembaga Desa</th>   
                                    <th colspan="7" class="text-center">Jumlah</th>
                                    <th colspan="2">Keaktifan</th>
                                    <th rowspan="3">Aksi</th>
                                </tr>
                                <tr>
                                  <td rowspan="2">Unit</td>
                                  <td colspan="3">Pengurus</td>
                                  <td colspan="3">Anggota</td>
                                  <td rowspan="2">Aktif</td>
                                  <td rowspan="2">Non Aktif</td>
                                </tr>
                                <tr>
                                  <td>Laki-laki</td>
                                  <td>Perempuan</td>
                                  <td>Jumlah</td>
                                  <td>Laki-laki</td>
                                  <td>Perempuan</td>
                                  <td>Jumlah</td>
                                </tr>
                                <?php 
                                foreach ($viewData as $view) {                                  
                                  ?>
                                  <tr>
                                    <td><?php 
                                    if($view->ld == 0){echo "Rukun Warga / RW";}
                                    else if($view->ld == 1){echo "Rukun Tetangga / RT";}
                                    else if($view->ld == 2){echo "Kelompencapir";}
                                    else if($view->ld == 3){echo "Siskamling / SRD";}
                                    else if($view->ld == 4){echo "Musyawarah Warga";}
                                    else if($view->ld == 5){echo "Kelompok Tani";}
                                    else if($view->ld == 5){echo "Kelompok Usaha Bersama";}
                                    else if($view->ld == 5){echo "Karang Taruna";}
                                    else{echo "GAPOKTAN";}
                                    ?></td>
                                    <td><?php echo $view->unit ?></td>
                                    <td><?php echo $view->pengurusL ?></td>
                                    <td><?php echo $view->pengurusP ?></td>
                                    <td><?php echo $view->pengurusP + $view->pengurusL ?></td>
                                    <td><?php echo $view->anggotaL ?></td>
                                    <td><?php echo $view->anggotaP ?></td>
                                    <td><?php echo $view->anggotaP + $view->anggotaL ?></td>
                                    <td><?php echo $view->aktif ?></td>
                                    <td><?php echo $view->naktif ?></td>
                                    <td>
                                      <a href="<?php echo site_url('ld/form_edit/'.$view->kd_ld) ?>">Edit</a>
                                      <a href="<?php echo site_url('ld/hapus/'.$view->kd_ld) ?>" onclick="return confirm('Yakin Akan Hapus Data ?')">Hapus</a>
                                    </td>
                                	</tr>
                                	<?php
                                }
                                ?>
                                
                            </table>
                    </div>                                

