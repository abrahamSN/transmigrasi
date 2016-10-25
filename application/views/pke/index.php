<!-- Page Heading -->

                <div class="row">                                        
                            <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="<?php echo site_url('PelakuKelembagaanEkonomi/form_tambah') ?>"><i class="fa fa-sm fa-plus"></i> Tambah Data</a>                                    
                        <h1>
                            Pelaku Kelembagaan Ekonomi
                        </h1> 
                        <div class="well">

                        <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Provinsi</label>
                        <div class="col-sm-5">
                          <select class="form-control" name="Provinsi" id="prov">
                          <option value="">--Pilih Provinsi--</option>
                          
                          </select>
                        </div>
                        </div>

                        <div class="form-group">
                         <label for="inputEmail3" class="col-sm-2 control-label">Kabkot</label>
                         <div class="col-sm-5">
                          <select class="form-control" name="Kabkot" id="kabkot">
                          <option value="">--Pilih Kabkot--</option>
                          </select>
                        </div>
                        </div>

                        <div class="form-group">
                         <label for="inputEmail3" class="col-sm-2 control-label">Desa</label>
                        <div class="col-sm-5"> 
                          <select class="form-control" name="Desa" id="desa">
                          <option value="">--Pilih Desa--</option>
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
                                  <th>Uraian</th>
                                  <th>Unit</th>                                  
                                  <th style="width:30%">Aksi</th>
                                </tr>
                                <?php 
                                foreach ($viewData as $view) {
                                  ?>
                                <tr>
                                  <td><strong><?php echo $view->uraian ?></strong></td>
                                  <td>
                                    <?php echo $view->tda+$view->tps+$view->ps; ?>
                                  </td>
                                  <td rowspan="4">
                                    <a href="<?php echo site_url('PelakuKelembagaanEkonomi/form_edit/'.$view->kd_pke) ?>">Edit</a>
                                    <a href="<?php echo site_url('PelakuKelembagaanEkonomi/hapus/'.$view->kd_pke) ?>" onclick="return confirm('Yakin Akan Hapus Data?')">Hapus</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Transmigran Daerah Asal</td>
                                  <td><?php echo $view->tda ?></td>
                                </tr>
                                <tr>
                                  <td>Transmigran Penduduk Setempat</td>
                                  <td><?php echo $view->tps ?></td>
                                </tr>
                                <tr>
                                  <td>Penduduk Setempat</td>
                                  <td><?php echo $view->ps ?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>

                    </div>    
                
                
