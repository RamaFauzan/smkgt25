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
                <h3 style="margin-left: 450px;" class="card-title">Data Pengeluaran SPP</h3>
              </div>
              </div>
            </div>
            <br>
                    <tr>
                        <th>No</th>
                        <th>Jumlah Pengeluaran</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                     

  
                    <tbody>
                    
               <tr>
                    <td align="center"><?php for ($i=1; $i < $i; $i++); echo $i++ ?> </td>
                  
                    <td>Rp.<?= $detail['total_gaji']; ?></td>
                    
                    
                    
                    <td>
                   <a href=""><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   
              </tr>
                   
                   </tbody>
                    </table>
                    </div>
                    </div>


            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

