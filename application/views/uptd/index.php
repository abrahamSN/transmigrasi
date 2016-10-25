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
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('Uptd/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Uptd
                        </h1> 
                        <div class="well">

                        <form class="form-horizontal" method="get" action="<?php echo site_url("Uptd/index");?>" role="form">
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
                        <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>
                         <div class="col-sm-5">
                         <?php $tahun = list_tahun(); ?>
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
                          <button type="submit" name="filter" class="btn btn-default">Filter</button>
                        </div>
                      </div>
                    </form>

                  </div>                                                                   
                <!-- /.row -->                                
                                          
                            <table class="table table-hover table-bordered">                                
                                <tr>
                                    <th>Kode Lokasi</th>
                                    <th>Status Lokasi</th>
                                    <th>Nama Lokasi</th>
                                    <th>Nama Lokasi Lama</th>
                                    <th>Nomor WPT/LPT/SP</th>
                                    <th>SK Penetapan WPT/LPT/SP</th>
                                    <th>Nama Desa</th>
                                    <th>Lokasi Ini Terletak Pada Kecamatan</th>
                                    <th>Jenis Transmigrasi</th>
                                    <th>Pola Usaha Trans</th>
                                    <th>Penempatan Awal Tahun Anggaran Penempatan Sampai Saat Ini</th>
                                    <th>Status Pembinaan UPT</th>
                                </tr>
                                <?php if($UptdModel): ?>
                                <?php foreach($UptdModel as $UptdModel_row): ?>
                                <tr>
                                    <td><?php echo $UptdModel_row->kd_lok;?></td>
                                    <td><?php echo get_status_lokasi($UptdModel_row->status_lok);?></td>
                                    <td><?php echo $UptdModel_row->nama_lok;?></td>                                    
                                    <td><?php echo $UptdModel_row->nama_lok_lama;?></td>
                                    <td><?php echo $UptdModel_row->nomor_wpt;?></td>
                                    <td></td>                                    
                                    <td>Sungai Besar</td>
                                    <td>Matan Hilir Selatan</td>
                                    <td>Transmigrasi Umum</td>
                                    <td>Transmigrasi Umum / Perkebunan</td>                                    
                                    <td></td>
                                    <td>Masih Dibina</td>
                                </tr>
                              <?php endforeach; ?>
                              <?php endif; ?>
                            </table>
                    </div>    
                
                