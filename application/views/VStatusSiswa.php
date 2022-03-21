            <div class="ibox-content"> 
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <div class="card">
            <div>
              <div class="card-header">
              <?php if($akses == '1'){ ?>
              <a href="<?php echo site_url('Welcome/VFormAddSiswa'); ?>">

              <button type="button" title="Tambah Data Siswa" class="btn bg-primary"><i class="fa fa-plus"></i></button>

              </a>
              <?php } ?>
              <?php if($akses == '1'){ ?>
              <a href="<?php echo site_url('Welcome/DataSiswa/KenaikanKelas'); ?>">
              
              

              <button style="margin-left: 900px;" title="Update Kenaikan Kelas" type="button" class="btn bg-primary"><i class="fa fa-pencil"></i></button>
              </a>
              <?php } ?>
                <h3 style="margin-left: 450px;" class="card-title">Data Siswa</h3>
              </div>
              </div>
            </div>
            <br>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        
                        <th>NAMA SISWA</th>
                       
                        <th>STATUS SISWA</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                     

  
                    <tbody>
                    <?php
                    $i=1;
                    if(!empty($DataSatatusSiswa))
                    {
                      foreach($DataSatatusSiswa as $ReadDS)
                      {
                        $a = $ReadDS->no_uangbangunan;
                        $a = $ReadDS->kd_pembayaran;
                        $b = $ReadDS->kd_siswa;
                    ?>
               <tr>
                    <td align="center"><?= $i++; ?></td>
                    <td><?= $ReadDS->nis; ?></td>
                    
                    <td><?= $ReadDS->nama_siswa; ?></td>
                    
                    
                    <td><?= $ReadDS->status_siswa; ?></td>
                    
                    <td>
                      <form action="<?= site_url('Welcome/UpdateStatus/'.$a.'/'.$b) ?>" method="post">
                        
                          <input class="btn btn-warning" type="submit" name="status_siswa" value="2">
                          <input class="btn btn-danger" type="submit" name="status_siswa" value="3">
                      </form>
                  
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

