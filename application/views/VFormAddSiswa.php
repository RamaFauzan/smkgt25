            
<script>
    function UangBangunan()
  {
    // get combo boxes
    var idx_barang = document.getElementById('barang');
    var hrg_barang = document.getElementById('hg_barang');
     var hrg_barang2 = document.getElementById('hg_barang2');
    
    // change both combo box on same index
    hrg_barang.selectedIndex = idx_barang.selectedIndex;
     hrg_barang2.selectedIndex = idx_barang.selectedIndex;
    
    // get 'hrg_barang' values
    var values = hrg_barang.value;
    var values2 = hrg_barang2.value;

    document.getElementById('harga').value = values;
    document.getElementById('harga2').value = values2;
  }
</script>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>FROM ADD SISWA <small>Menambahkan data siswa secara detail</small></h5>
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
                            <form action="<?php echo site_url('Welcome/AddDataSiswa'); ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NIS</label>

                                    <div class="col-sm-10">
                                    <input type="hidden" name="kd_siswa" value="" class="form-control">
                                   <input type="hidden" name="kd_pembayaran">
                                    
                                    
                               		<input type="text" name="nis" value="" class="form-control"></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NISN</label>

                                    <div class="col-sm-10"><input type="text" name="nisn" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NAMA SISWA</label>

                                    <div class="col-sm-10"><input type="text" name="nama_siswa" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">TAHUN AJARAN</label>

                                    <div class="col-sm-10">
                                  
                                    <select class="form-control m-b" name="no_administrasi" id="barang" onchange="UangBangunan()">
                                   <!--  <option>--PILIH--</option> -->
                                      <?php
                                        if(!empty($DataMasterAdministrasi))
                                        {
                                            foreach ($DataMasterAdministrasi as $admin)
                                            {
                                    ?>
                                        <option value="<?= $admin->no_administrasi ?>"><?= $admin->tahun_ajaran; ?></option>
                                      
                                    <?php
                                        }}
                                    ?>
                                    </select>
                                   
                                    </div>
                                </div>

                                 <select id="hg_barang" style="display:none;">
              <?php 
                if(!empty($DataMasterAdministrasi))
                {
                  foreach($DataMasterAdministrasi as $ReadDS)
                  {
              ?>
                    <option value="<?php echo $ReadDS->uang_bangunan; ?>"><?php echo $ReadDS->uang_bangunan; ?></option>
              <?php
                  }
                }
              ?>
            </select>

              <select id="hg_barang2" style="display:none;">
              <?php 
                if(!empty($DataMasterAdministrasi))
                {
                  foreach($DataMasterAdministrasi as $ReadDS)
                  {
              ?>
                    <option value="<?php echo $ReadDS->uang_spp_smt1; ?>"><?php echo $ReadDS->uang_spp_smt1; ?></option>
              <?php
                  }
                }
              ?>
            </select>
                                          <input type="hidden" name="sisa_pembayaran" id="harga">
                                           <input type="hidden" name="sisa_pembayaran_spp" id="harga2">
	 							<div class="form-group row"><label class="col-sm-2 col-form-label">JENIS KELAMIN</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="jenis_kelamin">
                                    <option>--PILIH--</option>
                                        <option>LAKI LAKI</option>
                                        <option>PEREMPUAN</option>
                                    </select>
                                    </div>
                                 </div>

                                 <div class="form-group row">
                  <label class="col-sm-2 control-label">Kelas</label>
            
                  <div class="col-sm-3">
          <select class="form-control" name="kelas_siswa">
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
                  </div>
          <div class="col-sm-3">
          <select class="form-control" name="jurusan_siswa">
            
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
           
          </select>
                  </div>
          <div class="col-sm-3">
          <select class="form-control" name="sub_kelas_siswa">
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
                  </div>
                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">TEMPAT LAHIR</label>

                                    <div class="col-sm-10"><input type="text" name="tempat_lahir" class="form-control" value=""></div>
                                </div>    
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">TANGGAL LAHIR</label>

                                    <div class="col-sm-10"><input type="date" name="tanggal_lahir" class="form-control" value=""></div>
                                </div>   
                                 <div class="form-group  row"><label class="col-sm-2 col-form-label">Foto Siswa</label>

                                    <div class="col-sm-10"><input type="file" name="foto_siswa" class="form-control" value=""></div>
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
                                    <a class="btn btn-primary btn-sm" href="<?php echo site_url('Welcome/DataSiswa'); ?>">BACK</a>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        