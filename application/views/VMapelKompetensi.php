<!-- Add Success Message -->
<div class="alert alert-success alert-dismissible" style="<?php echo ($successMsg == 'Add') ? '' : 'display:none' ;?>">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"></i> Data Berhasil Di Tambah!</h4>
</div>

<!-- Update Success Message -->
<div class="alert alert-info alert-dismissible" style="<?php echo ($successMsg == 'Update') ? '' : 'display:none' ;?>">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"></i> Data Berhasil Di Ubah!</h4>
</div>

<!-- Delete Success Message -->
<div class="alert alert-warning alert-dismissible" style="<?php echo ($successMsg == 'Delete') ? '' : 'display:none' ;?>">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"></i> Data Berhasil Di Hapus!</h4>
</div>

<br>

<!-- START CUSTOM TABS -->
      <div class="row">
        <div class="box-body">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
			<?php
			if ($TotalSemester != 0)
			{
				for($i = 1; $i <= $TotalSemester; $i++)
				{
			?>
					<li class="<?php echo($i == 1 && $this->uri->segment(5) == '' || $this->uri->segment(5) == $i) ? 'active' : '' ;?>">
						<a href="#tab_<?php echo $i; ?>" class="btn bg-aqua" data-toggle="tab"><?php echo $i; ?></a>
					</li>
			<?php
				}
			}
			?>
					<li class="<?php echo($TotalSemester == 0) ? 'active' : '' ; ?>"><a href="#tab_new" class="btn btn-success dim" data-toggle="tab"><i class="fa fa-plus"></i></a></li>
            </ul>
			
			<br>
			
            <div class="tab-content">
			<?php
			if ($TotalSemester != 0)
			{
				for($i = 1; $i <= $TotalSemester; $i++)
				{
			?>			
					<div class="tab-pane <?php echo ($i == 1 && $this->uri->segment(5) == '' || $this->uri->segment(5) == $i) ? 'active' : '' ; ?>" id="tab_<?php echo $i; ?>">
					
						<div class="box-body table-responsive no-padding">
						  <table class="table table-bordered">
							<tr>
							  <th style="width:50px;"><center>No</center></th>
							  <th style="width:380px;">Pengetahuan</th>
							  <th><center>KKM</center></th>
							  <th style="width:380px;">Keterampilan</th>
							  <th><center>KKM</center></th>
							  <th style="width:100px;">Tools</th>
							</tr>
							
							<?php
							$ii = 1;
							if (!empty($Semester[$i]))
							{
								foreach($Semester[$i] as $ReadDS)
								{
							?>
									<!-- View -->
									<tr style="<?php echo($this->uri->segment(6) == $ReadDS->kd_kompetensi) ? 'display:none' : '' ;?>">
									
										<td><center><?php echo $ii; ?></center></td>
										<td><?php echo $ReadDS->p_kompetensi; ?></td>
										<td><center><span class="badge bg-primary"><?php echo $ReadDS->p_kkm_kompetensi; ?></span></center></td>
										<td><?php echo $ReadDS->k_kompetensi; ?></td>
										<td><center><span class="badge bg-primary"><?php echo $ReadDS->k_kkm_kompetensi; ?></span></center></td>
										<td>
											<a class="btn bg-orange" 
											   href="<?php echo site_url('Welcome/Mapel/Kompetensi/'.$this->uri->segment(4).'/'.$i.'/'.$ReadDS->kd_kompetensi); ?>">
												<i class="fa fa-cog"></i>
											</a>
											<a class="btn bg-red" data-toggle="modal" data-target="#delete<?php echo $i.$ii; ?>">
												<i class="fa fa-trash-o"></i>
											</a>
										</td>
										
									</tr>
									
									<!-- Update -->
									<tr style="<?php echo($this->uri->segment(6) == $ReadDS->kd_kompetensi) ? '' : 'display:none' ;?>">
									
										<form action="<?php echo site_url('Welcome/UpdateMapelKompetensi/'.$ReadDS->kd_kompetensi.'/'.$this->uri->segment(4)); ?>" method="post">
											<td><center><?php echo $ii; ?></center></td>
											<td>
												<textarea name="p_kompetensi" class="form-control"><?php echo $ReadDS->p_kompetensi; ?></textarea>
											</td>
											<td style="width:60px;">
												<input type="text" name="p_kkm_kompetensi" class="form-control" value="<?php echo $ReadDS->p_kkm_kompetensi; ?>">
											</td>
											<td>
												<textarea name="k_kompetensi" class="form-control"><?php echo $ReadDS->k_kompetensi; ?></textarea>
											</td>
											<td style="width:60px;">
												<input type="text" name="k_kkm_kompetensi" class="form-control" value="<?php echo $ReadDS->k_kkm_kompetensi; ?>">
											</td>
											<td>
												<button type="submit" name="simpan" value="Simpan" class="btn bg-green"><i class="fa fa-check"></i> Simpan</button>
											</td>
										</form>
										
									</tr>
									
									<!-- Popup -->
									<div class="modal modal-danger fade" id="delete<?php echo $i.$ii; ?>">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-body">
													<p><h4>Anda yakin ingin menghapus Data ?</h4></p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
													<a href="<?php echo site_url('Welcome/DeleteMapelKompetensi/'.$ReadDS->kd_kompetensi.'/'.$this->uri->segment(4)); ?>" class="btn btn-outline">
														Hapus Data
													</a>
												</div>
											</div>
										</div>
									</div>
							<?php
									$ii++;
								}
							?>
								<!-- Add -->
								<tr style="<?php echo($this->uri->segment(5) == $i && $this->uri->segment(6) == 'Add') ? '' : 'display:none' ; ?>">
								
									<form action="<?php echo site_url('Welcome/AddMapelKompetensi/'.$this->uri->segment(4)); ?>" method="post">
										<input type="hidden" name="kd_mapel" value="<?php echo $this->uri->segment(4);?>">
										<input type="hidden" name="semester" value="<?php echo $i;?>">
										<td><center><?php echo $ii; ?></center></td>
										<td>
											<textarea name="p_kompetensi" class="form-control">...</textarea>
										</td>
										<td style="width:60px;">
											<input type="text" name="p_kkm_kompetensi" class="form-control" placeholder="75">
										</td>
										<td>
											<textarea name="k_kompetensi" class="form-control">...</textarea>
										</td>
										<td style="width:60px;">
											<input type="text" name="k_kkm_kompetensi" class="form-control" placeholder="75">
										</td>
										<td>
											<button type="submit" name="simpan" value="Simpan" class="btn bg-green"><i class="fa fa-check"></i> Simpan</button>
										</td>
									</form>
									
								</tr>
							<?php
							}
							?>
							
							<tr>
								<td><a href="<?php echo site_url('Welcome/Mapel/Kompetensi/'.$this->uri->segment(4).'/'.$i.'/Add'); ?>" class="btn bg-success"><i class="fa fa-plus"></i></a></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							
						  </table>
						</div>
						
						<br>
						
					  </div>
            <?php
				}
			}
			?>
			
			  <div class="tab-pane <?php echo($TotalSemester == 0) ? 'active' : '' ; ?>" id="tab_new">
				<div class="box-body table-responsive no-padding">
				<form action="<?php echo site_url('Welcome/AddMapelKompetensi/'.$this->uri->segment(4)); ?>" method="post">
				
				  <div class="form-group">
					<label class="col-sm-2 control-label">Semester</label>
							
					<div class="col-sm-10">
						<input type="text" name="semester" class="form-control" placeholder="Semester">
					</div>
				  </div>
				
				  <br><br>
				
				  <table class="table table-bordered">
					<tr>
					  <th style="width:50px;"><center>No</center></th>
					  <th style="width:380px;">Pengetahuan</th>
					  <th><center>KKM</center></th>
					  <th style="width:380px;">Keterampilan</th>
					  <th><center>KKM</center></th>
					  <th style="width:100px;">Tools</th>
					</tr>

					<tr>
							<input type="hidden" name="kd_mapel" value="<?php echo $this->uri->segment(4);?>">
							<td><center>1</center></td>
							<td>
								<textarea name="p_kompetensi" class="form-control">...</textarea>
							</td>
							<td style="width:60px;">
								<input type="text" name="p_kkm_kompetensi" class="form-control" placeholder="75">
							</td>
							<td>
								<textarea name="k_kompetensi" class="form-control">...</textarea>
							</td>
							<td style="width:60px;">
								<input type="text" name="k_kkm_kompetensi" class="form-control" placeholder="75">
							</td>
							<td>
								<button type="submit" name="simpan" value="Simpan" class="btn bg-green"><i class="fa fa-check"></i> Simpan</button>
							</td>
						</form>
									
					</tr>
					
					

				  </table>
				</div>
				
				<br>
              </div>
			  
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->