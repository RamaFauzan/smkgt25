
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>FROM UPDATE SISWA <small>Merubah data siswa secara detail</small></h5>
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
                            <form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NIS</label>

                                    <div class="col-sm-10">
                                    <input type="hidden" name="kd_siswa" value="<?php echo $detail['kd_siswa']; ?>" class="form-control">
                               		<input type="text" name="nis" value="<?php echo $detail['nis']; ?>" class="form-control"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NISN</label>

                                    <div class="col-sm-10"><input type="text" name="nisn" class="form-control" value="<?php echo $detail['nisn']; ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NAMA SISWA</label>

                                    <div class="col-sm-10"><input type="text" name="nama_siswa" class="form-control" value="<?php echo $detail['nama_siswa']; ?>"></div>
                                </div>
                                 <div class="form-group  row"><label class="col-sm-2 col-form-label">TAHUN AJARAN</label>

                                    <div class="col-sm-10">
                                  
                                    <select class="form-control m-b" name="no_administrasi">
                                    <option value="1" <?= ($detail['no_administrasi']=='1') ? 'selected' : ''; ?>>2016/2017</option>
                                    <option value="2" <?= ($detail['no_administrasi']=='2') ? 'selected' : ''; ?>>2018/2019</option>
                                    <option value="3" <?= ($detail['no_administrasi']=='3') ? 'selected' : ''; ?>>2020/2021</option>
                                    <option value="4" <?= ($detail['no_administrasi']=='4') ? 'selected' : ''; ?>>2021/2022</option>
                                    <option value="5" <?= ($detail['no_administrasi']=='5') ? 'selected' : ''; ?>>2023/2024</option>                                                                                                       
                                    </select>                                   
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Kelas</label>
                                
                                    <div class="col-sm-3">
                                        <select class="form-control" name="kelas_siswa">
                                            <option value="<?= $detail['kelas_siswa'] ?>"><?= $detail['kelas_siswa'] ?></option>
                                            <option>----------------------------------</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="jurusan_siswa">
                                            <option value="<?= $detail['jurusan_siswa'] ?>"><?= $detail['jurusan_siswa'] ?></option>
                                            <option>----------------------------------</option>
                                            <option value="RPL">RPL</option>
                                            <option value="TKJ">TKJ</option>
                                       
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="sub_kelas_siswa">
                                            <option value="<?= $detail['sub_kelas_siswa'] ?>"><?= $detail['sub_kelas_siswa'] ?></option>
                                            <option>----------------------------------</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                      </div>
                                </div>
								<div class="form-group row"><label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="jenis_kelamin" value=""> 
     
                                        <option value="LAKI LAKI" <?php echo ($detail['jenis_kelamin'] == 'LAKI LAKI') ? 'selected' : '';?>>LAKI LAKI</option>
                                        <option value="PEREMPUAN" <?php echo ($detail['jenis_kelamin'] == 'PEREMPUAN') ? 'selected' : '';?>>PEREMPUAN</option>                                                                                   
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">TEMPAT LAHIR</label>

                                    <div class="col-sm-10"><input type="text" name="tempat_lahir" class="form-control" value="<?php echo $detail['tempat_lahir']; ?>"></div>
                                </div>    
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">TANGGAL LAHIR</label>

                                    <div class="col-sm-10"><input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $detail['tanggal_lahir']; ?>"></div>
                                </div>   
								<div class="form-group row"><label class="col-sm-2 col-form-label">KETERANGAN</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="keterangan" value=""> 
     
                                        <option value="1" <?php echo ($detail['keterangan'] == '1') ? 'selected' : '';?>>AKTIF</option>
                                        <option value="0" <?php echo ($detail['keterangan'] == '0') ? 'selected' : '';?>>TIDAK AKTIF</option>                                                                                   
                                    </select>
                                    </div>
                                </div> 
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary btn-sm" type="submit" name="btn_simpan" value="Simpan">Save changes</button>                                        
                                        </form>
                                        <button a hreff="<?php base_url('welcome/datasisiwa');?>"class="btn btn-white btn-sm" type="submit">Cancel</button>
                                    </div>
                                </div>                        
                        </div>
                    </div>
                </div>
            </div>
        