 <div class="flash-staf" data-flashstaf="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>
<div class="row">

	<div class="col-lg-4">
                        <div class="widget-head-color-box navy-bg p-lg text-center">
                            <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                               
                               <span class="block m-t-xs font-bold"><?php echo $this->session->userdata('ses_nama');?></span>

                            </h2>
                                <small>Founder of Groupeq</small>
                            </div>
                            <img src="<?= base_url('temp3/img/a4.jpg'); ?>" class="rounded-circle circle-border m-b-md" alt="profile">
                            <div>
                                <span></span> |
                                <span>STIKOM BINANIAGA</span> |
                                <span></span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading">  <!-- <?php echo $userData->nama_user; ?> --> <h4>
                            <p>Berburu rusa ke tengah hutan<br>Rusa ditinggal dimakan macan<br>Salam kenal teman-teman<br>Assalamualikum aku ucapkan</p>
                            <div class="text-right">
                                <a href=""  class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                <a href="" class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                            </div>
                        </div>
    </div>
    <?php if($akses == '1'){ ?>
        <?php $kd = '1'.$this->uri->segment(2); ?>

     <div class="tabs-container col-lg-8">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#tab-1">Tahun Ajaran</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-2">Update Jadwal Pelajran</a></li>
                           

                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="widget lazur-bg p-lg-2 text-center">
                                        <form action="<?= site_url('Welcome/UpdateTA'); ?>" method="post">
                                        <div class="m-b-md">
                                            <i class="fa fa-bell fa-4x" style="margin-bottom: 15px;"></i>
                                                <br><small style="margin-bottom: 80px;">Update Tahun Ajaran.</small><br>
                                                <i class="fa fa-pencil"></i> 
                                                <a href="<?php echo site_url('Welcome/Update'); ?>">Edit</a>
                                                <p style="margin: 20px 60px -20px -480px;">Tahun Ajaran </p> 
                                                <input style=" <?php echo($this->uri->segment(2) == 'Update') ? '' : 'display:none;' ;?>" type="hidden" name="kd">
                                           <span class="badge badge-danger" style="<?php echo($this->uri->segment(2) == 'Update') ? 'display:none;' : '' ;?>"><?php echo $detail['thn_ajaran'];?></span>

                                          <span class="badge bg-primary" style="<?php echo($this->uri->segment(2) == 'Update') ? '' : 'display:none;' ;?>"><input type="text" name="thn_ajaran" value="<?php echo $detail['thn_ajaran'];?>"></span>
                                                
                                                <p style="margin: 20px 60px -20px -500px;">Semester </p>

                                                <span style="margin: 0px 48px 0px 0px; <?php echo($this->uri->segment(2) == 'Update') ? 'display:none;' : '' ;?> " class="badge badge-danger" name="semester"><?= $detail['semester'];?>
                                                
                                                </span>

                                                <span class="badge bg-primary" style="<?php echo($this->uri->segment(2) == 'Update') ? '' : 'display:none;' ;?>"><input type="text" name="semester" value="<?php echo $detail['semester'];?>"></span>
                                            
                                        </div>
                                        <button  style="margin: -125px -300px -90px 0px; <?php echo($this->uri->segment(2) == 'Update') ? '' : 'display:none' ;?>" class="btn btn-warning dim btn-large-dim" type="submit"><i class="fa fa-pencil"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    


                        
                            <div role="tabpanel" id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    vbb
                                </div>
                            </div>
                        </div>

    </div>
<br>

    <div class="col-lg-2">
                    <div class="widget lazur-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-user-o fa-4x"></i>
                            <h1 class="m-xs"><?php echo $this->MSudi->jumlahsiswa(); ?></h1>
                            <h3 class="font-bold no-margins">
                                Siswa
                            </h3>
                           <!--  <small>power</small> -->
                        </div>
                    </div>
    </div>

    <div class="col-lg-2">
                    <div class="widget lazur-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-mortar-board fa-4x"></i>
                            <h1 class="m-xs"><?php echo $this->MSudi->jumlahguru(); ?></h1>
                            <h3 class="font-bold no-margins">
                                Guru
                            </h3>
                           <!--  <small>power</small> -->
                        </div>
                    </div>
    </div>

    <div class="col-lg-2">
                    <div class="widget red-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-copy fa-4x"></i>
                            <h1 class="m-xs"><?php echo $this->MSudi->jumlahberkas(); ?></h1>
                            <h3 class="font-bold no-margins">
                                Berkas Siswa
                            </h3>
                            <small>Belum Lengkap</small>
                        </div>
                    </div>
    </div>

    <div class="col-lg-2">
                    <div class="widget red-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-copy fa-4x"></i>
                            <h1 class="m-xs"><?php echo $this->MSudi->jumlahberkas2(); ?></h1>
                            <h3 class="font-bold no-margins">
                                Berkas Siswa
                            </h3>
                            <small>Belum Lengkap</small>
                        </div>
                    </div>
    </div>

   
	<?php } ?>

    <?php if($akses == '3'){ ?>


                <div class="col-lg-8">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#tab-1">Jadwal Pelajaran</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-2">Pengumuman</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-3">Nilai</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-4">Absen</a></li>

                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" id="tab-1" class="tab-pane active">
                                <div class="panel-body">

                                    

                        <table class="table table-bordered">
                            <tr>
                              <th>Senin</th>
                              <th>Selasa</th>
                              <th>Rabu</th>
                              <th>Kamis</th>
                              <th>Jumat</th>
                              <th>Sabtu</th>
                            </tr>
                            <tr>
                                <td>
                                <?php
                                if(!empty($JadwalSiswa)){
                                    foreach($JadwalSiswa as $_jadwal)
                                    {


                                        $Hari = $_jadwal->id_hari;

                                         if ($Siswa->kelas_siswa == $_jadwal->kelas &&
                                            $Siswa->jurusan_siswa == $_jadwal->jurusan &&
                                            $Siswa->sub_kelas_siswa == $_jadwal->sub_kelas)
                                        {

                                            ?>

                                            <?php
                                          if ($Hari == '01')
                                        {
                                            
                                              
                                                echo '<span class="badge bg-orange"><i class="icon fa fa-star"></i> '.$_jadwal->nama_mapel.'</span><br>
                                                    <i>'.$_jadwal->nama_guru.'</i>


                                                ';
                                             echo '<hr>';
                                            
                                                    
                                                }
                                                    
                                                 
                                            } 

                                        }
                                    }
                                
                            ?>
                            </td>
                             <td>
                                <?php
                                if(!empty($JadwalSiswa)){
                                    foreach($JadwalSiswa as $_jadwal)
                                    {


                                        $Hari = $_jadwal->id_hari;

                                         if ($Siswa->kelas_siswa == $_jadwal->kelas &&
                                            $Siswa->jurusan_siswa == $_jadwal->jurusan &&
                                            $Siswa->sub_kelas_siswa == $_jadwal->sub_kelas)
                                        {

                                          if($Hari == '02')
                                        {
                                            
                                              
                                                echo '<span class="badge bg-orange"><i class="icon fa fa-star"></i> '.$_jadwal->nama_mapel.'</span><br>
                                                    <i>'.$_jadwal->nama_guru.'</i>


                                                ';
                                             echo '<hr>';
                                            
                                                    
                                                }
                                                    
                                                 
                                            } 

                                        }
                                    }
                                    
                                
                            ?>
                            </td>
                             <td>
                                <?php
                                if(!empty($JadwalSiswa)){
                                    foreach($JadwalSiswa as $_jadwal)
                                    {

                                        $Hari = $_jadwal->id_hari;
                                         if ($Siswa->kelas_siswa == $_jadwal->kelas &&
                                            $Siswa->jurusan_siswa == $_jadwal->jurusan &&
                                            $Siswa->sub_kelas_siswa == $_jadwal->sub_kelas)
                                        {
                                          if ($Hari == '03')
                                        {
                                            
                                              
                                                echo '<span class="badge bg-orange"><i class="icon fa fa-star"></i> '.$_jadwal->nama_mapel.'</span><br>
                                                    <i>'.$_jadwal->nama_guru.'</i>


                                                ';
                                             echo '<hr>';
                                            
                                                    
                                                }
                                                    
                                                 
                                            } 

                                        }
                                    }
                                    
                                
                            ?>
                            </td>
                             <td>
                                <?php
                                if(!empty($JadwalSiswa)){
                                    foreach($JadwalSiswa as $_jadwal)
                                    {

                                        $Hari = $_jadwal->id_hari;
                                        if ($Siswa->kelas_siswa == $_jadwal->kelas &&
                                            $Siswa->jurusan_siswa == $_jadwal->jurusan &&
                                            $Siswa->sub_kelas_siswa == $_jadwal->sub_kelas)
                                        {
                                          if ($Hari == '04')
                                        {
                                            
                                              
                                                echo '<span class="badge bg-orange"><i class="icon fa fa-star"></i> '.$_jadwal->nama_mapel.'</span><br>
                                                    <i>'.$_jadwal->nama_guru.'</i>


                                                ';
                                             echo '<hr>';
                                            
                                                    
                                                }
                                                    
                                                 
                                            } 

                                        }
                                    }
                                    
                                
                            ?>
                            </td>
                             <td>
                                <?php
                                if(!empty($JadwalSiswa)){
                                    foreach($JadwalSiswa as $_jadwal)
                                    {

                                        $Hari = $_jadwal->id_hari;
                                        if ($Siswa->kelas_siswa == $_jadwal->kelas &&
                                            $Siswa->jurusan_siswa == $_jadwal->jurusan &&
                                            $Siswa->sub_kelas_siswa == $_jadwal->sub_kelas)
                                        {
                                          if ($Hari == '05')
                                        {
                                            
                                              
                                                echo '<span class="badge bg-orange"><i class="icon fa fa-star"></i> '.$_jadwal->nama_mapel.'</span><br>
                                                    <i>'.$_jadwal->nama_guru.'</i>


                                                ';
                                             echo '<hr>';
                                            
                                                    
                                                }
                                                    
                                                 
                                            } 

                                        }
                                    }
                                    
                                
                            ?>
                            </td>
                             <td>
                                <?php
                                if(!empty($JadwalSiswa)){
                                    foreach($JadwalSiswa as $_jadwal)
                                    {

                                        $Hari = $_jadwal->id_hari;
                                        if ($Siswa->kelas_siswa == $_jadwal->kelas &&
                                            $Siswa->jurusan_siswa == $_jadwal->jurusan &&
                                            $Siswa->sub_kelas_siswa == $_jadwal->sub_kelas)
                                        {
                                          if ($Hari == '06')
                                        {
                                            
                                              
                                                echo '<span class="badge bg-orange"><i class="icon fa fa-star"></i> '.$_jadwal->nama_mapel.'</span><br>
                                                    <i>'.$_jadwal->nama_guru.'</i>


                                                ';
                                             echo '<hr>';
                                            
                                                    
                                                }
                                                    
                                                 
                                            } 

                                        }
                                    }
                                    
                                
                            ?>
                            </td>
                            </tr>
                            </table>
                                </div>
                            </div>
                            <div role="tabpanel" id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    
                                          <?php if ($akses == '3'): ?>

                                        <?php 

                                            if(!empty($PengumumanSiswa)){
                                                foreach($PengumumanSiswa as $read){
                                                    $stat = $read->status;
                                                    if ($stat == '1'){
                                        ?>


                                            <p><i class="badge badge-danger" ><?= $read->judul_pengumuman; ?></i></p>
                                            <p><?= $read->isi_pengumuman; ?></p>

                                        <?php
                                                    }
                                                }
                                            }

                                        ?>

                                    <?php endif; ?>
                                </div>
                            </div>


                               <div role="tabpanel" id="tab-3" class="tab-pane">
                                <div class="panel-body">

                                    <div class="table-responsive">
                                    <table class="table table-bordered">
                            
                                <tr>
                                  <th rowspan="2" style="width:250px; padding-top:15px;" class="bg-blue"><center><h4>Mata Pelajaran</h4></center></th>
                                  <th colspan="2" class="bg-blue"><center>1</center></th>
                                  <th colspan="2" class="bg-blue"><center>2</center></th>
                                  <th colspan="2" class="bg-blue"><center>3</center></th>
                                  <th colspan="2" class="bg-blue"><center>4</center></th>
                                  <th colspan="2" class="bg-blue"><center>5</center></th>
                                  <th colspan="2" class="bg-blue"><center>6</center></th>
                                </tr>
                                <tr>
                                  <th class="bg-blue"><center>P</center></th>
                                  <th class="bg-blue"><center>K</center></th>
                                  <th class="bg-blue"><center>P</center></th>
                                  <th class="bg-blue"><center>K</center></th>
                                  <th class="bg-blue"><center>P</center></th>
                                  <th class="bg-blue"><center>K</center></th>
                                  <th class="bg-blue"><center>P</center></th>
                                  <th class="bg-blue"><center>K</center></th>
                                  <th class="bg-blue"><center>P</center></th>
                                  <th class="bg-blue"><center>K</center></th>
                                  <th class="bg-blue"><center>P</center></th>
                                  <th class="bg-blue"><center>K</center></th>
                                </tr>
                              
                                <?php
                                    $all_nilai = '';
                                    
                                    // loop semester
                                    for($i = 1; $i <= $num; $i++)
                                    {
                                        // loop nilai each mapel
                                        foreach($Nilai[$i] as $_nilai)
                                        {
                                            // set data as an array
                                            $subNilai = explode("-" ,$_nilai);
                                            
                                            $n_p = 0;
                                            $n_k = 0;
                                            
                                            $total_p = 0;
                                            $total_k = 0;
                                            
                                            $ii = 0;
                                            
                                            // loop it ...
                                            foreach($subNilai as $_sub)
                                            {
                                                if ($ii != 0)
                                                {
                                                    if ($ii % 2 == 1)
                                                    {
                                                        $total_p += $_sub;
                                                        $n_p++;
                                                    }
                                                    else if ($ii % 2 == 0)
                                                    {
                                                        $total_k += $_sub;
                                                        $n_k++;
                                                    }
                                                    
                                                }
                                                
                                                $ii++;
                                            }
                                            
                                            //echo $subNilai[0].'-'.$i.' P-'.round($total_p/$n_p).' K-'.round($total_k/$n_k).' ';
                                            
                                            $all_nilai = $all_nilai.$subNilai[0].'-'.$i.'-'.round($total_p/$n_p).'-'.round($total_k/$n_k).' ';
                                        }
                                    }
                                    
                                    //echo $all_nilai;
                                    
                                    $nil = explode(" " ,$all_nilai);
                                ?>
                                 
                                <?php 
                            
                               
                                    
                                    foreach($Mapel as $_mapel){
                                       $stat = $_mapel->status;
                                      
                                         $a1 = ''; $a2 = '';
                                        $b1 = ''; $b2 = '';
                                        $c1 = ''; $c2 = '';
                                        $d1 = ''; $d2 = '';
                                        $e1 = ''; $e2 = '';
                                        $f1 = ''; $f2 = '';
                                    
                                     
                                       
                                       
                                        foreach($nil as $_nil)
                                        {
                                            $_detail = null;
                                            $_detail = explode("-", $_nil);
                                                
                                            if ($_detail[0] == $_mapel->kd_mapel)
                                            {
                                                if ($_detail[1] == 1)
                                                {
                                                    $a1 = $_detail[2];
                                                    $a2 = $_detail[3];
                                                }
                                                else if ($_detail[1] == 2)
                                                {
                                                    $b1 = $_detail[2];
                                                    $b2 = $_detail[3];
                                                }
                                                else if ($_detail[1] == 3)
                                                {
                                                    $c1 = $_detail[2];
                                                    $c2 = $_detail[3];
                                                }
                                                else if ($_detail[1] == 4)
                                                {
                                                    $d1 = $_detail[2];
                                                    $d2 = $_detail[3];
                                                }
                                                else if ($_detail[1] == 5)
                                                {
                                                    $e1 = $_detail[2];
                                                    $e2 = $_detail[3];
                                                }
                                                else if ($_detail[1] == 6)
                                                {
                                                    $f1 = $_detail[2];
                                                    $f2 = $_detail[3];
                                                }
                                            }
                                        }
                                    

                                    if($stat == '1')
                                    {
                                    
                             
                                    
                                ?>      
                                    
                                        <tr>
                                          <td><?php echo $_mapel->nama_mapel; ?></td>
                                          
                                          <td><center><?php echo $a1; ?></center></td>
                                          <td><center><?php echo $a2; ?></center></td>
                                          
                                          <td><center><?php echo $b1; ?></center></td>
                                          <td><center><?php echo $b2; ?></center></td>
                                          
                                          <td><center><?php echo $c1; ?></center></td>
                                          <td><center><?php echo $c2; ?></center></td>
                                          
                                          <td><center><?php echo $d1; ?></center></td>
                                          <td><center><?php echo $d2; ?></center></td>
                                          
                                          <td><center><?php echo $e1; ?></center></td>
                                          <td><center><?php echo $e2; ?></center></td>
                                          
                                          <td><center><?php echo $f1; ?></center></td>
                                          <td><center><?php echo $f2; ?></center></td>
                                        </tr>
                                     
                                <?php
                            
                                     }   
                                    }
                                ?>
                                  
                    </table>
                    </div>

                                </div>

                            </div>

                            <div role="tabpanel" id="tab-4" class="tab-pane">
                                <div class="panel-body">
                                    
                                        <div class="col-lg-12">
                                <div class="widget style1 navy-bg">
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="fa fa-bell fa-3x"></i>
                                        </div>
                                        <div class="col-0 text-right">
                                            <span class="font-bold" style="font-size: 20px;"> Absensi SMK GT </span>
                                            <br>
                                            <small class="font-bold">Automatic Absen's schools</small>
                                            <!-- <div id="hms">00:00:10</div> -->
                                        </div>
                                        <div class="col-5 text-right" id="jam">
                                            <span class="font-bold" style="font-size: 20px;"> </span>
                                            
                                        </div>


                                    </div>
                                </div>
                            </div>
                                 <table class="table table-bordered">
                                        
                                    <tr>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th>Jam Absen</th>
                                        <th>Aksi</th>
                                    </tr>

                                        <?php 
                                        date_default_timezone_set("Asia/Jakarta"); 
                                            $tm = date('H:i:s', time());
                                            if(!empty($JadwalAbsenSiswa)){
                                                $i =1;
                                                foreach($JadwalAbsenSiswa as $read){
                                                    $abc = $read->jam_awal;
                                                    $abb = $read->jam_akhir;
                                                    $day =  $this->MSudi->replaceDay2(date("D"));
                                                    if($tm >= $abc && $tm <= $abb){
                                            ?>




                                        <tr>
                                            
                                            <td>
                                                <?= $i++; ?>
                                            </td>
                                            <td>
                                                

                                                   <span class="badge badge-success"><?= $read->ket; ?></span> 
                                            </td>

                                            <td>
                                                <span class="badge badge-success"><?= $read->jam_awal; ?> - <?= $read->jam_akhir; ?></span>
                                            </td>
                                            
                                                <?php
                                                 date_default_timezone_set("Asia/Jakarta"); 
                                            $tm = date('H:i:s', time());
                                            if($tm >= $abc && $tm <= $abb){?>
                                                
                                                <td>

                                                    <form action="<?= site_url('Welcome/AddDataAbsen2'); ?>" method="post">
                                                    <input type="hidden" name="kehadiran" value="1">

                                                    <input type="hidden" name="id_hari" value="<?= $day; ?>">
                                                    <!-- <input type="hidden" name="ket" value="<?= $read->ket; ?>"> -->
                                                    <button type="submit" class="btn btn-success">Absen</button>
                                                </form> 
                                                </td>
                                            
                                           <!--  <input type="text" name="kehadiran" value="<?= $jam_absen; ?>"> -->
                                             
                                            <?php } ?>
                                                <!-- 
                                                <td style="<?php echo ($tm >= $jam_absen) ? '' : 'display:none;' ?>">
                                                
                                                <p class="badge badge-danger">Anda sudah melakukan absen!</p>
                                                </td>
                                                
                                            <?php  ?> -->
                                            
                                        </tr>
                                         
                                            <?php
                                                    }
                                                }
                                            }


                                        ?>

                                 </table>
                                </div>
                            </div>

                        </div>

                         
                    </div>
                

    <?php } ?>

     <?php if($akses == '2'){ ?>


                <div class="col-lg-8">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#tab-1">Jadwal Mengajar</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-2">Pengumuman</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-3">Nilai</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-4">Data Kasbon</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-5">Absensi</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" id="tab-1" class="tab-pane active">
                                <div class="panel-body">

                                    

                        <table class="table table-bordered">
                            <tr>
                              <th>Senin</th>
                              <th>Selasa</th>
                              <th>Rabu</th>
                              <th>Kamis</th>
                              <th>Jumat</th>
                              <th>Sabtu</th>
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
                                            <span>'.$ReadDS->kelas.''.$ReadDS->jurusan.''.$ReadDS->sub_kelas.'</span><br>
                                            <span class="badge bg-orange"><i class="icon fa fa-star"></i> '.$ReadDS->jam_belajar.'</span><br>
                                            ';
                                             echo '<hr>';

                                       
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
                                        if($Hari == '02')
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
                                        if($Hari == '03')
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
                                        if($Hari == '04')
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
                                        if($Hari == '05')
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
                                        if($Hari == '06')
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
                                    }}
                                    ?>

                                </td>
                            </tr>
                       
                            </table>
                                </div>
                            </div>
                            <div role="tabpanel" id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    
                                    <?php if ($akses == '2'): ?>

                                        <?php 

                                            if(!empty($PengumumanGuru)){
                                                foreach($PengumumanGuru as $read){
                                                    $stat = $read->status;
                                                    if ($stat == '1'){
                                        ?>


                                            <p><i class="badge badge-danger" ><?= $read->judul_pengumuman; ?></i></p>
                                            <p><?= $read->isi_pengumuman; ?></p>

                                        <?php
                                                    }
                                                }
                                            }

                                        ?>

                                      

                                    <?php endif; ?>

                                </div>
                            </div>

                             <div role="tabpanel" id="tab-3" class="tab-pane">
                                <div class="panel-body">

                                    <table class="table table-bordered">
                                        <tr>
                                          <th>Mapel</th>
                                          <th>Kelas</th>
                                          <th><center>Nilai</center></th>
                                        </tr>
                                        
                                        <?php 
                                            $KelasAjar = explode("," ,$Guru->kelas_guru);
                                  
                                            foreach($KelasAjar as $kel)
                                            {
                                                $detail = explode("-" ,$kel);
                                        ?>
                                                <tr>
                                                    <td>
                                                        <?php 
                                                            foreach($Mapel as $_mapel)
                                                            {
                                                                if ($detail[0] == $_mapel->kd_mapel)
                                                                { echo $_mapel->nama_mapel; }
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            $col = '';
                                                            if ($detail[1] == '10')
                                                            { $col = 'blue'; }
                                                            else if ($detail[1] == '11')
                                                            { $col = 'green'; }
                                                            else if ($detail[1] == '12')
                                                            { $col = 'maroon'; }
                                                            
                                                            echo '<span class="badge bg-'.$col.'">'.$detail[1].' '.$detail[2].' '.$detail[3].'</span>'; 
                                                        ?>
                                                    </td>
                                                    <td><center><a class="btn bg-orange" href="<?php echo site_url('Welcome/Dataguru/InputNilai/'.$detail[1].'/'.$detail[2].'/'.$detail[3].'/'.$detail[0]); ?>"><i class="fa fa-pencil"></i></a></center></td>
                                                </tr>
                                        <?php
                                            }
                                        ?>
                                    </table>
                                </div>
                            </div>


                            <div role="tabpanel" id="tab-4" class="tab-pane">
                                <div class="panel-body">

                                    <table class="table table-bordered">
                                        <tr>
                                          <th>No</th>
                                          <th>Ket Kasbon</th>
                                          <th>Jumlah Kasbon</th>
                                        </tr>

                                        <?php 
                                        $i=1;
                                            if(!empty($DataKasbon)){
                                                foreach($DataKasbon as $read){

                                            ?>

                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $read->ket_kasbon; ?></td>
                                                <td><?= $read->jml_kasbon; ?></td>
                                            </tr>

                                        <?php
                                                }
                                            }

                                        ?>
                                    </table>
                         
                        </div>


                    </div>





    <div role="tabpanel" id="tab-5" class="tab-pane">
                        <div class="panel-body">
                            <div class="col-lg-12">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-bell fa-3x"></i>
                        </div>
                        <div class="col-0 text-right">
                            <span class="font-bold" style="font-size: 20px;"> Absensi SMK GT </span>
                            <br>
                            <small class="font-bold">Automatic Absen's schools</small>
                            <!-- <div id="hms">00:00:10</div> -->
                        </div>
                        <div class="col-5 text-right" id="jam">
                            <span class="font-bold" style="font-size: 20px;"> </span>
                            
                        </div>


                    </div>
                </div>
            </div>
                                 <table class="table table-bordered">
                                        
                                    <tr>
                                        <th>No</th>
                                        <th>Jadwal Sekarang</th>
                                        <th>Jam Absen</th>
                                        <th>Aksi</th>
                                    </tr>

                                        <?php 
                                        date_default_timezone_set("Asia/Jakarta"); 
                                            $tm = date('H:i:s', time());
                                            if(!empty($JadwalAbsenGuru)){
                                                $i =1;
                                                foreach($JadwalAbsenGuru as $read){
                                                    $abc = $read->jam_awal;
                                                    $abb = $read->jam_akhir;
                                                    if($tm >= $abc && $tm <= $abb){
                                            ?>




                                        <tr>
                                            
                                            <td>
                                                <?= $i++; ?>
                                            </td>
                                            <td>
                                                

                                                   <span class="badge badge-success"><?= $read->nama_mapel; ?></span> 
                                            </td>

                                            <td>
                                                <span class="badge badge-success"><?= $read->jam_awal; ?> - <?= $read->jam_akhir; ?></span>
                                            </td>
                                            
                                                <?php
                                                 date_default_timezone_set("Asia/Jakarta"); 
                                            $tm = date('H:i:s', time());
                                            if($tm >= $abc && $tm <= $abb):?>
                                                
                                                <td>

                                                    <form action="<?= site_url('Welcome/AddDataAbsen'); ?>" method="post">
                                                    <input type="hidden" name="kehadiran" value="1">
                                                    
                                                    <input type="hidden" name="id_hari" value="<?= $read->id_hari; ?>">
                                                    <input type="hidden" name="ket" value="<?= $read->kd; ?>">
                                                    <button type="submit" class="btn btn-success">Absen</button>
                                                </form> 
                                                </td>
                                            
                                            
                                             
                                            <?php elseif($tm >= $abb): ?>
                                                
                                                
                                                <td>
                                                <p class="badge badge-danger">Anda tidak melakukan absen!</p>
                                                </td> 
                                                
                                            <?php endif; ?>
                                            
                                        </tr>
                                         
                                            <?php
                                                    }
                                                }
                                            }


                                        ?>

                                 </table>
                         
                        </div>


                    </div>

                    

                

    <?php } ?>

    <?php if($akses == '4'){ ?>

        <div class="col-lg-4">
                    <div class="widget lazur-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-money fa-4x"></i>
                            <h1 class="m-xs">Rp.<?php echo number_format($this->MSudi->hitungpengeluaran(),2,',','.'); ?></h1>
                            <h3 class="font-bold no-margins">
                                Pengeluaran Sekolah
                            </h3>
                           <!--  <small>power</small> -->
                        </div>
                    </div>
        </div>

        <div class="col-lg-4">
                    <div class="widget navy-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-money fa-4x"></i>
                            <!-- <a href="">Edit</a> -->
                            <h1 class="m-xs">Rp.<?php echo number_format($this->MSudi->totalspp(),2,',','.'); ?></h1>
                            <h3 class="font-bold no-margins">
                                Pemasukan Uang SPP
                            </h3>
                           <!--  <small>power</small> -->
                        </div>
                    </div>
        </div>

        <div class="col-lg-4">
                    <div class="widget blue-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-money fa-4x"></i>
                            <!-- <a href="">Edit</a> -->
                            <h1 class="m-xs">Rp.<?php echo number_format($this->MSudi->totalgajiguru(),2,',','.'); ?></h1>
                            <h3 class="font-bold no-margins">
                                Total Pengeluaran Gaji Guru
                            </h3>
                           <!--  <small>power</small> -->
                        </div>
                    </div>
        </div>

        <div class="col-lg-4">
                    <div class="widget yellow-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-money fa-4x"></i><br>
                            <a href="<?= site_url('Welcome/DetailPengeluaranSPP') ?>"><i class="fa fa-sign-in"> </i> Detail</a>
                            <h1 class="m-xs">Rp.<?php echo number_format($this->MSudi->totalspp() - $this->MSudi->totalgajiguru(),2,',','.'); ?></h1>
                            <h3 class="font-bold no-margins">
                               Akumulasi Pengeluaran SPP
                            </h3>
                           <!--  <small>power</small> -->
                        </div>
                    </div>
        </div>

        <div class="col-lg-4">
                    <div class="widget lazur-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-money fa-4x"></i>
                            <h1 class="m-xs">Rp <?php echo number_format($this->MSudi->hitungpemasukantabungan(),2,',','.'); ?></h1>
                            <h3 class="font-bold no-margins">
                                Pemasukan Tabungan Siswa
                            </h3>
                           <!--  <small>power</small> -->
                        </div>
                    </div>
            </div>

        <div class="col-lg-4">
                    <div class="widget lazur-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-money fa-4x"></i>
                            <h1 class="m-xs">Rp <?php echo number_format($this->MSudi->totalUB(),2,',','.'); ?></h1>
                            <h3 class="font-bold no-margins">
                                Pemasukan Uang Bangunan
                            </h3>
                           <!--  <small>power</small> -->
                        </div>
                    </div>
            </div>


    <?php } ?>

    <?php if($akses == '7'){ ?>

        <div class="col-lg-8">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Absensi</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-2">Data Kasbon</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" id="tab-1" class="tab-pane active">
                                <div class="panel-body">

                                    <div class="col-lg-12">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-bell fa-3x"></i>
                        </div>
                        <div class="col-0 text-right">
                            <span class="font-bold" style="font-size: 20px;"> Absensi SMK GT </span>
                            <br>
                            <small class="font-bold">Automatic Absen's schools</small>
                            <!-- <div id="hms">00:00:10</div> -->
                        </div>
                        <div class="col-5 text-right" id="jam">
                            <span class="font-bold" style="font-size: 20px;"> </span>
                            
                        </div>


                    </div>
                </div>
            </div>
                                 <table class="table table-bordered">
                                        
                                    <tr>
                                        <th>No</th>
                                        <th>Jadwal Sekarang</th>
                                        <th>Jam Absen</th>
                                        <th>Aksi</th>
                                    </tr>

                                        <?php 
                                        date_default_timezone_set("Asia/Jakarta"); 
                                            $tm = date('H:i:s', time());
                                            if(!empty($JadwalAbsenStaf)){
                                                $i =1;
                                                foreach($JadwalAbsenStaf as $read){
                                                    $abc = $read->jam_awal;
                                                    $abb = $read->jam_akhir;
                                                    $day =  $this->MSudi->replaceDay2(date("D"));
                                                    if($tm >= $abc && $tm <= $abb){
                                            ?>




                                        <tr>
                                            
                                            <td>
                                                <?= $i++; ?>
                                            </td>
                                            <td>
                                                

                                                   <span class="badge badge-success"><?= $read->ket; ?></span> 
                                            </td>

                                            <td>
                                                <span class="badge badge-success"><?= $read->jam_awal; ?> - <?= $read->jam_akhir; ?></span>
                                            </td>
                                            
                                                <?php
                                                 date_default_timezone_set("Asia/Jakarta"); 
                                            $tm = date('H:i:s', time());
                                            if($tm >= $abc && $tm <= $abb):?>
                                                
                                                <td>

                                                    <form action="<?= site_url('Welcome/AddDataAbsen'); ?>" method="post">
                                                    <input type="hidden" name="kehadiran" value="1">
                                                    <!-- <input type="hidden" name="nip" value="<?= $this->session->userdata('ses_nip'); ?>"> </input> -->
                                                    <input type="hidden" name="id_hari" value="<?= $day; ?>">
                                                    <input type="hidden" name="ket" value="<?= $read->kd; ?>">
                                                    <button type="submit" class="btn btn-success">Absen</button>
                                                </form> 
                                                </td>
                                            
                                            
                                             
                                            <?php elseif($tm >= $abb): ?>
                                                
                                                
                                                <td>
                                                <p class="badge badge-danger">Anda tidak melakukan absen!</p>
                                                </td> 
                                                
                                            <?php endif; ?>
                                            
                                        </tr>
                                         
                                            <?php
                                                    }
                                                }
                                            }


                                        ?>

                                 </table>
                                </div>
                            </div>
                            <div role="tabpanel" id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    

                                    <table class="table table-bordered">
                                        <tr>
                                          <th>No</th>
                                          <th>Ket Kasbon</th>
                                          <th>Jumlah Kasbon</th>
                                        </tr>

                                        <?php 
                                        $i=1;
                                            if(!empty($DataKasbon)){
                                                foreach($DataKasbon as $read){

                                            ?>

                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $read->ket_kasbon; ?></td>
                                                <td><?= $read->jml_kasbon; ?></td>
                                            </tr>

                                        <?php
                                                }
                                            }

                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <?php } ?>
    </div>
</div>



     
                
                
            


<script type="text/javascript">

       

var timeoutHandle;
function countdown(minutes) {
    var seconds = 60;
    var mins = minutes
    function tick() {
        var counter = document.getElementById("waktu");
        var current_minutes = mins-1
        seconds--;
        counter.innerHTML =
        current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) {
            timeoutHandle=setTimeout(tick, 1000);
        } else {
 
            if(mins > 1){
 
               // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
               setTimeout(function () { countdown(mins - 1); }, 1000);
 
            }
        }
    }
    tick();
}
 
countdown(1);
 
</script>

<script type="text/javascript">
    
    function count() {
var startTime = document.getElementById('hms').innerHTML;
var pieces = startTime.split(":");
var time = new Date(); time.setHours(pieces[0]);
time.setMinutes(pieces[1]);
time.setSeconds(pieces[2]);
var timedif = new Date(time.valueOf() - 1000);
var newtime = timedif.toTimeString().split(" ")[0];
document.getElementById('hms').innerHTML=newtime;
if(newtime!=='00:00:00'){
setTimeout(count, 1000);
}else
{
document.getElementById('hms').innerHTML='Ended';
}

}
count();
</script>
