            
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
            <div class="ibox-content"> 
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <div class="card">
            <div>
              <div class="card-header">
              <?php if($akses == '1'){ ?>
              <a href="<?php echo site_url('Welcome/DataStafBawah/Add'); ?>">

              <button type="button" title="Tambah Data Siswa" class="btn bg-primary"><i class="fa fa-plus"></i></button>

              </a>
              <?php } ?>
             <!--  -->
                <h3 style="margin-left: 400px;" class="card-title">Data Staf Bawah</h3>
              </div>
              </div>
            </div>
            <br>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>NAMA STAF</th>
                        <th>Bagian STAF</th>
                        <th>ALAMAT</th>
                        <th>JENIS KELAMIN</th>
                        <th>FOTO STAF</th>
                        
                        <th>AKSI</th>
                    </tr>
                    </thead>
                     

  
                    <tbody>
                    <?php
                    $i=1;
                    if(!empty($DataStafBawah))
                    {
                      foreach($DataStafBawah as $ReadDS)
                      {
                    ?>
               <tr>
                    <td align="center"><?= $i++; ?></td>
                    <td><?= $ReadDS->nip; ?></td>
                    
                    <td><?= $ReadDS->nama_staf; ?></td>
                    <td><?= $ReadDS->bagian_staf; ?></td>
                    <td><?= $ReadDS->alamat; ?></td>
                    <td><?= $ReadDS->jenis_kelamin; ?></td>
                    
                    <td><?= $ReadDS->foto_staf; ?></td>
                   
                    <td>
                   <a href="<?php echo site_url('Welcome/DataStafBawah/'.$ReadDS->kd.'/view') ?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="<?php echo site_url('Welcome/DeleteDataStafBawah/'.$ReadDS->nip) ?>" class="tombol-hapus"><i class="fa fa-trash-o"></i></a>
                    </td>
              </tr>
                    <?php } } ?>
                   </tbody>
                    </table>
                    </div>
                    </div>


            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

