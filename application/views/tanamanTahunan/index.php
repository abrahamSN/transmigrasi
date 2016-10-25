<!-- Page Heading -->

                <div class="row">                                        
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('tanamanTahunan/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Tanaman Tahunan (Potensi Perkebunan dan Hortikultura)
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
                            <div class="alert alert-success">
                              *)TBM  = Tanaman Belum Menghasilkan<br/>
                              **)TM  = Tanaman Menghasilkan<br/>
                            </div>   
                            <table class="table table-hover table-bordered">                                
                                <tr>
                                    <th rowspan="2">Jenis Tanaman</th>
                                    <th colspan="2">Jumlah (Pohon)</th>
                                    <th rowspan="2" style="width:30%">Total Produksi Dalam Setahun (Kw)</th>
                                    <th rowspan="2">Harga Jual (Rp / Kg)</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                  <th>TBM *)</th>
                                  <th>TM **)</th>
                                </tr>
                                <tr>
                                  <th>HORTIKULTURA</th>
                                  <th colspan="6"></th>
                                </tr>
                                <?php 
                                foreach ($viewHt as $view) {
                                  ?>
                                <tr>
                                  <td><?php echo $view->jenist ?></td>
                                  <td><?php echo $view->tbm ?></td>
                                  <td><?php echo $view->tm ?></td>
                                  <td><?php echo $view->total ?> Kw</td>
                                  <td>Rp. <?php echo $view->harga ?> / Kg</td>
                                  <td>
                                    <a href="<?php echo site_url('tanamanTahunan/form_edit/'.$view->kd_tt) ?>">Edit</a>
                                    <a href="<?php echo site_url('tanamanTahunan/hapus/'.$view->kd_tt) ?>" onclick="return confirm('Yakin Akan Hapus Data?')">Hapus</a>
                                  </td>
                                </tr>
                                <?php
                                }
                                ?>
                                <tr>
                                  <th>PERKEBUNAN</th>
                                  <th colspan="6"></th>
                                </tr>
                                <?php 
                                foreach ($viewKebun as $view) {
                                  ?>
                                <tr>
                                  <td><?php echo $view->jenist ?></td>
                                  <td><?php echo $view->tbm ?></td>
                                  <td><?php echo $view->tm ?></td>
                                  <td><?php echo $view->total ?> Kw</td>
                                  <td>Rp. <?php echo $view->harga ?> / Kg</td>
                                  <td>
                                    <a href="<?php echo site_url('tanamanTahunan/form_edit/'.$view->kd_tt) ?>">Edit</a>
                                    <a href="<?php echo site_url('tanamanTahunan/hapus/'.$view->kd_tt) ?>" onclick="return confirm('Yakin Akan Hapus Data?')">Hapus</a>
                                  </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                    </div>    
                
                
