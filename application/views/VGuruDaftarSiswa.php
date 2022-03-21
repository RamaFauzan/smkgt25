<!-- Add Success Message -->


<a class="btn bg-green" href="<?php echo site_url('Welcome/Dataguru/Profile'); ?>"><i class="fa fa-arrow-left"></i> Kembali</a>

<br><br>

<div class="box-body table-responsive no-padding">
              <table class="table table-bordered dataTables-example">
              	<thead>
                <tr>
                  <th rowspan="2" style="width:60px; padding-top:30px;"><center>No</center></th>
                  <th rowspan="2" style="width:200px; padding-top:30px;">NIS</th>
                  <th rowspan="2" style="padding-top:30px;">Nama</th>
				  <th rowspan="2" style="width:200px; padding-top:30px;">Kelas</th>
				  <th colspan="2" style="width:60px;"><center>Nilai</center></th>
				  <th rowspan="2" style="width:80px; padding-top:30px;"><center>Details</center></th>
                </tr>
				<tr>
                  <th><center>P</center></th>
                  <th><center>K</center></th>
                </tr>
                </thead>
				<tbody>
				<?php
				$i = 1;
				
				$kel = $this->uri->segment(4);
				$jur = $this->uri->segment(5);
				$sub = $this->uri->segment(6);
				$kd  = $this->uri->segment(7);
				
				if (!empty($Siswa))
				{
					foreach($Siswa as $ReadDS)
					{
						if ($ReadDS->kelas_siswa == $kel && $ReadDS->jurusan_siswa == $jur && $ReadDS->sub_kelas_siswa == $sub)
						{
							$sem = '';
							$col = '';
							
							// determining semester from kelas
							if ($ReadDS->kelas_siswa == '10')
							{
								$sem = $Semester;
								$col = 'blue';
							}
							else if ($ReadDS->kelas_siswa == '11')
							{
								$sem = $Semester + 2;
								$col = 'green';
							}
							else if ($ReadDS->kelas_siswa == '12')
							{
								$sem = $Semester + 4;
								$col = 'maroon';
							}
							
							// get all nilai
							$_semester = 'sem_'.$sem;
							$realNilai = null;
							
							// get each nilai
							$allNilai = explode("|" ,$ReadDS->$_semester);
							
							foreach($allNilai as $an)
							{
								
								$nilai = explode("-" ,$an);
								
								if ($nilai[0] == $kd)
								{
									$realNilai = $nilai;
									break;
								}
							}
							
							//echo $ReadDS->$allNilai;
							
				?>
				
							<tr>
								<td><center><?php echo $i; ?></center></td>
								<td><?php echo $ReadDS->nis; ?></td>
								<td><?php echo $ReadDS->nama_siswa; ?></td>
								<td>
									<?php 
										echo '<span class="badge bg-'.$col.'">'.$ReadDS->kelas_siswa.' '.$ReadDS->jurusan_siswa.' '.$ReadDS->sub_kelas_siswa.'</span>'; 
									?>
								</td>
								<td>
									<center>
									<?php
										$ii = 0;
										$tot = 0;
										$n = 0;
										
										if (!empty($realNilai))
										{
											foreach($realNilai as $_nilai)
											{
												if ($ii != 0)
												{
													if ($ii % 2 == 1)
													{
														//echo $_nilai.'<br>';
														$tot += $_nilai;
														$n++;
													}
												}												
												$ii++;
											}
											
											echo round($tot/$n);
										}
										else
										{ echo '0'; }
									?>
									</center>
								</td>
								<td>
									<center>
									<?php
										$ii = 0;
										$tot = 0;
										$n = 0;
										
										if (!empty($realNilai))
										{
											foreach($realNilai as $_nilai)
											{
												if ($ii != 0)
												{
													if ($ii % 2 == 0)
													{
														//echo $_nilai.'<br>';
														$tot += $_nilai;
														$n++;
													}
												}		
												$ii++;
											}
											
											echo round($tot/$n);
										}
										else
										{ echo '0'; }
										
										
									?>
									</center>
								</td>

								<td>
									<center>
									<a class="btn bg-aqua" href="<?php echo site_url('Welcome/Dataguru/AddNilai/'.$kd.'/'.$ReadDS->nis.'/'.$sem); ?>"><i class="fa fa-sign-in"></i></a>
									</center>
								</td>
							</tr>
							


				<?php
							$i++;
						}
					}
				}

				?>
				</tbody>
              </table>

            </div>
<br>