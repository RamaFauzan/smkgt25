            <div class="ibox-content"> 
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <div class="card">
            <div>
              <div class="card-header">
             
                <h3 style="margin-left: 450px;" class="card-title">Data Nilai</h3>
              </div>
              </div>
            </div>
            <br>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        
                        <th>NAMA SISWA</th>
                        <th>KELAS SISWA</th>                        
                        <th>NILAI SISWA</th>
                         <th>MATA PELAJARAN</th>
                        
                        
                       
                    </tr>
                    </thead>
                     

  
                    <tbody>
                 
                  <?php
                  $i =1;
                  $kd='P1';
                  $kd2 ='P2';
                  $kd3 ='P3';
                  $kd4 ='P4';
                    if (!empty($Siswa))
        {
          foreach($Siswa as $ReadDS)
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
                $nilai2 = explode("-" ,$an);
                $nilai3 = explode("-" ,$an);
                $nilai4 = explode("-" ,$an);
                
                if ($nilai[0] == $kd)
                {
                  $realNilai = $nilai;
                 
                }
                elseif ($nilai2[0] == $kd2)
                {
                  $realNilai2 = $nilai2;
                  
                }
                 elseif ($nilai3[0] == $kd3)
                {
                  $realNilai3 = $nilai3;
                  
                }
                 elseif ($nilai4[0] == $kd4)
                {
                  $realNilai4 = $nilai4;
                  
                }
                else{
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
                        $abc = explode("|", $_nilai);
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

                  <center>
                  <?php
                    $ii = 0;
                    $tot = 0;
                    $n = 0;
                    
                    if (!empty($realNilai2))
                    {
                      foreach($realNilai2 as $_nilai)
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

                   <center>
                  <?php
                    $ii = 0;
                    $tot = 0;
                    $n = 0;
                    
                    if (!empty($realNilai3))
                    {
                      foreach($realNilai3 as $_nilai)
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
                  <center>
                  <?php
                    $ii = 0;
                    $tot = 0;
                    $n = 0;
                    
                    if (!empty($realNilai4))
                    {
                      foreach($realNilai4 as $_nilai)
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
                <!-- <td>
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

                  <center>
                  <?php
                    $ii = 0;
                    $tot = 0;
                    $n = 0;
                    
                    if (!empty($realNilai2))
                    {
                      foreach($realNilai2 as $_nilai)
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
                </td> -->

               <!--  <td>
                  <center>
                  <a class="btn bg-aqua" href="<?php echo site_url('Welcome/Dataguru/AddNilai/'.$kd.'/'.$ReadDS->nis.'/'.$sem); ?>"><i class="fa fa-sign-in"></i></a>
                  </center>
                </td> -->

                <td>
                <?php 
                  foreach($Mapel as $_mapel)
                        {

                          if ($_mapel->kd_mapel == 'P1')
                          { echo '<span style="" class="badge badge-primary"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }
                          if ($_mapel->kd_mapel == 'P2')
                          { echo '<span style="" class="badge badge-primary"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }
                          if ($_mapel->kd_mapel == 'P3')
                          { echo '<span style="" class="badge badge-primary"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
                        if ($_mapel->kd_mapel == 'P4')
                          { echo '<span style="" class="badge badge-primary"><i class="fa fa-star"></i> '.$_mapel->nama_mapel.'</span><br>'; }  
                        }
                        ?>
                </td>
              
              </tr>
              


        <?php
              $i++;
            
          }
        }

        ?>
                   </tbody>
                    </table>
                    </div>
                    </div>


            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

