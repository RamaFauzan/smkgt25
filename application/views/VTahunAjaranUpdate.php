
<div class="alert alert-warning alert-dismissible" style="<?php echo ($successMsg == 'Update_Fail') ? '' : 'display:none' ;?>">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
</div>

<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/UpdateTahunAjaran/'); ?>" method="post">

              <div class="box-body">
				
				<input type="hidden" name="kd" class="form-control" value="<?php echo $detail['kd']; ?>">
                  
				<div class="form-group">
                  <label class="col-sm-2 control-label">Tahun Ajaran</label>
						
                  <div class="col-sm-10">
					<input type="text" name="thn_ajaran" class="form-control" value="<?php echo $detail['thn_ajaran']; ?>">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Jurusan</label>
						
                  <div class="col-sm-10">
					<input type="text" name="jurusan" class="form-control" value="<?php echo $detail['jurusan']; ?>">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Kelas</label>
						
                  <div class="col-sm-10">
					<input type="text" name="kelas" class="form-control" value="<?php echo $detail['kelas']; ?>">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Sub Kelas</label>
						
                  <div class="col-sm-10">
					<input type="text" name="sub_kelas" class="form-control" value="<?php echo $detail['sub_kelas']; ?>">
                  </div>
                </div>

                  <div class="form-group">
                  <label class="col-sm-2 control-label">Jadwal Pelajaran</label>
            <div class="col-sm-10">
          <input type="text" name="jadwal_pelajaran" class="form-control" value="<?php echo $detail['jadwal_pelajaran']; ?>">
                  </div>
                </div>
                  
                
			         <table class="table table-bordered">
                            <tr>
                              <th>Senin</th>
                              <th>Selasa</th>
                              <th>Rabu</th>
                              <th>Kamis</th>
                              <th>Jumat</th>
                            </tr>
                            <tr>
                                <?php
                                if(!empty($JadwalPelajaran)){
                                  $i=0;
                                    foreach($JadwalPelajaran as $_jadwal)
                                    {
                                         
                                            $Hari = explode("|" ,$_jadwal->jadwal_pelajaran);
                                            
                                            foreach($Hari as $_hari)
                                            {
                                               echo '<td>';
                                                $map = explode("~" ,$_hari);
                                                $detail = explode("-" ,$map[1]);
                                                
                                                foreach($detail as $_detail)
                                                {

                                                    $m = explode("#" ,$_detail);
                                                    
                                                    foreach($Mapel as $_mapel)
                                                    { 
                                                        if ($_mapel->kd_mapel == $m[1])
                                                        { echo '<div class="col-sm-10">
                                                          <input type="text" name="" class="form-control" value="'.$_mapel->nama_mapel.'"; ?>
                                                                  </div>
                                                                </div><br>'; 
                                                        }
                                                    }
                                                    foreach($Guru as $_guru)
                                                    {
                                                        if ($_guru->nid == $m[2])
                                                        { echo '<span class="badge bg-green"><i class="icon fa fa-circle"></i> '.$_guru->nama_guru.'</span><br>'; }

                                                    }
                                                    echo '<hr>';
                                                    
                                                }
                                                    echo '</td>';
                                                 
                                            } 

                                        }
                                    }
                                
                            ?>
                            </tr>
                            </table>
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="simpan" value="Simpan" class="btn bg-green"><i class="fa fa-check"></i> Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>



