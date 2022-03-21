<br>
<?php if($akses == '1'){ ?>
<a style="margin-left: 10px;" class="btn bg-primary" href="<?php echo site_url('Welcome/Mapel/Add'); ?>"><i class="fa fa-plus"></i></a>
<?php } ?>
<?php if($akses == '2'){ ?>

<?php } ?>

 <div class="table-responsive">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >

                    <thead>

                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>Kelas Mengajar</th>
                        <th>Detail</th>
                        
                       
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                $i = 1;
                if (!empty($DataDetailMengajar))
                {
                    foreach($DataDetailMengajar as $ReadDS)
                    {
                ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $ReadDS->nama_guru;?></td>
                            <td><?= $ReadDS->kelas_guru ?></td>
                            <td><a class="btn bg-aqua" href="<?php echo site_url('Welcome/KelasGuru/'.$ReadDS->nid.'/view') ?>"><i class="fa fa-sign-in"></i></a></td>
                           
                            
                           
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
                   
                    </table>

</div>