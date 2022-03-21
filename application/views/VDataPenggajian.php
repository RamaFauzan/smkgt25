            <div class="ibox-content"> 
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <div class="card">
            <div>
              <div class="card-header">
             <!--  <?php if($akses == '1'){ ?>
              <a href="<?php echo site_url('Welcome/VFormAddSiswa'); ?>">

              <button type="button" title="Tambah Data Siswa" class="btn bg-primary"><i class="fa fa-plus"></i></button>

              </a>
              <?php } ?> -->
             <!--  <?php if($akses == '1'){ ?>
              <a href="<?php echo site_url('Welcome/DataSiswa/KenaikanKelas'); ?>">
              
              

              <button style="margin-left: 900px;" title="Update Kenaikan Kelas" type="button" class="btn bg-primary"><i class="fa fa-pencil"></i></button>
              </a>
              <?php } ?> -->
                <h3 style="margin-left: 420px;" class="card-title">Data Penggajian</h3>
              </div>
              </div>
            </div>
            <br>
                    <tr>
                        <th>No</th>
                        <th>NID</th>
                        
                        <th>NAMA Guru</th>
                        <th>Kategori</th>                        
                       
                        <th>AKSI</th>
                    </tr>
                    </thead>
                     

  
                    <tbody>
                    <?php
                    $i=1;
                    if(!empty($DataPenggajian))
                    {
                      foreach($DataPenggajian as $ReadDS)
                      {
                    ?>
               <tr>
                    <td align="center"><?= $i++; ?></td>
                    <td><?= $ReadDS->nid; ?></td>
                    <td><?= $ReadDS->nama_guru; ?></td>
                    <td><?= $ReadDS->kategori; ?></td>                    
                   
                    <td>
                   <a href="<?php echo site_url('Welcome/DataPenggajian/'.$ReadDS->nid.'/view') ?>"><i class="fa fa-id-card"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <!-- <a href="<?php echo site_url('Welcome/DeleteDataSiswa/'.$ReadDS->nid) ?>"><i class="fa fa-trash-o"></i></a>
                    </td> -->
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

