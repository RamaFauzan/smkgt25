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
 

 <a type="submit" class="btn btn-success myprint" style="color: white;"  onclick="print()"><i class="fa fa-print">PRINT</i></a>
<br><br>

 <div class="table-responsive">
               <table class="table table-striped table-bordered table-hover dataTables-example" >
               	<thead>
                <tr>
                  <th>No</th>
                  
                  <th>Keterangan Pengeluaran</th>
                  <th>Tanggal Pengeluaran</th>
                  <th>Jumlah Pengeluaran</th>
                  <?php if($akses == '1'): ?>
				  <th style="width:100px;">Tools</th>
				<?php endif; ?>
                </tr>
                </thead>
                <tbody>
				
				<?php
				$i = 1;
				
				if (!empty($DataPengeluaran))
				{
					foreach($DataPengeluaran as $ReadDS)
					{
						
				?>
					
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $ReadDS->ket_pengeluaran; ?></td>
						<td><?php echo $ReadDS->tgl_pengeluaran; ?></td>
						<td><?php echo $ReadDS->jml_pengeluaran; ?></td>

						

						
						<?php if($akses == '1'): ?>
						<td>
							<a class="btn bg-warning" data-toggle="modal" data-target="#myModal5<?php echo $ReadDS->kd; ?>"><i class="fa fa-pencil"></i></a>
							<a class="btn bg-danger" data-toggle="modal" data-target="#delete<?php echo $i; ?>"><i class="fa fa-trash-o"></i></a>
						</td>
					<?php endif; ?>
					</tr>
					
					<!-- Popup -->
					<div class="modal modal-danger fade" id="delete<?php echo $i; ?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<p><h4>Anda yakin ingin menghapus Data "<?php echo $ReadDS->ket_pengeluaran; ?>" ?</h4></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
									<a href="<?php echo site_url('Welcome/DeleteDataPengeluaran/'.$ReadDS->kd); ?>" class="btn btn-outline">Hapus Data</a>
								</div>
							</div>
						</div>
					</div>
					

					  <div class="modal inmodal" id="myModal5<?php echo $ReadDS->kd; ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-pencil modal-icon"></i>
                                            <h4 class="modal-title">Ubah Data Kasbon</h4>
                                            <!-- <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger alert-dismissible" style="<?php echo ($successMsg == 'Update_Fail') ? '' : 'display:none' ;?>">
											  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											  <h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
											</div>

												<form action="<?php echo site_url('Welcome/UpdatePengeluaran'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
												              <div class="box-body">
												                <!-- <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Mapel</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="kd" value="<?php echo $ReadDS->kd; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                  </div>
												                </div> -->


												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Guru</label>
												                  <div class="col-sm-10">
												                    <select class="form-control" name="kd_guru">
																	<option><?php echo $ReadDS->nama_guru; ?></option>
																	<option>-----------------------------</option>
																	<?php
																		if(!empty($Guru)){
																			foreach($Guru as $read){

																		?>


																	<option value="<?= $read->kd_guru ?>"><?= $read->nama_guru; ?></option>
																	
																	<?php
																			}
																		}
																	 ?>
																</select>
												                    
												                  </div>
												                </div>

												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Ket Kasbon</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="ket_pengeluaran" value="<?php echo $ReadDS->ket_pengeluaran; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                    
												                  </div>
												                </div>


												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Kasbon</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="jml_pengeluaran" value="<?php echo $ReadDS->jml_pengeluaran; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                    
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

            <?php if($akses == '1'): ?>

            	<div class="col-lg-5">
                    <div class="widget lazur-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-money fa-4x"></i>
                            <h1 class="m-xs">Rp.<?php echo number_format($this->MSudi->hitungpengeluaran(),0,',','.'); ?></h1>
                            <h3 class="font-bold no-margins">
                                Pengeluaran
                            </h3>
                           <!--  <small>power</small> -->
                        </div>
                    </div>
    			</div>

            <?php endif; ?>
            
            
            <!-- Modal Add Pegawai -->

            <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-plus modal-icon"></i>
                                            <h4 class="modal-title">Tambah Data Kasbon</h4>
                                            <!-- <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                                        </div>
                                        <div class="modal-body">
                                           


											<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/AddDataPengeluaran'); ?>" method="post">

											              
															
															
															
															<div class="form-group">
											                  <label class="col-sm-2 control-label">Ket Pengeluaran</label>
																	
											                  <div class="col-sm-10">
																<input type="text" name="ket_pengeluaran" class="form-control" placeholder="ket_pengeluaran">
											                  </div>
											                </div>

											                <div class="form-group">
											                  <label class="col-sm-2 control-label">Jumlah Pengeluaran</label>
																	
											                  <div class="col-sm-10">
																<input type="text" name="jml_pengeluaran" class="form-control" placeholder="jml_pengeluaran">
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

                     <script>
                     		$('.myprint').on('click', function myprint() {
                     			window.print;
                     		});

                     </script>    

                          