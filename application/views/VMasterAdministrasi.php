            <div class="ibox-content"> 
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <div class="card">
            <div>
              <div class="card-header">
              <a href="<?php echo site_url('Welcome/VFormAddMasterAdministrasi'); ?>"> 
              <button type="button" class="btn btn-block btn-primary" style="width: 150px">Add Administrasi</button>
              </a>
                <h3 class="card-title">Data Master Administrasi</h3>
              </div>
              </div>
                    <tr>
                        <th>No</th>
                        <th>TAHUN AJARAN</th>
                        <th>UANG BANGUNAN</th>
                        <th>UANG SPP</th>
                        <th>UANG KAOS OLAH RAGA</th>
                        <th>UANG BATIK</th>
                        <th>UANG ALMAMATER</th>
                        <th>UANG ATRIBUT</th>                        
                        <th>UANG UTS SEMESTER 1</th>
                        <th>UANG UTS SEMESTER 3</th>
                        <th>UANG UTS SEMESTER 5</th>
                        <th>UANG UAS SEMESTER 2</th>
                        <th>UANG UAS SEMESTER 4</th>
                        <th>UANG DAFTAR ULANG 1</th>
                        <th>UANG DAFTAR ULANG 2</th>
                        <th>UANG PRAKERIN</th>
                        <th>UANG PAKET UJIAN</th>
                        <th>KETERANGAN</th>                        
                        <th>AKSI</th>
                    </tr>
                    </thead>
                     

  
                    <tbody>
                    <?php
                    $i=1;
                    if(!empty($DataMasterAdministrasi))
                    {
                      foreach($DataMasterAdministrasi as $ReadDS)
                      {
                    ?>
               <tr>
                    <td align="center"><?= $i++; ?></td>
                    <td><?= $ReadDS->tahun_ajaran; ?></td>
                    <td><?= $ReadDS->uang_bangunan; ?></td>
                    <td><?= $ReadDS->uang_spp_smt1; ?></td>
                    <td><?= $ReadDS->uang_kaos_olahraga; ?></td>
                    <td><?= $ReadDS->uang_batik; ?></td>
                    <td><?= $ReadDS->uang_almamater; ?></td>
                    <td><?= $ReadDS->uang_atribut; ?></td>
                    <td><?= $ReadDS->uang_uts_semester1; ?></td>
                    <td><?= $ReadDS->uang_uts_semester3; ?></td>
                    <td><?= $ReadDS->uang_uts_semester5; ?></td>
                    <td><?= $ReadDS->uang_uas_semester2; ?></td>
                    <td><?= $ReadDS->uang_uas_semester4; ?></td>
                    <td><?= $ReadDS->uang_daftar_ulang_1; ?></td>
                    <td><?= $ReadDS->uang_daftar_ulang_2; ?></td>
                    <td><?= $ReadDS->uang_prakerin; ?></td>
                    <td><?= $ReadDS->uang_paket_ujian_kelas_3; ?></td>                  
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
                   <a href="<?php echo site_url('Welcome/DataMasterAdministrasi/'.$ReadDS->no_administrasi.'/view') ?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="<?php echo site_url('Welcome/DeleteDataMasterAdministrasi/'.$ReadDS->no_administrasi) ?>"><i class="fa fa-trash-o"></i> </a>
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

