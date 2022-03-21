<!-- Add Success Message -->

<?php $a = $this->uri->segment(4); ?>

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
                  <th>Jenis kenakalan</th>
                  <th>Poin kenakalan</th>
                  <th>Tanggal kenakalan</th>
                  <!-- <th>Status kenakalan</th> -->
                  
				  <th style="width:100px;">Tools</th>
                </tr>
                </thead>
                <tbody>
				
				<?php
				$i = 1;
				
				if (!empty($DataKenakalan))
				{
					foreach($DataKenakalan as $ReadDS)
					{
						
				?>
					
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $ReadDS->jenis_kenakalan; ?></td>
						<td><?php echo $ReadDS->poin_kenakalan; ?></td>
						<td><?= $ReadDS->tgl_kenakalan ?></td>
						<!-- <td><?= $ReadDS->status_siswa; ?></td> -->
						

						
						
						<td>
							<a class="btn bg-warning" data-toggle="modal" data-target="#myModal5<?php echo $ReadDS->kd; ?>"><i class="fa fa-pencil"></i></a>
							<a class="btn bg-danger" data-toggle="modal" data-target="#delete<?php echo $i; ?>"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
						
					<!-- Popup -->
					<div class="modal modal-danger fade" id="delete<?php echo $i; ?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<p><h4>Anda yakin ingin menghapus Data "<?php echo $ReadDS->jenis_kenakalan; ?>" ?</h4></p>
								</div>
								<div class="modal-footer">

									<button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
									<a href="<?php echo site_url('Welcome/DeleteDataKenakalan/'.$ReadDS->kd); ?>" class="btn btn-outline">Hapus Data</a>
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
                                            <h4 class="modal-title">Ubah Data Kenakalan</h4>
                                            <!-- <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger alert-dismissible" style="<?php echo ($successMsg == 'Update_Fail') ? '' : 'display:none' ;?>">
											  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											  <h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
											</div>

												<form action="<?php echo site_url('Welcome/UpdateDataKenakalan'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
												              <div class="box-body">
												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Mapel</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="kd" value="<?php echo $ReadDS->kd; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                  </div>
												                </div>

												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kenakalan</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="jenis_kenakalan" value="<?php echo $ReadDS->jenis_kenakalan; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                    
												                  </div>
												                </div>


												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Poin Kenakalan</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="poin_kenakalan" value="<?php echo $ReadDS->poin_kenakalan; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                    
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
                                            <h4 class="modal-title">Tambah Data Kenakalan</h4>
                                            <!-- <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                                        </div>
                                        <div class="modal-body">
                                           


											<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/UpdateDataPoin'); ?>" method="post">

											             <!--  <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash(); ?>"> -->
															<input type="hidden" name="nis" value="<?= $detail['nis']; ?>">
														
															 <div class="form-group">
												                	<label for="inputEmail3" class="col-sm-2 control-label">Jenis Kenakalan</label>
												                 	<select class="form-control" id="barang" onchange="UangBangunan()">
												                 		
												                 		<?php 

												                 			if(!empty($DataKenakalanSiswa)){
												                 				foreach($DataKenakalanSiswa as $read){

												                 			?>

												                 			<option value="<?= $read->poin_kenakalan ?>"><?= $read->jenis_kenakalan ?></option>


												                 		<?php
												                 				}
												                 			}

												                 		?>

												                 	</select>

												                 	<select style="display: none;" id="hg_barang">
												                 		
												                 		<?php 

												                 			if(!empty($DataKenakalanSiswa)){
												                 				foreach($DataKenakalanSiswa as $read){

												                 			?>

												                 			<option value="<?= $read->poin_kenakalan ?>"><?= $read->jenis_kenakalan ?></option>


												                 		<?php
												                 				}
												                 			}

												                 		?>

												                 	</select>

												                 	<select style="display: none;" id="hg_barang2">
												                 		
												                 		<?php 

												                 			if(!empty($DataKenakalanSiswa)){
												                 				foreach($DataKenakalanSiswa as $read){

												                 			?>

												                 			<option value="<?= $read->jenis_kenakalan ?>"><?= $read->jenis_kenakalan ?></option>


												                 		<?php
												                 				}
												                 			}

												                 		?>

												                 	</select>
												                </div>

												                <input type="hidden" name="jenis_kenakalan" id="harga2">
											                	<input type="hidden" name="poin_kenakalan" id="harga">


											                <div class="form-group">
											                  <label class="col-sm-2 control-label">Tanggal Kenakalan</label>
																	
											                  <div class="col-sm-10">
																		
											                  		 <div class="input-group date">
									                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" class="form-control" name="tgl_kenakalan">
									                                </div>
															
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


                 <?php 
                 $col = '';
                 $but = '';
                 if ($this->MSudi->hitungjumlahpoin($a)>='150')
                 { 
                 	$col = 'navy';
                 }
                 if ($this->MSudi->hitungjumlahpoin($a)>='250')
                 {
                 	$col = 'yellow';
                 }
                 if ($this->MSudi->hitungjumlahpoin($a)>='500')
                 {
                 	$col = 'red';
                 }
                 if ($this->MSudi->hitungjumlahpoin($a)>=150){
               		$but = '<input type="submit" class="btn btn-success" value="1" name="status_kenakalan">';
               	}
               	 if ($this->MSudi->hitungjumlahpoin($a)>=250){
               		$but = '<input type="submit" class="btn btn-success" value="2" name="status_kenakalan">';
               	}
               	
               	 if ($this->MSudi->hitungjumlahpoin($a)>=500){
               		$but = '<input type="submit" class="btn btn-success" value="3" name="status_kenakalan">';
               	}

                 echo '<div class="col-lg-2">
                    <div class="widget '.$col.'-bg p-lg text-center" >
                        <div class="m-b-md" style="margin-bottom: -20px; position: relative;"">
                            <i class="fa fa-exclamation-circle fa-4x"></i>
                            <h1 class="m-xs">'.$this->MSudi->hitungjumlahpoin($a).'</h1>
                            <h3 class="font-bold no-margins">
                                Total Poin Pelanggaran
                            </h3>
                           	
				                <form action="'.site_url('Welcome/UpdateStatusKenakalan').'" method="post">
				                <br>
				                <div style="margin-left: 0px; margin-top: 10px;">'.$but.'</div>
				              

				              <input type="hidden" name="nis" value="'.$detail['nis'].'">
				               </form>

                        </div>
                    </div>
    			</div>'
                ?>

                
                

    		<?php  ?>

<script>
    function UangBangunan()
  {
    // get combo boxes
    var idx_barang = document.getElementById('barang');
    var hrg_barang = document.getElementById('hg_barang');
     var hrg_barang2 = document.getElementById('hg_barang2');
    
    // change both combo box on same index
    hrg_barang.selectedIndex = idx_barang.selectedIndex;
     hrg_barang2.selectedIndex = idx_barang.selectedIndex;
    
    // get 'hrg_barang' values
    var values = hrg_barang.value;
    var values2 = hrg_barang2.value;

    document.getElementById('harga').value = values;
    document.getElementById('harga2').value = values2;
  }
</script>  

                          