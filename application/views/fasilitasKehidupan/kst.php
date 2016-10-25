<!-- Page Heading -->

                <div class="row">                                        
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('Uptd/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Kondisi Sarana Transportasi dan Ongkos Angkut
                        </h1> 
                        <div class="well">

                        <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Provinsi</label>
                        <div class="col-sm-5">
                          <select class="form-control" name="Provinsi">
                          <option value="">--Pilih Provinsi--</option>
                          </select>
                        </div>
                        </div>

                        <div class="form-group">
                         <label for="inputEmail3" class="col-sm-2 control-label">Kabkot</label>
                         <div class="col-sm-5">
                          <select class="form-control" name="Kabkot">
                          <option value="">--Pilih Kabkot--</option>
                          </select>
                        </div>
                        </div>

                        <div class="form-group">
                         <label for="inputEmail3" class="col-sm-2 control-label">Desa</label>
                        <div class="col-sm-5"> 
                          <select class="form-control" name="Desa">
                          <option value="">--Pilih Desa--</option>
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
                                          
                            <table class="table table-bordered table-hover">
                              <tr>
                              	<th colspan="5">1. Dari Lokasi Ke Ibukota Provinsi</th>
                              </tr>
                              <tr>
                              	<th>Jarak</th>
                              	<th colspan="4"><span>365 Km</span></th>
                              </tr>
                              <tr>                              	
                                <th rowspan="2">Jenis Transportasi</th>
                                <th rowspan="2">Waktu Tempuh (Jam)</th>
                                <th colspan="2" class="text-center">Ongkos Angkut (Rp)</th>
                                <th rowspan="2">Jumlah Trip Per Minggu</th>
                              </tr>
                              <tr>
                              	<th>Barang (Per Kwintal)</th>
                              	<th>Penumpang (Per Orang)</th>
                              </tr>
                              <tr>                              	
                              	<td>Roda 2</td>
                              	<td>5 Jam</td>
                              	<td>Rp. 50.000</td>
                              	<td>Rp. 100.000</td>
                              	<td>Setiap Hari</td>
                              </tr>
                              
                              

                            </table>
                    </div>    
                
                