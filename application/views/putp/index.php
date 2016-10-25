<!-- Page Heading -->

                <div class="row">                                        
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('putp/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Potensi Usaha Tanaman Pangan 
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
                                          
                            <table class="table table-hover table-bordered">                                
                                <tr>
                                    <th>Jenis Tanaman</th>
                                    <th>Luas Tanam (Ha)</th>
                                    <th>Luas Panen (Ha)</th>
                                    <th>Produktivitas *) (Kw/Ha)</th>
                                    <th>Harga Jual (Rp/Kg)</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php 
                                foreach ($viewPutp as $view) {
                                  ?>
                                  <tr>
                                    <td><?php echo $view->jenis_tanaman ?></td>
                                    <td><?php echo $view->lt ?> Ha</td>
                                    <td><?php echo $view->lp ?> Ha</td>
                                    <td><?php echo $view->prodi ?> Kw / Ha</td>
                                    <td>Rp. <?php echo $view->harga ?> / Kg</td>
                                    <td>
                                      <a href="<?php echo site_url('putp/form_edit/'.$view->kd_putp) ?>">Edit</a>
                                      <a href="<?php echo site_url('putp/hapus/'.$view->kd_putp) ?>" onclick="return confirm('Yakin Akan Hapus Data?')">Hapus</a>
                                    </td>
                                  </tr>
                                  <?php
                                }
                                ?>
                                
                            </table>
                            <div class="alert alert-success" role="alert">
                              <table class="table">
                                <tr>
                                  <td rowspan="5">Keterangan</td>
                                  <td>*Produktivitas</td>
                                </tr>
                                <tr>
                                  <td>Padi = Gabah Kering Giling</td>
                                </tr>
                                <tr>
                                  <td>Jagung = Jagung Pipilan Kering</td>
                                </tr>
                                <tr>
                                  <td>Kedelai = Biji Kering</td>
                                </tr>
                                <tr>
                                  <td>Kacang Tanah = Biji Kering</td>
                                </tr>


                              </table>                              
                            </div>
                    </div>    
                
                