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
                        <th>Mata Pelajaran</th>
                        <th>Kompetensi</th>
                        
                        <th>Status</th>
                        <th>Tools</th>

                    </tr>
                    </thead>

                    <tbody>
                    <?php
                $i = 1;
                if (!empty($Mapel))
                {
                    foreach($Mapel as $ReadDS)
                    {
                ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $ReadDS->nama_mapel;?></td>
                            <td><a class="btn bg-aqua" href="<?php echo site_url('Welcome/Mapel/Kompetensi/'.$ReadDS->kd_mapel) ?>"><i class="fa fa-sign-in"></i></a></td>
                           
                            <td>
                                <?php
                                    echo '<span class="badge bg-green">Active</span>';
                                ?>
                            </td>
                            <td>
                                <a class="btn bg-orange" href="<?php echo site_url('Welcome/Mapel/'. $ReadDS->kd_mapel .'/view'); ?>"><i class="fa fa-pencil"></i></a>
                                <a class="btn bg-red" data-toggle="modal" data-target="#delete<?php echo $i; ?>"><i class="fa fa-trash-o"></i></a>
                            </td>
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
                        <th>Mata Pelajaran</th>
                        <th>Kompetensi</th>
                        <th>Riwayat</th>
                        <th>Status</th>
                        <th>Tools</th>
                    </tr>
                    </tfoot>
                    </table>

</div>