<!-- Page Heading -->

                <div class="row">                                        
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('PengusahaanUsaha/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Pengusahaan Lahan Usaha
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
                                    <th>Pengusahaan Lahan Setahun Terakhir</th>
                                    <th>LP</th>
                                    <th>LU I</th>
                                    <th>LU II</th>
                                    <th>Lahan Diversifikasi</th>
                                    <th>Lahan Plasma</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php 
                                foreach ($viewPp as $view) {
                                  ?>
                                    <tr>
                                      <td><?php echo $view->plst; ?></td>
                                      <td><?php echo $view->lp; ?> Ha</td>
                                      <td><?php echo $view->luI; ?> Ha</td>
                                      <td><?php echo $view->luII; ?> Ha</td>
                                      <td><?php echo $view->ld; ?> Ha</td>  
                                      <td><?php echo $view->lplas; ?> Ha</td>
                                      <td>
                                        <a href="<?php echo site_url('PengusahaanUsaha/form_edit/'.$view->kd_pu) ?>">Edit</a>
                                        <a href="<?php echo site_url('PengusahaanUsaha/hapus/'.$view->kd_pu) ?>" onclick="return confirm('Yakin Akan Hapus Data?')">Hapus</a>
                                      </td>
                                    </tr>
                                  <?php
                                }
                                ?>
                            </table>
                    </div>    
                
                