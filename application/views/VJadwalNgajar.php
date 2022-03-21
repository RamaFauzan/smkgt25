<br>
<?php if($akses == '1'){ ?>
<a style="margin-left: 10px;" class="btn bg-primary" href="<?php echo site_url('Welcome/DataJamMapel/Add'); ?>"><i class="fa fa-plus"></i></a>

<a style="margin-left: 900px;" class="btn bg-success" href="<?php echo site_url('Welcome/KelasGuru') ?>"><i class="fa fa-sign-in"></i>Kelas Guru</a>
<?php } ?>
<?php if($akses == '4'){ ?>
<a style="margin-left: 10px;" class="btn bg-primary" href="<?php echo site_url('Welcome/DataJamMapel/Add'); ?>"><i class="fa fa-plus"></i></a>

<a style="margin-left: 900px;" class="btn bg-success" href="<?php echo site_url('Welcome/KelasGuru') ?>"><i class="fa fa-sign-in"></i> Kelas Guru</a>
<?php } ?>
<div class="alert alert-primary alert-dismissible" style="<?php echo ($successMsg == 'Add') ? '' : 'display:none' ;?>">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Data "<?php echo $successItm; ?>" Berhasil Di Tambah!</h4>
</div>

<div class="alert alert-primary alert-dismissible" style="<?php echo ($successMsg == 'Update') ? '' : 'display:none' ;?>">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Data "<?php echo $successItm; ?>" Berhasil Di Update!</h4>
</div>
<br>

 <div class="table-responsive">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >

                    <thead>

                    <tr>
                        <th>NO</th>
                        <th>Nama Guru</th>
                        <th>Kelas Mengajar</th>
                        <th>Mata Pelajaran</th>
                        <th>Jam Awal</th>
                        <th>Jam Akhir</th>
                        <th>Kelas Ajar</th>
                        <th>Detail</th>
                       
                        
                       
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                $i = 1;
                if (!empty($DataJamMapel))
                {
                    foreach($DataJamMapel as $ReadDS)
                    {
                        
                ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $ReadDS->nama_guru;?></td>
                            <td width="50px">
                            <?= $ReadDS->hari; ?>

                           
                    
                             </td>
                            <td>
                                <?= $ReadDS->nama_mapel; ?>
                            </td>

                            <td>
                                <?= $ReadDS->jam_awal; ?>
                            </td>

                            <td><?= $ReadDS->jam_akhir; ?></td>
                            <td><?= $ReadDS->kelas; ?><?= $ReadDS->jurusan; ?><?= $ReadDS->sub_kelas; ?></td>
                            <td><a class="btn bg-aqua" href="<?php echo site_url('Welcome/DataJamMapel/'.$ReadDS->kd.'/view') ?>"><i class="fa fa-sign-in"></i></a></td>

                           
                            
                           
                        </tr>
                        
                        <!-- Popup -->
                        <div class="modal modal-danger fade" id="delete<?php echo $i; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p><h4>Anda yakin ingin menghapus Data "<?php echo $ReadDS->nama_mapel; ?>" ?</h4></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
                                        <a href="<?php echo site_url('Welcome/DeleteMapel/'.$ReadDS->kd_mapel); ?>" class="btn btn-outline">Hapus Data</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    $i++;
                    }
                }
                ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>NO</th>
                        <th>Kelas Mengajar</th>
                        <th>Detail</th>
                       
                    </tr>
                    </tfoot>
                    </table>

</div>