<!-- Page Heading -->

                <div class="row">                                        
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('MasalahStatus/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Masalah Status Lahan
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
                                  <th rowspan="2">Masalah</th>
                                  <th>Lahan Pekarangan</th>
                                  <th>Lahan Usaha I</th>
                                  <th>Lahan Usaha II</th>
                                  <th>Lahan Diversifikasi</th>
                                  <th>Lahan Pir</th>
                                  <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                  <th>Ha</th>
                                  <th>Ha</th>
                                  <th>Ha</th>
                                  <th>Ha</th>
                                  <th>Ha</th>
                                </tr>
                                <?php 
                                foreach ($viewMasalah as $view) {
                                  ?>
                                <tr>
                                  <td><?php echo $view->masalah ?></td> 
                                  <td><?php echo $view->lp ?></td> 
                                  <td><?php echo $view->luI ?></td> 
                                  <td><?php echo $view->luII ?></td> 
                                  <td><?php echo $view->ld ?></td> 
                                  <td><?php echo $view->lpir ?></td> 
                                  <td>
                                      <a href="<?php echo site_url('MasalahStatus/form_edit/'.$view->kd_ms)?>">Edit</a>
                                      <a href="<?php echo site_url('MasalahStatus/hapus/'.$view->kd_ms)?>" onclick="return confirm('Yakin Akan Hapus Data?')">Hapus</a>
                                  </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                    </div>    
                
                
