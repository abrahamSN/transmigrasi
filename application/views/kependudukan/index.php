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
                  <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('Kependudukan/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>

                        <h1>
                            Kependudukan<br/>
                            Penduduk Berdasarkan Struktur Usia
                        </h1>
                        <div class="well">

                        <form class="form-horizontal" role="form">
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
                                 <option value="<?php echo $desa_row->wilayah_id;?>" <?php echo @$_GET["desa"]==$desa_row->wilayah_id?"selected":"";?>><?php echo $desa_row->kode_kec;?></option>
                               <?php endforeach; ?>
                             <?php endif; ?>
                         </select>
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">UPTD</label>
                         <div class="col-sm-5">
                          <select class="form-control" name="UPTD">
                          <option value="">--Pilih UPTD--</option>
                          </select>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>
                         <div class="col-sm-5">
                           <?php $tahun = array("2014","2015","2016"); ?>
                           <select required="required" name="tahun" class="form-control">
                          <option value="">--Pilih tahun --</option>
                        <?php foreach($tahun as $key=>$value): ?>
                          <option value="<?php echo $value;?>" <?php echo @$_GET["tahun"]==$value?"selected":"";?>><?php echo $value;?></option>
                          <?php endforeach; ?>
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
                      <table class="table table-bordered table-hover">
                          <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Struktur Umur (Tahun)</th>
                            <th colspan="2">Jenis Kelamin</th>
                            <th rowspan="2">Jumlah</th>
                          </tr>
                          <tr>
                            <td>Laki Laki</td>
                            <td>Perempuan</td>
                          </tr>
                          <?php
                          $i=1;
                          $jumlahL = 0;
                          $jumlahP = 0;
                          $jumlah = 0;
                          foreach ($usia as $viewUsia) {

                            $jumlahL +=$viewUsia->lakilaki;
                            $jumlahP +=$viewUsia->perempuan;
                            $jumlah = $jumlahP+$jumlahL;
                            ?>
                              <tr class="text-center">
                                <td><?php echo $i;?></td>
                                <td><?php echo $viewUsia->usia; ?></td>
                                <td><?php echo $viewUsia->lakilaki ?></td>
                                <td><?php echo $viewUsia->perempuan ?></td>
                                <td>0</td>
                              </tr>
                            <?php

                          $i++;}
                          ?>
                          <tr>
                            <td colspan="2">Jumlah</td>
                            <td class="text-center"><?php echo $jumlahL ?></td>
                            <td class="text-center"><?php echo $jumlahP ?></td>
                            <td class="text-center"><?php echo $jumlah ?></td>
                          </tr>

                      </table>
                    </div>
