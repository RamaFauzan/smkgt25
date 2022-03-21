<!-- Add Success Message -->
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
<!-- <a class="btn bg-primary" style="margin-left: 7px;" href="<?php echo site_url('Welcome/Siswa/Add'); ?>"><i class="fa fa-plus"></i></a> -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
                                Tambah Data
</button>
                            
<br><br>

 <div class="table-responsive">
               <table class="table table-striped table-bordered table-hover dataTables-example" >
               	<thead>
                <tr>
                  <th>No</th>
                  <th>Nama Jabatan </th>
                  <th>Tunjangan </th>
                  
				  <th style="width:100px;">Tools</th>
                </tr>
                </thead>
                <tbody>
				
				<?php
				$i = 1;
				
				if (!empty($DataMasterJabatan))
				{
					foreach($DataMasterJabatan as $ReadDS)
					{
						
				?>
					
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $ReadDS->nama_jabatan; ?></td>
						<td><?php echo $ReadDS->tunjangan; ?></td>

						

						
						
						<td>
							<a class="btn bg-warning" data-toggle="modal" data-target="#myModal5<?php echo $ReadDS->kd_jabatan; ?>"><i class="fa fa-pencil"></i></a>
							<a class="btn bg-danger" data-toggle="modal" data-target="#delete<?php echo $i; ?>"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					
					<!-- Popup -->
					<div class="modal modal-danger fade" id="delete<?php echo $i; ?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<p><h4>Anda yakin ingin menghapus Data "<?php echo $ReadDS->nama_jabatan; ?>" ?</h4></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
									<a href="<?php echo site_url('Welcome/DeletePengumuman/'.$ReadDS->kd_jabatan); ?>" class="btn btn-outline">Hapus Data</a>
								</div>
							</div>
						</div>
					</div>
					

					  <div class="modal inmodal" id="myModal5<?php echo $ReadDS->kd_jabatan; ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-pencil modal-icon"></i>
                                            <h4 class="modal-title">Ubah Data Siswa</h4>
                                            <!-- <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger alert-dismissible" style="<?php echo ($successMsg == 'Update_Fail') ? '' : 'display:none' ;?>">
											  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											  <h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
											</div>

												<form action="<?php echo site_url('Welcome/UpdateMasterJabatan'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
												              <div class="box-body">
												                
												                    <input type="hidden" name="kd_jabatan" value="<?php echo $ReadDS->kd_jabatan; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                 

												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Jabatan</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="nama_jabatan" value="<?php echo $ReadDS->nama_jabatan; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                    
												                  </div>
												                </div>


												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Tunjangan</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="tunjangan" value="<?php echo $ReadDS->tunjangan; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                    
												                  </div>
												                </div>


												                


												              </div>
												              <!-- /.box-body -->
												              <div class="box-footer">
												                <button type="submit" name="simpan" value="Simpan" class="btn bg-primary" style="margin-left: 13px;"><i class="fa fa-check"></i> Ubah Data</button>
												              </div>
												              <!-- /.box-footer -->
												</form>

											
                                        </div>
                                       <!--  <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div> -->
                                        </form>
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


            <!-- Modal Add Pegawai -->

            <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-plus modal-icon"></i>
                                            <h4 class="modal-title">Tambah Data Penggajian</h4>
                                            <!-- <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                                        </div>
                                        <div class="modal-body">
                                           


											<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/AddMasterJabatan'); ?>" method="post">

											              
															
															<div class="form-group">
											                  <label class="col-sm-2 control-label">Nama Jabatan</label>
																	
											                  <div class="col-sm-10">
																<input type="text" name="nama_jabatan" class="form-control" placeholder="nama_jabatan">  
											                  </div>
											                </div>
															
															<div class="form-group">
											                  <label class="col-sm-2 control-label">Tunjangan</label>
																	
											                  <div class="col-sm-10">
																<input type="text" name="tunjangan" class="form-control" placeholder="tunjangan">
											                  </div>
											                </div>

											               
											              
															
											              <!-- /.box-body -->
											              <div class="box-footer">
											                <button type="submit" name="simpan" value="Simpan" class="btn bg-primary" style="margin-left: 13px;"><i class="fa fa-check"></i> Simpan</button>
											              </div>
											              <!-- /.box-footer -->
											
                                        </div>
                                       <!--  <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div> -->
                                        </form>
                                    </div>
                                </div>
                            </div>

                         

                          