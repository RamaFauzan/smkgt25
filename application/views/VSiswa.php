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
                        <th>NISN</th>
                        <th>NAMA SISWA</th>
                        <th>TAHUN AJARAN</th>                        
                        <th>JENIS KELAMIN</th>
                         <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th>
                        <th>KETERANGAN</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                     

  
                    <tbody>
                    <?php
                    $i=1;
                    if(!empty($DataSiswa))
                    {
                      foreach($DataSiswa as $ReadDS)
                      {
                    ?>
               <tr>
                    <td align="center"><?= $i++; ?></td>
                    <td><?= $ReadDS->nis; ?></td>
                    <td><?= $ReadDS->nisn; ?></td>
                    <td><?= $ReadDS->nama_siswa; ?></td>
                    <td><?= $ReadDS->tahun_ajaran; ?></td>                    
                    <td><?= $ReadDS->jenis_kelamin; ?></td>
                    <td><?= $ReadDS->tempat_lahir; ?></td>
                    <td><?= $ReadDS->tanggal_lahir; ?></td>
                    <td>
                          <?php 
                            $a=$ReadDS->keterangan;
                            if($a == '1')
                            {
                              echo 'AKTIF';
                            }
                            else
                            {
                              echo 'TIDAK AKTIF';
                            }
                          ?>
                    </td>
                    <td>
                   <a href="<?php echo site_url('Welcome/DataSiswa/'.$ReadDS->kd_siswa.'/view') ?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="<?php echo site_url('Welcome/DeleteDataSiswa/'.$ReadDS->nis) ?>" class="tombol-hapus"><i class="fa fa-trash-o"></i></a>
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

