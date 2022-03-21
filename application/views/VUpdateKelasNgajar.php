
<!-- <div class="alert alert-danger alert-dismissible" style="<?php echo ($successMsg == 'Add_Fail') ? '' : 'display:none' ;?>">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
</div> -->
<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/UpdateKelasGuru'); ?>" method="post">

                                                            <input type="hidden" name="nid" value="<?= $detail['nid']; ?>">
                                                            <input type="hidden" name="ses" value="<?= $this->session->userdata('kelasGuru') ?>">
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">Nama Guru</label>
                                                                    
                                                              <div class="col-sm-10">
                                                                <input type="text" class="col-sm-5" name="nama_guru" value="<?= $detail['nama_guru'] ?>">
                                                              </div>
                                                            </div>


                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">Nama Mapel</label>
                                                                    
                                                              <div class="col-sm-10">
                                                                <select class="form-control" name="kd_mapel">

                                                                    
                                                                    <option>--------------------------------------</option>
                                                                    <option>Pilih</option>
                                                                    <option>--------------------------------------</option>
                                                                    <?php 
                                                                      if(!empty($Mapel)){
                                                                          foreach($Mapel as $read){

                                                                        ?>

                                                                        <option value="<?= $read->kd_mapel ?>"><?= $read->nama_mapel; ?></option>

                                                                      <?php
                                                                          }
                                                                      }

                                                                    ?>
                                                                </select>
                                                              </div>
                                                            </div>
                                                            <label class="col-sm-2 control-label">Kelas</label>
                                                             <div class="form-group row">
                                                                  
                                                            
                                                                  <div class="col-sm-3">
                                                          <select class="form-control" name="kelas">
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                          </select>
                                                                  </div>
                                                          <div class="col-sm-3">
                                                          <select class="form-control" name="jurusan">
                                                            
                                                                <option value="RPL">RPL</option>
                                                                <option value="TKJ">TKJ</option>
                                                           
                                                          </select>
                                                                  </div>
                                                          <div class="col-sm-3">
                                                          <select class="form-control" name="sub_kelas">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                          </select>
                                                                  </div>
                                                                </div>


                                                                <div class="box-footer">
                                                            <button type="submit" name="simpan" value="Simpan" class="btn bg-primary" style="margin-left: 13px;"><i class="fa fa-check"></i> Simpan</button>
                                                          </div>
                                                            
                                                            </form>
                                                       
                                                            
                                                             
                                                            <!--  <ul class="kont_time" id="kont_time">
                                                                <li onclick="setJam(this.innerHTML)">00:00</li>
                                                                <li onclick="setJam(this.innerHTML)">01:00</li>
                                                                <li onclick="setJam(this.innerHTML)">02:00</li>
                                                                <li onclick="setJam(this.innerHTML)">03:00</li>
                                                                <li onclick="setJam(this.innerHTML)">04:00</li>
                                                                <li onclick="setJam(this.innerHTML)">05:00</li>
                                                                <li onclick="setJam(this.innerHTML)">06:00</li>
                                                                <li onclick="setJam(this.innerHTML)">07:00</li>
                                                                <li onclick="setJam(this.innerHTML)">08:00</li>
                                                                <li onclick="setJam(this.innerHTML)">09:00</li>
                                                                <li onclick="setJam(this.innerHTML)">10:00</li>
                                                                <li onclick="setJam(this.innerHTML)">11:00</li>
                                                                <li onclick="setJam(this.innerHTML)">12:00</li>
                                                                <li onclick="setJam(this.innerHTML)">13:00</li>
                                                                <li onclick="setJam(this.innerHTML)">14:00</li>
                                                                <li onclick="setJam(this.innerHTML)">15:00</li>
                                                                <li onclick="setJam(this.innerHTML)">16:00</li>
                                                                <li onclick="setJam(this.innerHTML)">17:00</li>
                                                                <li onclick="setJam(this.innerHTML)">18:00</li>
                                                                <li onclick="setJam(this.innerHTML)">19:00</li>
                                                                <li onclick="setJam(this.innerHTML)">20:00</li>
                                                                <li onclick="setJam(this.innerHTML)">21:00</li>
                                                                <li onclick="setJam(this.innerHTML)">22:00</li>
                                                                <li onclick="setJam(this.innerHTML)">23:00</li>
                                                            </ul> -->
                                                            
                                                            
                                                          <!-- /.box-body -->
                                                          <!-- <div class="box-footer">
                                                            <button type="submit" name="simpan" value="Simpan" class="btn bg-primary" style="margin-left: 13px;"><i class="fa fa-check"></i> Simpan</button>
                                                          </div> -->
                                                          <!-- /.box-footer -->