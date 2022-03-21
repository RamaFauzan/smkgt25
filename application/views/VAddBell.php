
<div class="alert alert-danger alert-dismissible" style="<?php echo ($successMsg == 'Add_Fail') ? '' : 'display:none' ;?>">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
</div>
<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/AddPengaturanBell'); ?>" method="post">

                                                          
                                                            
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">Hari</label>
                                                                    
                                                              <div class="col-sm-10">
                                                                <select name="id_hari" class="form-control">
                                                                    <option>PILIH</option>

                                                                    <option value="1">Senin</option>
                                                                    <option value="2">Selasa</option>
                                                                    <option value="3">Rabu</option>
                                                                    <option value="4">Kamis</option>
                                                                    <option value="5">Jum'at</option>
                                                                    <option value="6">Sabtu</option>
                                                                    <option value="7">Minggu</option>
                                                                </select> 
                                                              </div>
                                                            </div>


                                                            <div class="form-group ">
                                                              <label class="col-sm-2 control-label">Jam</label>
                                                                    
                                                                <div class="input-group clockpicker" data-autoclose="true">
                                                                    <input type="text" name="jam" class="col-lg-2" style="margin-left: 15px;" value="" >
                                                                    <span class="input-group-addon">
                                                                        <span class="fa fa-clock-o"></span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">Jadwal</label>
                                                                    
                                                              <div class="col-sm-10">
                                                                <input type="text" name="jadwal" class="form-control" placeholder="jadwal">
                                                              </div>
                                                            </div>

                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">Audio</label>
                                                                    
                                                              <div class="col-sm-10">
                                                                <select class="form-control" name="id_audio">

                                                                    <option>--PILIH--</option>
                                                                   
                                                                      <?php
                                                                            if(!empty($BunyiBell)){

                                                                                foreach($BunyiBell as $read){



                                                                           ?>
                                                                                <option value="<?php echo $read->kd_audio; ?>"><?php echo $read->file_audio; ?></option>
                                                                            <?php     }
                                                                            } ?>
                                                                </select>
                                                              </div>
                                                            </div>

                                                            
                                                             
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
                                                            <button type="submit" name="simpan" value="Simpan" class="btn bg-primary" style="margin-left: 13px;"><i class="fa fa-check"></i> Simpan</button>
                                                          </div>
                                                          <!-- /.box-footer -->