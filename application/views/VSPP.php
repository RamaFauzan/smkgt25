
                    <div class="ibox-content"> 
            <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">NAMA SISWA</th> 
                        <th style="text-align: center;">TAHUN AJARAN</th>
                        <!-- <th>SISA PEMBAYARAN</th>                                                                         -->
                        <!-- <th>STATUS</th> -->
                        <th style="text-align: center;">AKSI</th>
                    </tr>
                    </thead>
                     

  
                    <tbody>
                    <?php
  $i=1;
  if(!empty($DataAdministrasiSPP))
  {
    foreach($DataAdministrasiSPP as $ReadDS)
    {
  ?>
    <tr>
    <td><?= $i; ?></td>
    <td><?= $ReadDS->nama_siswa; ?></td>
    <td><?= $ReadDS->tahun_ajaran; ?></td>
    <!-- <td><?= $ReadDS->sisa_pembayaran_spp; ?></td> -->
    <!-- <td align="center">
    <?php 
        $a = $ReadDS->uang_spp_smt1;
        $b=$ReadDS->keterangan;
        if($b == '1')
        {
          echo '<i class="badge badge-primary" aria-hidden="true">LUNAS</i>';
        }
        else
        {
          echo '<i class="badge badge-danger" aria-hidden="true">BELUM LUNAS</i>';
        }
    ?>
    </td> -->
    <td align="center">
       

       

         <a class="badge badge-primary" href="<?php echo site_url('Welcome/DataAdministrasiSpp/'.$ReadDS->kd_siswa.'/view') ?>"><i class="fa fa-money"></i></a>
        
        

  
    </td>
</tr>


 <div class="modal inmodal" id="myModal5<?php echo $ReadDS->kd_siswa; ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-pencil modal-icon"></i>
                                            <h4 class="modal-title">Ubah Data Siswa</h4>
                                            <!-- <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                                        </div>
                                        <div class="modal-body">
                                            <!-- <div class="alert alert-danger alert-dismissible" style="<?php echo ($successMsg == 'Update_Fail') ? '' : 'display:none' ;?>">
                                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                              <h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
                                            </div> -->

                                                <form action="<?php echo site_url('Welcome/AddDataTransSPP'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                    <input type="hidden" name="kd_pembayaran">
                                                     <input type="hidden" name="kd_transaksi">
                                                              <div class="box-body">
                                                                <div class="form-group">
                                                                  <label for="inputEmail3" class="col-sm-2 control-label">nis</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" name="nis" value="<?php echo $ReadDS->nis; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                                  </div>
                                                                </div>

                                                                <div class="form-group">
                                                                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Siswa</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" name="nama_siswa" value="<?php echo $ReadDS->nama_siswa; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                                    
                                                                  </div>
                                                                </div>

                                                                <div class="form-group">
                                                                  <label for="inputEmail3" class="col-sm-2 control-label">Sisa Pembayaran</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" name="sisa_pembayaran" value="<?php echo $ReadDS->sisa_pembayaran; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                                    
                                                                  </div>
                                                                </div>

                                                                <div class="form-group">
                                                                  <label for="inputEmail3" class="col-sm-2 control-label">tanggal transaksi</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" name="tgl_transaksi" value="" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                                    
                                                                  </div>
                                                                </div>


                                                                    <input type="hidden" name="kategori_trans" value="SPP" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                               
                                                                <div class="form-group">

                                                                    <label for="inputEmail3" class="col-sm-2 control-label">JUN</label>
                                                                      <div class="col-sm-10">
                                                                        <input type="checkbox" name="options[]" value="6" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                                        
                                                                      </div>

                                                                  <label for="inputEmail3" class="col-sm-2 control-label">JUL</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="checkbox" name="options[]" value="7" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                                    
                                                                  </div>

                                                                   <label for="inputEmail3" class="col-sm-2 control-label">AGS</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="checkbox" name="options[]" value="8" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                                    
                                                                  </div>

                                                                   <label for="inputEmail3" class="col-sm-2 control-label">SEP</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="checkbox" name="options[]" value="9" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                                    
                                                                  </div>
                                                                  
                                                                </div>
                                                                
                                                                 <div class="form-group">
                                                                  <label for="inputEmail3" class="col-sm-2 control-label">jml bayar</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" name="jml_pembayaran" value="" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                                    
                                                                  </div>
                                                                </div>

                                                              </div>
                                                              <!-- /.box-body -->
                                                              <div class="box-footer">
                                                                <button type="submit" name="simpan" value="Simpan" class="btn bg-primary" style="margin-left: 13px;"><i class="fa fa-check"></i> Ubah Data</button>
                                                              </div>
                                                              <!-- /.box-footer -->
                                                </form>

                                            
                                        </div>
                                       <!--  <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                    <?php $i++; } } ?>
                   </tbody>
        
                   
                    </table>
                    </div>
                    </div>
                      