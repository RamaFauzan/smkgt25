    <div class="alert alert-primary alert-dismissible" style="<?php echo ($successMsg == 'Add') ? '' : 'display:none' ;?>">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Data "<?php echo $successItm; ?>" Berhasil Di Tambah!</h4>
</div>

<!-- Update Success Message -->
<div class="alert alert-info alert-dismissible" style="<?php echo ($successMsg == 'Update') ? '' : 'display:none' ;?>">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Data "<?php echo $successItm; ?>" Berhasil Di Ubah!</h4>
</div>

<!-- Delete Success Message -->
<div class="alert alert-danger alert-dismissible" style="<?php echo ($successMsg == 'Delete') ? '' : 'display:none' ;?>">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Data Berhasil Di Hapus!</h4>
</div>

 <div class="alert alert-danger alert-dismissible" style="<?php echo ($successMsg == 'Add_Fail') ? '' : 'display:none' ;?>">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
</div>
<br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>FROM ADD Staf <small>Menambah data staf bawah secara detail</small></h5>
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
                            <form action="<?php echo site_url('Welcome/UpdateDataStafBawah'); ?>" enctype="multipart/form-data" method="post">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NO INDUK PEGAWAI</label>

                                    <div class="col-sm-10">
                                    <input type="hidden" name="kd" value="<?= $detail['kd'] ?>">
                               		<input type="text" name="nip" value="<?= $detail['nip'] ?>" class="form-control"></div>
                                </div>
								      
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NAMA STAF</label>
                                    <div class="col-sm-10"><input type="text" name="nama_staf" class="form-control" value="<?= $detail['nama_staf'] ?>"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">ALAMAT</label>
                                    <div class="col-sm-10"><input type="text" name="alamat" class="form-control" value="<?= $detail['alamat'] ?>"></div>
                                </div>
                                                            
								<div class="form-group row"><label class="col-sm-2 col-form-label">JENIS KELAMIN</label> 
								      <div class="col-sm-10"><select class="form-control m-b" name="jenis_kelamin"> 
                                        <option value="<?= $detail['jenis_kelamin'] ?>"><?= $detail['jenis_kelamin'] ?></option>
                                        <option>------------</option>
                                        <option value="L">LAKI LAKI</option>
                                        <option value="P">PEREMPUAN</option>                                                                                   
                                    </select>
                                    </div>
                                </div>
								
                                 <div class="product-images">

                                        <div>
                                            
                                                <img src="<?php echo base_url('./upload/'.$detail['foto_staf']); ?>" height="300px">                                           
                                        </div>
                                    </div>                     
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">FOTO</label>
                                    <div class="col-sm-10"><input type="file" name="foto_staf" class="form-control" value="<?php echo $detail['foto_staf'];?>"> </div>
                                </div>              

                                <hr>    
                                *Bagian Staf

                                <div class="form-group  row">
                                    <label class="col-sm-2 col-form-label">PILIH BAGIAN STAF</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="kd_stafbawah">
                                            <option value="<?= $detail['kd_stafbawah'] ?>"><?= $detail['bagian_staf'] ?></option>
                                            <option>---------------------</option>
                                          
                                            <?php 
                                                if(!empty($MasterStafBawah)){
                                                    foreach($MasterStafBawah as $read){

                                                ?>

                                                <option value="<?= $read->kd_stafbawah ?>"><?= $read->bagian_staf; ?></option>

                                            <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>


                                <hr>
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
        