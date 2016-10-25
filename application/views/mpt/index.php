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
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('mpt/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Manajemen Pelayanan Transmigrasi
                        </h1> 
                        <div class="well">

                        <form class="form-horizontal" method="get" action="<?php echo site_url("mpt/");?>" role="form">
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
                                    <th rowspan="4">Petugas UPT atau Pendukung</th>   
                                    <th colspan="12" class="text-center">Jumlah</th>
                                    <th rowspan="4">Pendidikan terakhir</th>
                                    <th rowspan="4">Aksi</th>
                                </tr>
                                <tr>                                  
                                  <td colspan="6" class="text-center">PNS</td>
                                  <td colspan="6" class="text-center">Honorer</td>                                                                  
                                </tr>
                                <tr>
                                  <td colspan="3" class="text-center">Aktif</td>
                                  <td colspan="3" class="text-center">Tidak Aktif</td>
                                  <td colspan="3" class="text-center">Aktif</td>
                                  <td colspan="3" class="text-center">Tidak Aktif</td>
                                </tr>
                                <tr>
                                  <td>Laki-laki</td>
                                  <td>Perempuan</td>
                                  <td>Jumlah</td>
                                  <td>Laki-laki</td>
                                  <td>Perempuan</td>
                                  <td>Jumlah</td>
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
                                    if($view->petugasUpt == 0){echo "KA KUPT / Penanggung Jawab UPT";}
                                    else if($view->petugasUpt == 1){echo "Pembina Bidang Ekonomi dan Sosbud";}
                                    else if($view->petugasUpt == 2){echo "Pembina Bidang Sarana dan Prasarana Pemukiman";}
                                    else if($view->petugasUpt == 3){echo "Petugas Penyuluh Pertanian";}
                                    else if($view->petugasUpt == 4){echo "TPKMP - BUT";}
                                    else if($view->petugasUpt == 5){echo "TPKMP - KUD";}
                                    else{echo "GAPOKTAN";}
                                    ?></td>
                                    <td><?php echo $view->pAktifL ?></td>
                                    <td><?php echo $view->pAktifP ?></td>
                                    <td><?php echo $view->pAktifL + $view->pAktifP ?></td>
                                    <td><?php echo $view->pnAktifL ?></td>
                                    <td><?php echo $view->pnAktifP ?></td>
                                    <td><?php echo $view->pnAktifP + $view->pnAktifL ?></td>
                                    <td><?php echo $view->hAktifL ?></td>
                                    <td><?php echo $view->hAktifP ?></td>
                                    <td><?php echo $view->hAktifP + $view->hAktifL ?></td>
                                    <td><?php echo $view->hnAktifL ?></td>
                                    <td><?php echo $view->hnAktifP ?></td>
                                    <td><?php echo $view->hnAktifP + $view->hnAktifL ?></td>
                                    <td><?php 
                                    if($view->penAkhir == 0){echo "SMA";} 
                                    else if($view->penAkhir == 1){echo "D1/D2";} 
                                    else if($view->penAkhir == 2){echo "D3";} 
                                    else if($view->penAkhir == 3){echo "S1";} 
                                      ?>
                                    </td>
                                    <td>
                                      <a href="<?php echo site_url('mpt/form_edit/'.$view->kd_mpt) ?>">Edit</a>
                                      <a href="<?php echo site_url('mpt/hapus/'.$view->kd_mpt) ?>" onclick="return confirm('Yakin Akan Hapus Data ?')">Hapus</a>
                                    </td>
                                	</tr>
                                	<?php
                                }
                                ?>
                                
                            </table>
                    </div>                                

