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
<!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
                                Tambah Data
</button> -->
                            
<br><br>

 <div class="table-responsive">
               <table class="table table-striped table-bordered table-hover dataTables-example" >
               	<thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>tanggal update nabung</th>
                  <th>Jumlah Nabung</th>
				  <th style="width:100px;">Tools</th>
                </tr>
                </thead>
                <tbody>
				
				<?php
				$i = 1;
				
				if (!empty($DataTabunganSiswa))
				{
					foreach($DataTabunganSiswa as $ReadDS)
					{
						
				?>
					
					<tr>
						<td><?php echo $ReadDS->kd; ?></td>
						
						<td><?php echo $ReadDS->nama_siswa; ?></td>
						<td><?php echo $ReadDS->tgl_nabung; ?></td>
						<td><?php echo $ReadDS->jml_nabung; ?></td>

						

						
						
						<td align="center">
							<a class="btn bg-success" href="<?= site_url('Welcome/DataTabunganSiswa/'.$ReadDS->nis.'/view') ?>"><i class="fa fa-plus"></i></a>
							
							<a class="btn bg-danger" href="<?= site_url('Welcome/DataTabunganSiswa2/'.$ReadDS->nis.'/view') ?>"><i class="fa fa-window-minimize"></i></a>
						
						</td>
					</tr>
					



					


<!-------------------------------------------------------------------------------------------->

					<!-- Popup -->
					<div class="modal modal-danger fade" id="delete<?php echo $i; ?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<p><h4>Anda yakin ingin menghapus Data "<?php echo $ReadDS->nis; ?>" ?</h4></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
									<a href="<?php echo site_url('Welcome/DeletePengumuman/'.$ReadDS->nis); ?>" class="btn btn-outline">Hapus Data</a>
								</div>
							</div>
						</div>
					</div>
					

					  <div class="modal inmodal" id="myModal5<?php echo $i; ?>" tabindex="-1" role="dialog"  aria-hidden="true">
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

												<form action="<?php echo site_url('Welcome/AddDataTabungan'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
												              <div class="box-body">
												                <input type="hidden" name="nis" value="<?= $ReadDS->nis; ?>">
												               <!--  <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Nabung</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="tgl_nabung" value="<?php echo $ReadDS->tgl_nabung; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                    
												                  </div>
												                </div> -->


												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Saldo</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="" id="jml_nabung" onkeyup="Hitung()" value="<?php echo $ReadDS->jml_nabung; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                    
												                  </div>
												                </div>

												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Nabung</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="" onkeyup="Hitung()" id="jml_nabungbaru" class="form-control" id="inputEmail3" placeholder="Kodes">
												                    
												                  </div>
												                </div>
												                <input type="text" id="totals" name="jml_nabung">

												               <!--  <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">status</label>
												                  <div class="col-sm-10">
												                    <select class="form-control" name="status">
																	<option><?php echo $ReadDS->status; ?></option>
																	<option>-----------------------------</option>
																	<option value="1">Aktif</option>
																	<option value="0">Tidak Aktif</option>
																</select>
												                    
												                  </div>
												                </div> -->


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

            <div class="col-lg-4">
                    <div class="widget lazur-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-money fa-4x"></i>
                            <h1 class="m-xs">Rp <?php echo number_format($this->MSudi->hitungpemasukantabungan(),2,',','.'); ?></h1>
                            <h3 class="font-bold no-margins">
                                Pemasukan
                            </h3>
                           <!--  <small>power</small> -->
                        </div>
                    </div>
    		</div>
            <!-- Modal Add Pegawai -->

            <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-plus modal-icon"></i>
                                            <h4 class="modal-title">Tambah Data Siswa</h4>
                                            <!-- <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                                        </div>
                                        <div class="modal-body">
                                           


											<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/AddPengumuman'); ?>" method="post">

											              
															
															<div class="form-group">
											                  <label class="col-sm-2 control-label">Kode Mapel</label>
																	
											                  <div class="col-sm-10">
																<input type="text" name="nis" class="form-control" placeholder="151800XXX">  
											                  </div>
											                </div>
															
															<div class="form-group">
											                  <label class="col-sm-2 control-label">Judul Pengumuman</label>
																	
											                  <div class="col-sm-10">
																<input type="text" name="nis" class="form-control" placeholder="nis">
											                  </div>
											                </div>

											                <div class="form-group">
											                  <label class="col-sm-2 control-label">Isi Pengumuman</label>
																	
											                  <div class="col-sm-10">
																<input type="text" name="jml_nabung"  class="form-control" placeholder="jml_nabung">
											                  </div>
											                </div>

											                <div class="form-group">
											                  <label class="col-sm-2 control-label">Status</label>
																	
											                  <div class="col-sm-10">
																<select class="form-control" name="status">

																	<option>--PILIH--</option>
																	<option value="1">Aktif</option>
																	<option value="0">Tidak Aktif</option>

																</select>
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


<script type="text/javascript">
	function Hitung() {
		
	
        var txt1value = document.getElementById('jml_nabung').value;
        var txt2value = document.getElementById('jml_nabungbaru').value;
        var hasil = parseInt(txt1value) + parseInt(txt2value);

        if (!isNaN(hasil)) {
            document.getElementById('totals').value = hasil;
        }
    }
 </script>

                         

                          