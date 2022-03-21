            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>FROM UPDATE BERKAS GURU <small>Merubah data berkas guru secara detail</small></h5>
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
                            <form action="<?php echo site_url('Welcome/UpdateDataBerkasguru'); ?>" method="post">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NAMA GURU</label>

                                    <div class="col-sm-10">
                                    <input type="hidden" name="kd_berkasguru" value="<?php echo $detail['kd_berkasguru']; ?>" class="form-control">      
                               		<input type="text" name="nama_guru" enable="false" value="<?php echo $detail['nama_guru']; ?>" class="form-control"></div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">SURAT LAMARAN</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="surat_lamaran" value=""> 
     
                                        <option value="1" <?php echo ($detail['surat_lamaran'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0"	 <?php echo ($detail['surat_lamaran'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>
								<div class="form-group row"><label class="col-sm-2 col-form-label">DAFTAR RIWAYAT HIDUP</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="daftar_riwayat_hidup" value=""> 
     
                                        <option value="1" <?php echo ($detail['daftar_riwayat_hidup'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0"	 <?php echo ($detail['daftar_riwayat_hidup'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>
								<div class="form-group row"><label class="col-sm-2 col-form-label">PAS FOTO</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="pas_foto" value=""> 
     
                                        <option value="1" <?php echo ($detail['pas_foto'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['pas_foto'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>
								<div class="form-group row"><label class="col-sm-2 col-form-label">IJAZAH SD</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="fc_ijazah_sd" value=""> 
     
                                        <option value="1" <?php echo ($detail['fc_ijazah_sd'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['fc_ijazah_sd'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>  
								<div class="form-group row"><label class="col-sm-2 col-form-label">IJAZAH SMP</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="fc_ijazah_smp" value=""> 
     
                                        <option value="1" <?php echo ($detail['fc_ijazah_smp'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['fc_ijazah_smp'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>  
								<div class="form-group row"><label class="col-sm-2 col-form-label">IJAZAH SMK</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="fc_ijazah_smk" value=""> 
     
                                        <option value="1" <?php echo ($detail['fc_ijazah_smk'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['fc_ijazah_smk'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>  
								<div class="form-group row"><label class="col-sm-2 col-form-label">IJAZAH S1</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="fc_ijazah_s1" value=""> 
     
                                        <option value="1" <?php echo ($detail['fc_ijazah_s1'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['fc_ijazah_s1'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>  
								<div class="form-group row"><label class="col-sm-2 col-form-label">IJAZAH S2</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="fc_ijazah_s2" value=""> 
     
                                        <option value="1" <?php echo ($detail['fc_ijazah_s2'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['fc_ijazah_s2'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>                                                                                                                                                                                                
								<div class="form-group row"><label class="col-sm-2 col-form-label">TRANSKIP NILAI</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="fc_transkip_nilai" value=""> 
     
                                        <option value="1" <?php echo ($detail['fc_transkip_nilai'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['fc_transkip_nilai'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div>
								<div class="form-group row"><label class="col-sm-2 col-form-label">AKTA IV</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="fc_akta_iv" value=""> 
     
                                        <option value="1" <?php echo ($detail['fc_akta_iv'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['fc_akta_iv'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div> 
								<div class="form-group row"><label class="col-sm-2 col-form-label">KTP</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="fc_ktp" value=""> 
     
                                        <option value="1" <?php echo ($detail['fc_ktp'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['fc_ktp'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div> 
								<div class="form-group row"><label class="col-sm-2 col-form-label">SERTIFIKAT</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="fc_sertifikat" value=""> 
     
                                        <option value="1" <?php echo ($detail['fc_sertifikat'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['fc_sertifikat'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
                                    </select>
                                    </div>
                                </div> 
								<div class="form-group row"><label class="col-sm-2 col-form-label">SKCK</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="fc_skck" value=""> 
     
                                        <option value="1" <?php echo ($detail['fc_skck'] == '1') ? 'selected' : '';?>>SUDAH ADA</option>
                                        <option value="0" <?php echo ($detail['fc_skck'] == '0') ? 'selected' : '';?>>BELUM ADA</option>                                                                                   
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
        