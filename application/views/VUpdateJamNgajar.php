
<!-- <div class="alert alert-danger alert-dismissible" style="<?php echo ($successMsg == 'Add_Fail') ? '' : 'display:none' ;?>">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
</div> -->
<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/UpdateDataNgajar'); ?>" method="post">

                                                            <input type="hidden" name="kd" value="<?= $detail['kd']; ?>">
                                                            
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">Hari</label>
                                                                    
                                                              <div class="col-sm-10">
                                                                <select name="id_hari" class="form-control">
                                                                    <option value="<?= $detail['id_hari'] ?>"><?= $detail['hari'] ?></option>
                                                                    <option>PILIH</option>
                                                                    <?php 
                                                                      if(!empty($DataHari)){
                                                                          foreach($DataHari as $read){

                                                                        ?>

                                                                        <option value="<?= $read->kd_hari ?>"><?= $read->hari; ?></option>

                                                                      <?php
                                                                          }
                                                                      }

                                                                    ?>
                                                                </select> 
                                                              </div>
                                                            </div>


                                                            <div class="form-group ">
                                                              <label class="col-sm-2 control-label">Jam Awal</label>
                                                                    
                                                                <div class="input-group clockpicker" data-autoclose="true">
                                                                    <input type="text" name="jam_awal" class="col-lg-2" style="margin-left: 15px;" value="<?= $detail['jam_awal'] ?>" >
                                                                    <span class="input-group-addon">
                                                                        <span class="fa fa-clock-o"></span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group ">
                                                              <label class="col-sm-2 control-label">Jam Akhir</label>
                                                                    
                                                                <div class="input-group clockpicker" data-autoclose="true">
                                                                    <input type="text" name="jam_akhir" class="col-lg-2" style="margin-left: 15px;" value="<?= $detail['jam_akhir'] ?>" >
                                                                    <span class="input-group-addon">
                                                                        <span class="fa fa-clock-o"></span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">Nama Mapel</label>
                                                                    
                                                              <div class="col-sm-10">
                                                                <select class="form-control" name="kd_mapel">

                                                                    <option value="<?= $detail['kd_mapel'] ?>"><?= $detail['nama_mapel'] ?></option>
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
                                                                          <option><?= $detail['kelas'] ?></option>
                                                                          <option>---PILIH---</option>
                                                                          <option value="10">10</option>
                                                                          <option value="11">11</option>
                                                                          <option value="12">12</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select class="form-control" name="jurusan">
                                                                              <option><?= $detail['jurusan'] ?></option>
                                                                              <option>---PILIH---</option>
                                                                              <option value="RPL">RPL</option>
                                                                              <option value="TKJ">TKJ</option>
                                                                         
                                                                        </select>
                                                                    </div>
                                                                        <div class="col-sm-3">
                                                                        <select class="form-control" name="sub_kelas">
                                                                          <option><?= $detail['sub_kelas'] ?></option>
                                                                          <option>---PILIH---</option>
                                                                          <option value="1">1</option>
                                                                          <option value="2">2</option>
                                                                        </select>
                                                                    </div>
                                                                  </div>

                                                            <input type="submit" name="simpan" value="Simpan" class="btn bg-primary" style="margin-left: 13px;"></input>
                                                            
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
                                                          <div class="box-footer">
                                                            <!-- <i class="fa fa-check"></i> -->
                                                          </div>
                                                          <!-- /.box-footer -->