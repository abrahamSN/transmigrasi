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

                <div class="row">
                  <div class="col-lg-12">
                    <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('Penduduk_pendidikan_formal/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>
                  </div>
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Penduduk Menurut Pendidikan Formal & Latihan Trans
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-lg-12">

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
                       <?php $tahun = list_tahun(); ?>
                       <select required="required" name="tahun" class="form-control">
                      <option value="">--Pilih tahun --</option>
                    <?php foreach($tahun as $key=>$value): ?>
                      <option value="<?php echo $value;?>" <?php echo @$_GET["tahun"]==$value?"selected":"";?>><?php echo $value;?></option>
                      <?php endforeach; ?>
                    </select>
                      </div>
                    </div>
                    </form>

                  </div>

                    <div class="row">
                            <table class="table table-hover table-bordered" style="font-size:11px;">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Jenis Pendidikan</th>
                                    <th colspan="3">Jiwa</th>

                                </tr>
                                 <tr>
                                    <th>Laki-Laki</th>
                                    <th>Perempuan</th>
                                    <th>Jumlah</th>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>


                            </table>
                        </div>
                  </div>
                </div>
