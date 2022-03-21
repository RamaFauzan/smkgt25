
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>FROM UPDATE GURU <small>Merubah data guru secara detail</small></h5>
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
                            <form action="<?php echo site_url('Welcome/UpdateDataguru'); ?>" enctype="multipart/form-data" method="post">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NO PENDAFTARAN</label>

                                    <div class="col-sm-10">
                                    <input type="hidden" name="kd_guru" value="<?php echo $detail['kd_guru']; ?>" class="form-control">
                               		<input type="text" name="no_pendaftaran" value="<?php echo $detail['no_pendaftaran']; ?>" class="form-control"></div>
                                </div>
								<div class="form-group row"><label class="col-sm-2 col-form-label">KATEGORI</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="kategori" value=""> 
     
                                        <option value="GURU NASIONAL" <?php echo ($detail['kategori'] == 'GURU NASIONAL') ? 'selected' : '';?>>GURU NASIONAL</option>
                                        <option value="GURU KEWILAYAHAN" <?php echo ($detail['kategori'] == 'GURU KEWILAYAHAN') ? 'selected' : '';?>>GURU KEWILAYAHAN</option>                                                                                   
                                        <option value="GURU PRODUKTIF" <?php echo ($detail['kategori'] == 'GURU PRODUKTIF') ? 'selected' : '';?>>GURU PRODUKTIF</option>                                                                                   
                                    </select>
                                    </div>
                                </div>                                
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NAMA GURU</label>
                                    <div class="col-sm-10"><input type="text" name="nama_guru" class="form-control" value="<?php echo $detail['nama_guru']; ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                                    <div class="col-sm-10"><input type="text" name="tempat_lahir" class="form-control" value="<?php echo $detail['tempat_lahir']; ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                                    <div class="col-sm-10"><input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $detail['tanggal_lahir']; ?>"></div>
                                </div>                               
								<div class="form-group row"><label class="col-sm-2 col-form-label">JENIS KELAMIN</label> 
								      <div class="col-sm-10"><select class="form-control m-b" name="jenis_kelamin" value=""> 
     
                                        <option value="LAKI LAKI" <?php echo ($detail['jenis_kelamin'] == 'LAKI LAKI') ? 'selected' : '';?>>LAKI LAKI</option>
                                        <option value="PEREMPUAN" <?php echo ($detail['jenis_kelamin'] == 'PEREMPUAN') ? 'selected' : '';?>>PEREMPUAN</option>                                                                                   
                                    </select>
                                    </div>
                                </div>
					              <div class="form-group  row"><label class="col-sm-2 col-form-label">PENDIDIKAN TERAKHIR</label>
                                    <div class="col-sm-10"><input type="text" name="pendidikan_terakhir" class="form-control" value="<?php echo $detail['pendidikan_terakhir']; ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">ALAMAT</label>
                                    <div class="col-sm-10"><input type="text_area" name="alamat" class="form-control" value="<?php echo $detail['alamat']; ?>"></div>
                                </div> 
								<div class="form-group row"><label class="col-sm-2 col-form-label">AGAMA</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="agama" value=""> 
     
                                        <option value="ISLAM" <?php echo ($detail['agama'] == 'ISLAM') ? 'selected' : '';?>>ISLAM</option>
                                        <option value="KRISTEN KATOLIQ" <?php echo ($detail['agama'] == 'KRISTEN KATOLIQ') ? 'selected' : '';?>>KRISTEN KATOLIQ</option>                                                                                   
                                        <option value="KRISTEN PROTESTAN" <?php echo ($detail['agama'] == 'KRISTEN PROTESTAN') ? 'selected' : '';?>>KRISTEN PROTESTAN</option>                                                                                   
                                        <option value="HINDU" <?php echo ($detail['agama'] == 'HINDU') ? 'selected' : '';?>>HINDU</option>                                                                                   
                                        <option value="BUDHA" <?php echo ($detail['agama'] == 'BUDHA') ? 'selected' : '';?>>BUDHA</option>
                                    </select>
                                    </div>
                                </div>    
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">E-MAIL</label>
                                    <div class="col-sm-10"><input type="text" name="email" class="form-control" value="<?php echo $detail['email']; ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NO TELP</label>
                                    <div class="col-sm-10"><input type="text" name="no_telp" class="form-control" value="<?php echo $detail['no_telp']; ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">DATA PENDIDIKAN SD</label>
                                    <div class="col-sm-10"><input type="text" name="data_pendidikan_sd" class="form-control" value="<?php echo $detail['data_pendidikan_sd']; ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">DATA PENDIDIKAN SMP</label>
                                    <div class="col-sm-10"><input type="text" name="data_pendidikan_smp" class="form-control" value="<?php echo $detail['data_pendidikan_smp']; ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">DATA PENDIDIKAN SMK</label>
                                    <div class="col-sm-10"><input type="text" name="data_pendidikan_smk" class="form-control" value="<?php echo $detail['data_pendidikan_smk']; ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">DATA PENDIDIKAN S1</label>
                                    <div class="col-sm-10"><input type="text" name="data_pendidikan_s1" class="form-control" value="<?php echo $detail['data_pendidikan_s1']; ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">DATA PENDIDIKAN S2</label>
                                    <div class="col-sm-10"><input type="text" name="data_pendidikan_s2" class="form-control" value="<?php echo $detail['data_pendidikan_s2']; ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">PENGALAMAN</label>
                                    <div class="col-sm-10"><input type="text" name="pengalaman" class="form-control" value="<?php echo $detail['pengalaman']; ?>"></div>
                                </div>  
                                <div class="product-images">

                                        <div>
                                            
                                                <img src="<?php echo base_url('./upload/'.$detail['foto_guru']); ?>" height="300px">                                           
                                        </div>
                                    </div>                     
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">FOTO</label>
                                    <div class="col-sm-10"><input type="file" name="foto_guru" class="form-control" value="<?php echo $detail['foto_guru'];?>"> </div>
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