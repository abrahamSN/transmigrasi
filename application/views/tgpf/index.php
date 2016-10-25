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
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('tgpf/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Tenaga Guru Pendidikan Formal
                        </h1> 
                        <div class="well">

                        <form class="form-horizontal" method="get" action="<?php echo site_url("tgpf/");?>" role="form">
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
                                    <th rowspan="2">Uraian</th>
                                    <th colspan="3" class="text-center">SLTP</th>
                                    <th colspan="3" class="text-center">SMU / SMK</th>
                                    <th colspan="3" class="text-center">D1 / D2</th>
                                    <th colspan="3" class="text-center">D3</th>
                                    <th colspan="3" class="text-center">S1</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                  <th>L</th>
                                  <th>P</th>
                                  <th>Jumlah</th>

                                  <th>L</th>
                                  <th>P</th>
                                  <th>Jumlah</th>

                                  <th>L</th>
                                  <th>P</th>
                                  <th>Jumlah</th>

                                  <th>L</th>
                                  <th>P</th>
                                  <th>Jumlah</th>

                                  <th>L</th>
                                  <th>P</th>
                                  <th>Jumlah</th>
                                </tr>
                                <?php 
                                foreach ($viewData as $view) {
                                  ?>
                                  <tr>
                                    <td>
                                      <?php 
                                      if($view->uraian == 0){
                                        echo "Guru TK(PNS)";
                                        }
                                      else if($view->uraian == 1){
                                        echo "Guru TK(Honor)";
                                        }
                                      else if($view->uraian == 2){
                                        echo "Guru SD Negeri(PNS)";
                                        } 
                                      else if($view->uraian == 3){
                                        echo "Guru SD Negeri(Honor)";
                                        }                                         
                                      else if($view->uraian == 4){
                                        echo "Guru SD Swasta(PNS)";
                                        }                                         
                                      else if($view->uraian == 5){
                                        echo "Guru SD Swasta(Honor)";
                                        }                                        
                                      else if($view->uraian == 6){
                                        echo "Guru SLTP (PNS)";
                                        }                                         
                                      else if($view->uraian == 7){
                                        echo "Guru SLTP (Honor)";
                                        }                   
                                      else if($view->uraian == 8){
                                        echo "Guru SMU / SMK (PNS)";
                                        }                         
                                        else{
                                          echo "Guru SMU / SMK (Honor)";
                                        }                                     
                                    ?>
                                    </td>

                                    <td><?php echo $view->sltpL ?></td>
                                    <td><?php echo $view->sltpP ?></td>
                                    <td><?php echo $view->sltpL + $view->sltpP?></td>

                                    <td><?php echo $view->smuL ?></td>     
                                    <td><?php echo $view->smuP ?></td>
                                    <td><?php echo $view->smuL + $view->smuP?></td>

                                    <td><?php echo $view->d1L ?></td>
                                    <td><?php echo $view->d1P ?></td>
                                    <td><?php echo $view->d1L + $view->d1P?></td>

                                    <td><?php echo $view->d3L ?></td>
                                    <td><?php echo $view->d3P ?></td>
                                    <td><?php echo $view->d3L + $view->d3P?></td>

                                    <td><?php echo $view->s1L ?></td>
                                    <td><?php echo $view->s1P ?></td>
                                    <td><?php echo $view->s1L + $view->s1P?></td>
                                    
                                    
                                    <td>
                                      <a href="<?php echo site_url('tgpf/form_edit/'.$view->kd_tgpf) ?>">Edit</a>
                                      <a href="<?php echo site_url('tgpf/hapus/'.$view->kd_tgpf) ?>" onclick="return confirm('Yakin Akan Hapus Data ?')">Hapus</a>
                                    </td>
                                	</tr>
                                	<?php
                                }
                                ?>
                                
                            </table>
                    </div>    
                
                