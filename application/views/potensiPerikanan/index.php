<!-- Page Heading -->

                <div class="row">                                        
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('potensiPerikanan/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Potensi Usaha Perikanan
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
                                    <th>Jenis Ikan</th>
                                    <th>Luas Kolam (M<sup>2</sup>)</th>
                                    <th>Jumlah Produksi Setahun (KW)</th>
                                    <th>Harga Jual (Rp / Kg)</th>            
                                    <th>Aksi</th>                        
                                </tr>
                                <?php 
                                foreach ($viewPP as $view) {
                                  ?>
                                  <tr>
                                    <td><?php echo $view->jenis_ikan ?></td>
                                    <td><?php echo $view->lk ?> M<sup>2</sup></td>
                                    <td><?php echo $view->jumlah_produksi ?> Kw</td>
                                    <td>Rp. <?php echo $view->harga_jual ?> / Kg</td>
                                    <td>
                                      <a href="<?php echo site_url('potensiPerikanan/form_edit/'.$view->kd_pp) ?>">Edit</a>
                                      <a href="<?php echo site_url('potensiPerikanan/hapus/'.$view->kd_pp) ?>" onclick="return confirm('Yakin Akan Hapus Data?')">Hapus</a>
                                    </td>
                                  </tr>
                                  <?php
                                }
                                ?>
                            </table>
                    </div>    
                
                