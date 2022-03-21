<!-- Add Success Message -->
<div class="alert alert-success alert-dismissible" style="<?php echo ($successMsg == 'Add') ? '' : 'display:none' ;?>">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"></i> Data "<?php echo $successItm; ?>" Berhasil Di Tambah!</h4>
</div>

<!-- Update Success Message -->
<div class="alert alert-info alert-dismissible" style="<?php echo ($successMsg == 'Update') ? '' : 'display:none' ;?>">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"></i> Data "<?php echo $successItm; ?>" Berhasil Di Ubah!</h4>
</div>

<!-- Delete Success Message -->
<div class="alert alert-warning alert-dismissible" style="<?php echo ($successMsg == 'Delete') ? '' : 'display:none' ;?>">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"></i> Data "<?php echo $successItm; ?>" Berhasil Di Hapus!</h4>
</div>
<?php 

	$kd  = $this->uri->segment(3);
	$thn = '2019/2020'.$this->uri->segment(6);
?>
<!-- <a class="btn bg-blue" href="<?php echo site_url('Welcome/Guru/Add'); ?>"><i class="fa fa-plus"></i></a> -->
<!-- <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/UpdateTahunAjaran');?>" method="post">
<button style="<?php echo($this->uri->segment(6) == 'Update') ? '' : 'display:none' ;?>" 
		type="submit" name="simpan" value="Simpan" class="btn bg-green pull-right">
		<i class="fa fa-check"></i> Simpan
</button>
</form>
 -->
<br><br>
<div class="card-header">

	<h3 style="margin-left: 410px;" class="card-title">Data Jadwal Pelajaran <?php echo $TahunAjaran; ?></h3>
</div>
<br>


<div class="box-body table-responsive no-padding">
              <table class="table table-bordered">
                <tr>
                  <th colspan="2"><center>Kelas</center></th>
                  <th><center>Senin</center></th>
                  <th><center>Selasa</center></th>
                  <th><center>Rabu</center></th>
                  <th><center>Kamis</center></th>
                  <th><center>Jumat</center></th>
                  <th><center>Tools</center></th>
                </tr>
				
				<?php
				$i = 1;
				if (!empty($JadwalTahunAjaran))
				{
					foreach($JadwalTahunAjaran as $ReadDS)
					{
						
				?>
						<tr>
							<?php
								if ($ReadDS->kelas == '10')
								{
									$sen = ''; $sel = ''; $rab = ''; $kam = ''; $jum = '';
									$Jadwal = explode("|" ,$ReadDS->jadwal_pelajaran);
											
									foreach($Jadwal as $_jadwal)
									{
										$Hari = explode("~" ,$_jadwal);
										
										if($Hari[0] == 'Sen')
										{ $sen = $Hari[1]; }
										else if($Hari[0] == 'Sel')
										{ $sel = $Hari[1]; }
										else if($Hari[0] == 'Rab')
										{ $rab = $Hari[1]; }
										else if($Hari[0] == 'Kam')
										{ $kam = $Hari[1]; }
										else if($Hari[0] == 'Jum')
										{ $jum = $Hari[1]; }
									}
							?>
									<td><span class="badge bg-blue"><?php echo $ReadDS->kelas;?></span></td>
									<td><span class="badge bg-blue"><?php echo $ReadDS->jurusan.' '.$ReadDS->sub_kelas;?></span></td>
									<td>
										<?php 
											$Senin = explode("-" ,$sen);
											foreach($Senin as $_senin)
											{
												$mapel = explode("#" ,$_senin);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-blue"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-blue"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td style="<?php echo($this->uri->segment(6) == 'Update') ? '' : 'display:none;' ;?>">
									<center>
										<input type="text" name="jadwal_pelajaran" 
											   style="text-align:center; width:40px; height:30px;" 
											   value="<?php echo $mapel[1]; ?>">
									</center>
								</td>
									<td>
										<?php 
											$Selasa = explode("-" ,$sel);
											foreach($Selasa as $_selasa)
											{
												$mapel = explode("#" ,$_selasa);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-blue"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-blue"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td style="<?php echo($this->uri->segment(6) == 'Update') ? '' : 'display:none;' ;?>">
									<center>
										<input type="text" name="jadwal_pelajaran<?= $i ?>" 
											   style="text-align:center; width:40px; height:30px;" 
											   value="<?php echo $mapel[1]; ?>">
									</center>
								</td>
									<td>
										<?php 
											$Rabu = explode("-" ,$rab);
											foreach($Rabu as $_rabu)
											{
												$mapel = explode("#" ,$_rabu);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-blue"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-blue"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td style="<?php echo($this->uri->segment(6) == 'Update') ? '' : 'display:none;' ;?>">
									<center>
										<input type="text" name="jadwal_pelajaran" 
											   style="text-align:center; width:40px; height:30px;" 
											   value="<?php echo $mapel[1]; ?>">
									</center>
								</td>
									<td>
										<?php 
											$Kamis = explode("-" ,$kam);
											foreach($Kamis as $_kamis)
											{
												$mapel = explode("#" ,$_kamis);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-blue"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-blue"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td style="<?php echo($this->uri->segment(6) == 'Update') ? '' : 'display:none;' ;?>">
									<center>
										<input type="text" name="jadwal_pelajaran" 
											   style="text-align:center; width:40px; height:30px;" 
											   value="<?php echo $mapel[1]; ?>">
									</center>
								</td>
									<td>
										<?php 
											$Jumat = explode("-" ,$jum);
											foreach($Jumat as $_jumat)
											{
												$mapel = explode("#" ,$_jumat);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-blue"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-blue"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td style="<?php echo($this->uri->segment(6) == 'Update') ? '' : 'display:none;' ;?>">
									<center>
										<input type="text" name="jadwal_pelajaran" 
											   style="text-align:center; width:40px; height:30px;" 
											   value="<?php echo $mapel[1]; ?>">
											   <input type="text" name="jadwal_pelajaran" 
											   style="text-align:center; width:40px; height:30px;" 
											   value="<?php echo $mapel[2]; ?>">
									</center>
								</td>
									<td>
<a  class="btn bg-primary" href="<?php echo site_url('Welcome/JadwalMapel/'.$ReadDS->kd.'/View'); ?>"><i class="fa fa-pencil"></i></a>
									<td>
							<?php
								}
							?>
						</tr>
						 <tr>
							<?php
								if ($ReadDS->kelas == '11')
								{
									$sen = ''; $sel = ''; $rab = ''; $kam = ''; $jum = '';
									$Jadwal = explode("|" ,$ReadDS->jadwal_pelajaran);
											
									foreach($Jadwal as $_jadwal)
									{
										$Hari = explode("~" ,$_jadwal);
										
										if($Hari[0] == 'Sen')
										{ $sen = $Hari[1]; }
										else if($Hari[0] == 'Sel')
										{ $sel = $Hari[1]; }
										else if($Hari[0] == 'Rab')
										{ $rab = $Hari[1]; }
										else if($Hari[0] == 'Kam')
										{ $kam = $Hari[1]; }
										else if($Hari[0] == 'Jum')
										{ $jum = $Hari[1]; }
									}
							?>
									<td><span class="badge bg-green"><?php echo $ReadDS->kelas;?></span></td>
									<td><span class="badge bg-green"><?php echo $ReadDS->jurusan.' '.$ReadDS->sub_kelas;?></span></td>
									<td>
										<?php 
											$Senin = explode("-" ,$sen);
											foreach($Senin as $_senin)
											{
												$mapel = explode("#" ,$_senin);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-green"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-green"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td>
										<?php 
											$Selasa = explode("-" ,$sel);
											foreach($Selasa as $_selasa)
											{
												$mapel = explode("#" ,$_selasa);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-green"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-green"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td>
										<?php 
											$Rabu = explode("-" ,$rab);
											foreach($Rabu as $_rabu)
											{
												$mapel = explode("#" ,$_rabu);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-green"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-green"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td>
										<?php 
											$Kamis = explode("-" ,$kam);
											foreach($Kamis as $_kamis)
											{
												$mapel = explode("#" ,$_kamis);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-green"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-green"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td>
										<?php 
											$Jumat = explode("-" ,$jum);
											foreach($Jumat as $_jumat)
											{
												$mapel = explode("#" ,$_jumat);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-green"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-green"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td>
											<a class="btn bg-primary"  href="<?php echo site_url('Welcome/JadwalMapel/'.$ReadDS->kd.'/View'); ?>"><i class="fa fa-pencil"></i></a>
										<td>
							<?php
								}
							?>
						</tr>
						<tr>
							<?php
								if ($ReadDS->kelas == '12')
								{
									$sen = ''; $sel = ''; $rab = ''; $kam = ''; $jum = '';
									$Jadwal = explode("|" ,$ReadDS->jadwal_pelajaran);
											
									foreach($Jadwal as $_jadwal)
									{
										$Hari = explode("~" ,$_jadwal);
										
										if($Hari[0] == 'Sen')
										{ $sen = $Hari[1]; }
										else if($Hari[0] == 'Sel')
										{ $sel = $Hari[1]; }
										else if($Hari[0] == 'Rab')
										{ $rab = $Hari[1]; }
										else if($Hari[0] == 'Kam')
										{ $kam = $Hari[1]; }
										else if($Hari[0] == 'Jum')
										{ $jum = $Hari[1]; }
									}
							?>
									<td><span class="badge bg-maroon"><?php echo $ReadDS->kelas;?></span></td>
									<td><span class="badge bg-maroon"><?php echo $ReadDS->jurusan.' '.$ReadDS->sub_kelas;?></span></td>
									<td>
										<?php 
											$Senin = explode("-" ,$sen);
											foreach($Senin as $_senin)
											{
												$mapel = explode("#" ,$_senin);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-maroon"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-maroon"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td>
										<?php 
											$Selasa = explode("-" ,$sel);
											foreach($Selasa as $_selasa)
											{
												$mapel = explode("#" ,$_selasa);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-maroon"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-maroon"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td>
										<?php 
											$Rabu = explode("-" ,$rab);
											foreach($Rabu as $_rabu)
											{
												$mapel = explode("#" ,$_rabu);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-maroon"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-maroon"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td>
										<?php 
											$Kamis = explode("-" ,$kam);
											foreach($Kamis as $_kamis)
											{
												$mapel = explode("#" ,$_kamis);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-maroon"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-maroon"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									<td>
										<?php 
											$Jumat = explode("-" ,$jum);
											foreach($Jumat as $_jumat)
											{
												$mapel = explode("#" ,$_jumat);
												
												echo '<span class="badge bg-yellow">'.$mapel[0].'</span> ';
												
												foreach($Mapel as $_mapel)
												{
													if ($_mapel->kd_mapel == $mapel[1])
													{ echo '<span class="badge bg-maroon"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
												}
												
												foreach($Guru as $_guru)
												{
													if ($_guru->nid == $mapel[2])
													{ echo '<span style="margin-left:23px;" class="badge bg-maroon"><i class="fa fa-user"></i> '.$_guru->nama_guru.'</span><br><br>'; }
												}
											}
										?>
									</td>
									
										<td>
											<a class="btn bg-primary"  href="<?php echo site_url('Welcome/JadwalMapel/'.$ReadDS->kd.'/View'); ?>"><i class="fa fa-pencil"></i></a>
										<td>
									
							<?php
								}
							?>

						</tr> 
						

				<?php
					}
				}
				?>
				
              </table>
            </div>


