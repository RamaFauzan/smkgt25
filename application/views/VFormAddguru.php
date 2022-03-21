
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>FROM ADD GURU <small>Menambah data guru secara detail</small></h5>
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
                            <form action="<?php echo site_url('Welcome/AddDataguru'); ?>" enctype="multipart/form-data" method="post">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NO PENDAFTARAN</label>

                                    <div class="col-sm-10">
                                    <input type="hidden" name="kd_guru" value="" class="form-control">
                               		<input type="text" name="no_pendaftaran" value="" class="form-control"></div>
                                </div>
								<div class="form-group row"><label class="col-sm-2 col-form-label">KATEGORI</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="kd_penggajian" value=""> 
        
                                        <option>---PILIH---</option>
                                    <?php 
                                        if(!empty($DataMasterPenggajian)){
                                            foreach($DataMasterPenggajian as $read){


                                        ?>

                                        <option value="<?= $read->kd_penggajian ?>"><?= $read->kategori ?></option>

                                    <?php
                                            }
                                        }

                                    ?>
                                                                                                                           
                                    </select>
                                    </div>
                                </div>                                
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NAMA GURU</label>
                                    <div class="col-sm-10"><input type="text" name="nama_guru" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                                    <div class="col-sm-10"><input type="text" name="tempat_lahir" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                                    <div class="col-sm-10"><input type="date" name="tanggal_lahir" class="form-control" value=""></div>
                                </div>                               
								<div class="form-group row"><label class="col-sm-2 col-form-label">JENIS KELAMIN</label> 
								      <div class="col-sm-10"><select class="form-control m-b" name="jenis_kelamin" value=""> 
     
                                        <option>LAKI LAKI</option>
                                        <option>PEREMPUAN</option>                                                                                   
                                    </select>
                                    </div>
                                </div>
								<div class="form-group  row"><label class="col-sm-2 col-form-label">PENDIDIKAN TERAKHIR</label>
                                    <div class="col-sm-10"><input type="text" name="pendidikan_terakhir" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">ALAMAT</label>
                                    <div class="col-sm-10"><input type="text_area" name="alamat" class="form-control" value=""></div>
                                </div> 
								<div class="form-group row"><label class="col-sm-2 col-form-label">AGAMA</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="agama" value=""> 
     
                                        <option>ISLAM</option>
                                        <option>KRISTEN KATOLIQ</option>                                                                                   
                                        <option>KRISTEN PROTESTAN</option>                                                                                   
                                        <option>HINDU</option>                                                                                   
                                        <option>BUDHA</option>
                                    </select>
                                    </div>
                                </div>    
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">E-MAIL</label>
                                    <div class="col-sm-10"><input type="text" name="email" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NO TELP</label>
                                    <div class="col-sm-10"><input type="text" name="no_telp" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">DATA PENDIDIKAN SD</label>
                                    <div class="col-sm-10"><input type="text" name="data_pendidikan_sd" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">DATA PENDIDIKAN SMP</label>
                                    <div class="col-sm-10"><input type="text" name="data_pendidikan_smp" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">DATA PENDIDIKAN SMK</label>
                                    <div class="col-sm-10"><input type="text" name="data_pendidikan_smk" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">DATA PENDIDIKAN S1</label>
                                    <div class="col-sm-10"><input type="text" name="data_pendidikan_s1" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">DATA PENDIDIKAN S2</label>
                                    <div class="col-sm-10"><input type="text" name="data_pendidikan_s2" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">PENGALAMAN</label>
                                    <div class="col-sm-10"><input type="text" name="pengalaman" class="form-control" value=""></div>
                                </div> 
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">FOTO</label>
                                    <div class="col-sm-10"><input type="file" name="foto_guru" class="form-control" value=""></div>
                                </div>                                                               
								<div class="form-group row"><label class="col-sm-2 col-form-label">KETERANGAN</label>
                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="keterangan" value=""> 
      
                                        <option value="1">AKTIF</option>
                                        <option value="0">TIDAK AKTIF</option>                                                                                   
                                    </select>
                                    </div>
                                </div> 
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary btn-sm" type="submit" name="btn_simpan" value="Simpan">Save changes</button>
                                        </form>
                                        <button a hreff="<?php base_url('welcome/dataguru');?>"class="btn btn-white btn-sm" type="submit">Cancel</button>                                        
                                    </div>
                                </div>                            
                        </div>
                    </div>
                </div>
            </div>
        