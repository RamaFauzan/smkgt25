<!-- Add Success Message -->


<?php
	$kd  = $this->uri->segment(4);
	$nis = $this->uri->segment(5);
	$sem = '';
					
	$KelasAjar = explode("," ,$Guru->kelas_guru);
					
	// loop kelas_ajar guru
	foreach($KelasAjar as $kel)
	{
		$detail = explode("-" ,$kel);
		
		if ($detail[0] == $kd && $detail[1] == '10')
		{ $sem = $Semester; }
		else if ($detail[0] == $kd && $detail[1] == '11')
		{ $sem = $Semester + 2; }
		else if ($detail[0] == $kd && $detail[1] == '12')
		{ $sem = $Semester + 4; }
	}
	
	// get nilai with $kd
	$_semester = 'sem_'.$this->uri->segment(6);
	
	//echo $_semester;
?>

<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/AddNilaiGuru/'.$kd.'/'.$nis.'/'.$this->uri->segment(6)); ?>" method="post">

<a class="btn bg-green" href="<?php echo site_url('Welcome/Dataguru/Profile'); ?>"><i class="fa fa-arrow-left"></i> Kembali</a>

<a style="<?php echo($this->uri->segment(7) == 'Update') ? 'display:none;' : '' ;?>" 
   class="btn bg-orange pull-right" 
   href="<?php echo site_url('Welcome/Dataguru/AddNilai/'.$kd.'/'.$nis.'/'.$this->uri->segment(6).'/Update'); ?>"><i class="fa fa-pencil"></i> Edit
</a>
<button style="<?php echo($this->uri->segment(7) == 'Update') ? '' : 'display:none' ;?>" 
		type="submit" name="simpan" value="Simpan" class="btn bg-green pull-right">
		<i class="fa fa-check"></i> Simpan
</button>

<br><br>

<div class="box-body table-responsive no-padding">
              <table class="table table-bordered">
                <tr>
                  <th style="width:50px;"><center>No</center></th>
                  <th>Pengetahuan</th>
                  <th style="width:65px;"><center>Nilai</center></th>
                  <th style="width:65px;"><center>KKM</center></th>
				  <th>Keterampilan</th>
				  <th style="width:65px;"><center>Nilai</center></th>
				  <th style="width:65px;"><center>KKM</center></th>
                </tr>
				
				<?php
					$allNilai = explode("|" ,$Siswa->$_semester);
					$nilai = null;
					
					foreach($allNilai as $an)
					{
						$_nilai = explode("-" ,$an);
						
						if ($_nilai[0] == $kd)
						{ $nilai = $_nilai; break; }
					}
					
					// loop mapel kompetensi
					$i = 1;
					$ii = 0;
					foreach($MapelKompetensi as $kompetensi)
					{
						if ($sem == $kompetensi->semester)
						{
				?>
							<tr>
								<td><center><?php echo $i; ?></center></td>
								<td><?php echo $kompetensi->p_kompetensi; ?></td>
								<td style="<?php echo($this->uri->segment(7) == 'Update') ? 'display:none;' : '' ;?>">
									<center>
										<?php										
											$ii++; 
											$col = '';
											
											if ($nilai[$ii] > $kompetensi->p_kkm_kompetensi)
											{ $col = 'green'; }
											else
											{ $col = 'red'; }
											
											echo '<span class="badge bg-'.$col.'">'.$nilai[$ii].'</span>'; 
										?>
									</center>
								</td>
								<td style="<?php echo($this->uri->segment(7) == 'Update') ? '' : 'display:none;' ;?>">
									<center>
										<input type="text" name="nilai_<?php echo $ii;?>" 
											   style="text-align:center; width:40px; height:30px;" 
											   value="<?php echo $nilai[$ii]; ?>">
									</center>
								</td>
								<td>
									<center>
										<span class="badge bg-blue"><?php echo $kompetensi->p_kkm_kompetensi;?></span>
									</center>
								</td>
								<td><?php echo $kompetensi->k_kompetensi; ?></td>
								<td style="<?php echo($this->uri->segment(7) == 'Update') ? 'display:none;' : '' ;?>">
									<center>
										<?php										
											$ii++; 
											$col = '';
											
											if ($nilai[$ii] > $kompetensi->k_kkm_kompetensi)
											{ $col = 'green'; }
											else
											{ $col = 'red'; }
											
											echo '<span class="badge bg-'.$col.'">'.$nilai[$ii].'</span>'; 
										?>
									</center>
								</td>
								<td style="<?php echo($this->uri->segment(7) == 'Update') ? '' : 'display:none' ;?>">
									<center>
										<input type="text" name="nilai_<?php echo $ii;?>" 
											   style="text-align:center; width:40px; height:30px;" 
											   value="<?php echo $nilai[$ii]; ?>">
									</center>
								</td>
								<td>
									<center>
										<span class="badge bg-blue"><?php echo $kompetensi->k_kkm_kompetensi;?></span>
									</center>
								</td>
							</tr>
				<?php
							$i++;
						}
					}
				?>
                
              </table>
			  <br>
            </div>
