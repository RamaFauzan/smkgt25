            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>FROM UPDATE BERKAS SISWA <small>Merubah data siswa secara detail</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                         
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form action="<?php echo site_url('Welcome/UpdateDataBerkassiswa'); ?>" method="post">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NAMA SISWA</label>
                                   <!--  <input type="hidden" name="kd_siswa"> -->
                                    <div class="col-sm-10">
                                    <input type="hidden" name="kd_berkassiswa"  value="<?php echo $detail['kd_berkassiswa']; ?>" class="form-control">      
                               		<input type="text" name="nama_siswa"  value="<?php echo $detail['nama_siswa']; ?>" class="form-control"></div>
                                </div>
								<div class="form-group row"><label class="col-sm-2 col-form-label">KARTU KELUARGA</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="kk" value=""> 
     
                                        <option value="1" <?php echo ($detail['kk'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0"	 <?php echo ($detail['kk'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>
								<div class="form-group row"><label class="col-sm-2 col-form-label">KTP ORANG TUA</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="ktp_ortu" value=""> 
     
                                        <option value="1" <?php echo ($detail['ktp_ortu'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['ktp_ortu'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>
								<div class="form-group row"><label class="col-sm-2 col-form-label">IJAZAH</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="ijazah" value=""> 
     
                                        <option value="1" <?php echo ($detail['ijazah'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['ijazah'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>                                                                 
								<div class="form-group row"><label class="col-sm-2 col-form-label">SKHUN</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="skhun" value=""> 
     
                                        <option value="1" <?php echo ($detail['skhun'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['skhun'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>
								<div class="form-group row"><label class="col-sm-2 col-form-label">AKTE KELAHIRAN</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="akte_kelahiran" value=""> 
     
                                        <option value="1" <?php echo ($detail['akte_kelahiran'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['akte_kelahiran'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>                              
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary btn-sm" type="submit" name="btn_simpan" value="Simpan">Save changes</button>
                                         </form>
                                        <a class="btn btn-primary btn-sm" href="<?php echo site_url('Welcome/Berkassiswa'); ?>">BACK</a>
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        