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
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('kesenian/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Kesenian
                        </h1> 
                        <div class="well">

                        <form class="form-horizontal" method="get" action="<?php echo site_url("kesenian/");?>" role="form">
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
                            <div class="alert alert-success"> 
                            Keterangan sumber prasarana *)<br/>
                            1. Swadaya <br/>
                            2. Bantuan DepnakerTrans <br/>
                            3. Bantuan Non DepnakerTrans <br/>
                            </div>    
                            <table class="table table-hover table-bordered">                                
                                <tr>
                                    <th rowspan="2">Kesenian</th>                                    
                                    <th rowspan="2">Jumlah Perkumpulan</th>
                                    <th colspan="3">Total Anggota (Orang)</th>
                                    <th rowspan="2">Kegiatan Per Bulan (Kali)</th>
                                    <th colspan="2">Perlengkapan Prasarana</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                  <th>Laki-laki</th>
                                  <th>Perempuan</th>
                                  <th>Jumlah</th>
                                  <th>Ketersediaan</th>
                                  <th>Sumber Prasarana</th>
                                </tr>
                                <?php 
                                foreach ($viewData as $view) {                                  
                                  ?>
                                  <tr>
                                    <td>
                                      <?php 
                                      if($view->kesenian == 0){echo "Ludruk";}
                                      else if($view->kesenian == 1){echo "Ketoprak";} 
                                      else if($view->kesenian == 2){echo "Wayang Orang";}
                                      else if($view->kesenian == 3){echo "Wayang Kulit";}
                                      else if($view->kesenian == 4){echo "Orkes Keroncong";}
                                      else if($view->kesenian == 5){echo "Orkes Melayu/Dangdut";}
                                      else{echo "Rebana";}
                                      ?>
                                    </td>
                                    <td>
                                      <?php echo $view->jumlahK ?>
                                    </td>
                                    <td>
                                      <?php echo $view->totalL ?>
                                    </td>
                                    <td>
                                      <?php echo $view->totalP ?>
                                    </td>
                                    <td>
                                      <?php echo $view->totalP + $view->totalL ?>
                                    </td>
                                    <td>
                                      <?php echo $view->kegiatan ?>                                      
                                    </td>
                                    <td>
                                      <?php 
                                      if($view->prasarana == 0){echo "Ya";}else{echo "tidak";} ?>
                                    </td>
                                    <td>
                                      <?php                                      
                                      if($view->sumber1 == 0){echo "";}else{echo "1&nbsp;";}
                                      if($view->sumber2 == 0){echo "";}else{echo "2&nbsp;";}
                                      if($view->sumber3 == 0){echo "";}else{echo "3&nbsp;";}
                                       ?>
                                    </td>
                                    <td>
                                      <a href="<?php echo site_url('kesenian/form_edit/'.$view->kd_ks) ?>">Edit</a>
                                      <a href="<?php echo site_url('kesenian/hapus/'.$view->kd_ks) ?>" onclick="return confirm('Yakin Akan Hapus Data ?')">Hapus</a>
                                    </td>
                                	</tr>
                                	<?php
                                }
                                ?>
                                
                            </table>
                    </div>                                