<table class="table table-bordered">
                            
                                <tr>
                                  
                                  <th colspan="6" class="bg-blue"><center>Senin</center></th>
                                  <th colspan="6" class="bg-blue"><center>Selasa</center></th>
                                  <th colspan="2" class="bg-blue"><center>3</center></th>
                                  <th colspan="2" class="bg-blue"><center>4</center></th>
                                  <th colspan="2" class="bg-blue"><center>5</center></th>
                                  <th colspan="2" class="bg-blue"><center>6</center></th>
                                </tr>
                                <tr>
                                  <th class="bg-blue"><center>X DKV </center></th>
                                  <th class="bg-blue"><center>X TKJ </center></th>
                                  <th class="bg-blue"><center>XI DKV</center></th>
                                  <th class="bg-blue"><center>XI TKJ</center></th>
                                  <th class="bg-blue"><center>XII DKV</center></th>
                                  <th class="bg-blue"><center>XII TKJ</center></th>
                                  <th class="bg-blue"><center>X DKV </center></th>
                                  <th class="bg-blue"><center>X TKJ </center></th>
                                  <th class="bg-blue"><center>XI DKV</center></th>
                                  <th class="bg-blue"><center>XI TKJ</center></th>
                                  <th class="bg-blue"><center>XII DKV</center></th>
                                  <th class="bg-blue"><center>XII TKJ</center></th>
                                </tr>
                          
                            <tr>
                                
                                <td>
                                    <?php
                                    $col = '';
                                        if (!empty($JadwalPelGuru))
                                            {
                                                $sen = ''; $sel = ''; $rab = ''; $kam = ''; $jum = ''; $sab = '';
                                            
                                                foreach($JadwalPelGuru as $ReadDS)
                                                {   
                                                    $day =  $this->MSudi->replaceDay2(date("D"));
                                                    $kdmapel = $ReadDS->stat_absen;
                                                    $Hari = $ReadDS->id_hari;
                                                    $kelas= $ReadDS->kelas;
                                                    $jurusan = $ReadDS->jurusan;
                                                    if($kelas =='10' && $jurusan == 'RPL'){
                                                    if($Hari == '01')
                                        {
                                                if($day == $kdmapel)
                                                {
                                                    $col = 'primary';

                                                } 
                                                if($day != $kdmapel)
                                                {

                                                    $col = 'danger';
                                                }

                                    
                                        
                              
                                            echo '<span class="badge badge-'.$col.'">'.$ReadDS->nama_mapel.'</span><br>
                                            <span>'.$ReadDS->kelas.''.$ReadDS->jurusan.''.$ReadDS->sub_kelas.'</span>
                                            
                                            ';
                                             echo '<hr>';

                                       
                                        }
                                            

                                       } 

                                    }}
                                    ?>
                                </td>
                                <td>
                                    
                                    <?php
                                        if (!empty($JadwalPelGuru))
                                            {
                                                $sen = ''; $sel = ''; $rab = ''; $kam = ''; $jum = ''; $sab = '';
                                            
                                                foreach($JadwalPelGuru as $ReadDS)
                                                {   

                                                    $kdmapel = $ReadDS->stat_absen;
                                                    $Hari = $ReadDS->id_hari;
                                                    $cek = $ReadDS->nid;
                                                    $kelas= $ReadDS->kelas;
                                                    $jurusan = $ReadDS->jurusan;
                                                    if($kelas =='10' && $jurusan == 'TKJ'){
                                        if($Hari == '01')
                                        {
                                            
                                             if($day == $kdmapel)
                                                {
                                                    $col = 'primary';

                                                } 
                                                if($day != $kdmapel)
                                                {

                                                    $col = 'danger';
                                                }

                                            echo '<span class="badge badge-'.$col.'">'.$ReadDS->nama_mapel.'</span><br>
                                            <span>'.$ReadDS->kelas.''.$ReadDS->jurusan.''.$ReadDS->sub_kelas.'</span>

                                            ';
                                            echo '<hr>';

                                        }
                                    }
                                    }}
                                    ?>

                                </td>
                                <td>
                                    
                                     <?php
                                        if (!empty($JadwalPelGuru))
                                            {
                                                $sen = ''; $sel = ''; $rab = ''; $kam = ''; $jum = ''; $sab = '';
                                            
                                                foreach($JadwalPelGuru as $ReadDS)
                                                {   
                                                $kdmapel = $ReadDS->stat_absen;
                                                $Hari = $ReadDS->id_hari;
                                                $kelas= $ReadDS->kelas;
                                                    $jurusan = $ReadDS->jurusan;
                                                    if($kelas =='11' && $jurusan == 'RPL'){
                                        if($Hari == '01')
                                        {

                                            if($day == $kdmapel)
                                                {
                                                    $col = 'primary';

                                                } 
                                                if($day != $kdmapel)
                                                {

                                                    $col = 'danger';
                                                }

                                            echo '<span class="badge badge-'.$col.'">'.$ReadDS->nama_mapel.'</span><br>
                                            <span>'.$ReadDS->kelas.''.$ReadDS->jurusan.''.$ReadDS->sub_kelas.'</span>

                                            ';
                                            echo '<hr>';

                                        }
                                    }

                                    }}
                                    ?>

                                </td>
                                <td>
                                    
                                     <?php
                                        if (!empty($JadwalPelGuru))
                                            {
                                                $sen = ''; $sel = ''; $rab = ''; $kam = ''; $jum = ''; $sab = '';
                                            
                                                foreach($JadwalPelGuru as $ReadDS)
                                                {   
                                                $kdmapel = $ReadDS->stat_absen;
                                                $Hari = $ReadDS->id_hari;
                                                $kelas= $ReadDS->kelas;
                                                $jurusan = $ReadDS->jurusan;
                                                if($kelas =='11' && $jurusan == 'TKJ'){
                                        if($Hari == '01')
                                        {

                                            if($day == $kdmapel)
                                                {
                                                    $col = 'primary';

                                                } 
                                                if($day != $kdmapel)
                                                {

                                                    $col = 'danger';
                                                }

                                            echo '<span class="badge badge-'.$col.'">'.$ReadDS->nama_mapel.'</span><br>
                                            <span>'.$ReadDS->kelas.''.$ReadDS->jurusan.''.$ReadDS->sub_kelas.'</span>

                                            ';
                                            echo '<hr>';

                                        }
                                    }
                                    }}
                                    ?>

                                </td>
                                <td>
                                    
                                     <?php
                                        if (!empty($JadwalPelGuru))
                                            {
                                                $sen = ''; $sel = ''; $rab = ''; $kam = ''; $jum = ''; $sab = '';
                                            
                                                foreach($JadwalPelGuru as $ReadDS)
                                                {   
                                    $kdmapel = $ReadDS->stat_absen;
                                    $Hari = $ReadDS->id_hari;
                                    $kelas= $ReadDS->kelas;
                                    $jurusan = $ReadDS->jurusan;
                                    if($kelas =='12' && $jurusan == 'RPL'){
                                        if($Hari == '01')
                                        {

                                            if($day == $kdmapel)
                                                {
                                                    $col = 'primary';

                                                } 
                                                if($day != $kdmapel)
                                                {

                                                    $col = 'danger';
                                                }

                                            echo '<span class="badge badge-'.$col.'">'.$ReadDS->nama_mapel.'</span><br>
                                            <span>'.$ReadDS->kelas.''.$ReadDS->jurusan.''.$ReadDS->sub_kelas.'</span>

                                            ';
                                            echo '<hr>';

                                        }
                                    }
                                    }}
                                    ?>

                                </td>
                                <td>
                                    
                                     <?php
                                        if (!empty($JadwalPelGuru))
                                            {
                                                $sen = ''; $sel = ''; $rab = ''; $kam = ''; $jum = ''; $sab = '';
                                            
                                                foreach($JadwalPelGuru as $ReadDS)
                                                {   
                                    $kdmapel = $ReadDS->stat_absen;
                                    $Hari = $ReadDS->id_hari;
                                    $kelas= $ReadDS->kelas;
                                    $jurusan = $ReadDS->jurusan;
                                    if($kelas =='12' && $jurusan == 'TKJ'){
                                        if($Hari == '01')
                                        {

                                            if($day == $kdmapel)
                                                {
                                                    $col = 'primary';

                                                } 
                                                if($day != $kdmapel)
                                                {

                                                    $col = 'danger';
                                                }
                                            echo '<span class="badge badge-'.$col.'">'.$ReadDS->nama_mapel.'</span><br>
                                            <span>'.$ReadDS->kelas.''.$ReadDS->jurusan.''.$ReadDS->sub_kelas.'</span>

                                            ';
                                            echo '<hr>';

                                        }
                                    }
                                    }}
                                    ?>

                                </td>
                            </tr>
                       
                            </table>