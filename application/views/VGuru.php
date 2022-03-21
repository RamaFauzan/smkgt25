<div class="alert alert-info alert-dismissible" style="<?php echo ($successMsg == 'Update') ? '' : 'display:none' ;?>">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Selamat "<?php echo $successItm; ?>" telah menjadi <?php echo $successItm2; ?>!</h4>
</div>

            <div class="ibox-content"> 
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <div class="card">
            <div>
              <div class="card-header">
              <a href="<?php echo site_url('Welcome/VFormAddguru'); ?>">
              <button type="button" class="btn bg-primary" style=""><i class="fa fa-plus"></i></button>
              </a>

              <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Promosi Guru</a>
              <h3 class="card-title" style="margin-left: 450px;">Data Guru</h3>
            </div>

          </div>

            <br>
                    <tr>
                        <th>No</th>
                        <th>NO PENDAFTARAN</th>
                        <th>NAMA GURU</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th>
                         <th>JENIS KELAMIN</th>
                        <th>PENDIDIKAN TERAKHIR</th>
                        <th>KETERANGAN</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                     

  
                    <tbody>
                    <?php
                    $i=1;
                    if(!empty($Dataguru))
                    {
                      foreach($Dataguru as $ReadDS)
                      {
                    ?>
               <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $ReadDS->no_pendaftaran; ?></td>
                    <td><?= $ReadDS->nama_guru; ?></td>
                    <td><?= $ReadDS->tempat_lahir; ?></td>
                    <td><?= $ReadDS->tanggal_lahir; ?></td>
                    <td><?= $ReadDS->jenis_kelamin; ?></td>
                    <td align="center"><?= $ReadDS->pendidikan_terakhir; ?></td>                   
                    <td align="center">
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
                   <a href="<?php echo site_url('Welcome/Dataguru/'.$ReadDS->kd_guru.'/view') ?>"><i class="fa fa-pencil"></i></a>&nbsp;
                   <a href="<?php echo site_url('Welcome/DetailDataguru/'.$ReadDS->kd_guru.'/view') ?>"><i class="fa fa-drivers-license" aria-hidden="true"></i></span></a>&nbsp;
                   <a href="<?php echo site_url('Welcome/DeleteDataguru/'.$ReadDS->kd_guru) ?>"><i class="fa fa-trash-o"></i></a>
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

                        
                
                
              </div>
          <!-- /.col -->
        </div>


<div class="modal inmodal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h3 class="modal-title">Promosi Jabatan Guru</h3>
                                        </div>
                                        <div class="modal-body">
                                          <label>Nama Guru</label>
                                          <form action="<?= site_url('Welcome/UpdateJabatanGuru') ?>" method="post">
                                            <select class="form-control" name="nid" id="barang" onchange="namaguru()">
                                                              <option>--PILIH--</option>
                                                              <?php 
                                                                if(!empty($Dataguru)){
                                                                  foreach($Dataguru as $read){


                                                                ?>
                                                                <option value="<?= $read->nid ?>"><?= $read->nama_guru ?></option>
                                                            <?php
                                                                  }
                                                                }

                                                              ?>
                                            </select>
                                            <select id="hg_barang" style="display:none;">
                                              <option>--PILIH--</option>
                                                              <?php 
                                                                if(!empty($Dataguru)){
                                                                  foreach($Dataguru as $read){


                                                                ?>
                                                                <option value="<?= $read->nama_guru ?>"><?= $read->nama_guru ?></option>
                                                            <?php
                                                                  }
                                                                }

                                                              ?>

                                            </select>
                                            <br>
                                            <label>Jabatan</label>
                                            <select class="form-control" name="kd_jabatan" id="barang2" onchange="jabatanguru()">
                                                              <option>--PILIH--</option>
                                                              <?php 
                                                                if(!empty($DataJabatan)){
                                                                  foreach($DataJabatan as $read){


                                                                ?>
                                                                <option value="<?= $read->kd_jabatan ?>"><?= $read->nama_jabatan ?></option>
                                                            <?php
                                                                  }
                                                                }

                                                              ?>
                                            </select>
                                            <select id="hg_barang2" style="display:none;">
                                              <option>--PILIH--</option>
                                                              <?php 
                                                                if(!empty($DataJabatan)){
                                                                  foreach($DataJabatan as $read){


                                                                ?>
                                                                <option value="<?= $read->nama_jabatan ?>"><?= $read->nama_guru ?></option>
                                                            <?php
                                                                  }
                                                                }

                                                              ?>

                                            </select>

                                            <input type="hidden" name="nama_guru" id="harga">
                                           <input type="hidden" name="namajabatan" id="harga2">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="Save changes"></input>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

<script>
    function namaguru()
  {
    // get combo boxes
    var idx_barang = document.getElementById('barang');
    var hrg_barang = document.getElementById('hg_barang');
     
    
    // change both combo box on same index
    hrg_barang.selectedIndex = idx_barang.selectedIndex;
     
    
    // get 'hrg_barang' values
    var values = hrg_barang.value;
    

    document.getElementById('harga').value = values;
    
  }
</script>

<script>
    function jabatanguru()
  {
    // get combo boxes
    var idx_barang2 = document.getElementById('barang2');
    var hrg_barang2 = document.getElementById('hg_barang2');
     
    
    // change both combo box on same index
    hrg_barang2.selectedIndex = idx_barang2.selectedIndex;
     
    
    // get 'hrg_barang2' values
    var values2 = hrg_barang2.value;
    

    document.getElementById('harga2').value = values2;
    
  }
</script>

