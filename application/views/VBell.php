
<?php
if(!empty($DataStat)){
    foreach($DataStat as $read){
        $status = $read->status;

    }
}

// $status = $rs['status'];
if ($status == 9) { //..tidak aktif = 9
    $status_desc = 'off';
    $status_class = 'class="status_off"';
    $status_href = 'enabling.php?stat=1';
    $status_title = 'aktifkan bel';
    $status_js = 'onmouseover="this.innerHTML=\'on\'" onmouseout="this.innerHTML=\'off\'"';
} else { //..aktif = 1
    $status_desc = 'on';
    $status_class = 'class="status_on"';
    $status_href = 'enabling.php?stat=9';
    $status_title = 'nonaktifkan bel';
    $status_js = 'onmouseover="this.innerHTML=\'off\'" onmouseout="this.innerHTML=\'on\'"';
}
?>

<!DOCTYPE html>


<html>
<head>
    <title>Automatic Bell Schools</title>
  <script>
        function menunggumu() {
            jam();
            PlayTimer();
        }
<?php

    ?>
          
function PlayTimer() {
                setTimeout("PlayTimer()", 1000);
                var Jam = new Date().toTimeString().replace(/.*(\d{2}:\d{2}:\d{2}).*/, "$1");
                var url ="<?= site_url('Welcome/DataBunyi'); ?>";
    <?php

      $day =  $this->MSudi->replaceDay2(date("D"));
    $bunyi = $this->MSudi->GetJadwalBell($day);
    $abc = '';
    $abb ='';
   if(!empty($bunyi)){
    foreach ($bunyi as $read) {
   
      $abc=$read->jam;
        $abb=$read->id_audio;

        ?>
        
                    //.****************awal logika
                    if (Jam == "<?php echo $abc . ":00"; ?>") 
                    {
                        url = url + "?s=" + <?php echo $abb; ?>;
                        window.open(url, "playNOW", "toolbar=no,scrollbars=no,resizable=no,top=200,left=200,width=200,height=200,menubar=no,titlebar=no,location=no");
                    }
                    //.##################akhir logika
    <?php } } ?>

                if (jam == "00:01:00") {
                    location.reload();
                }
            }
function PlayNow() {
            var param = document.getElementById("txt_audio_manual").value;
            var url = "<?= site_url('Welcome/DataBunyi'); ?>";
            url = url + "?s=" + param;
            window.open(url, "playNOW", "toolbar=no,scrollbars=no,resizable=no,top=200,left=200,width=200,height=200,menubar=no,titlebar=no,location=no");
        }
    
        
        function jam() {
            setTimeout("jam()", 1000);
            var Tgl = new Date().toDateString();
            var tglPisah = Tgl.split(' ');
            var hari = replaceDay(tglPisah[0]);
            var tgl = tglPisah[2];
            var bln = tglPisah[1];
            var thn = tglPisah[3];
            Tgl = hari + ", " + tgl + "-" + bln + "-" + thn;
            var Jam = new Date().toTimeString().replace(/.*(\d{2}:\d{2}:\d{2}).*/, "$1");
            document.getElementById("jam").innerHTML = "<span style='width:100%;'><span style='position:absolute;'>Jam  </span><span style='font-size:34px; position: absolute; margin-top:20px;'>" + Jam + "</span></span>";
            document.getElementById("tgl").innerHTML = "<span style='font-size:12px;float:right;color:#f0f0f0;'>Hari ini : <span style='font-weight:bold;color:#fff;'>" + Tgl + "</span></span>";
        }
        function replaceDay(hariEng) {
            switch (hariEng) {
                case"Mon":
                    return"Senin";
                    break;
                case"Tue":
                    return"Selasa";
                    break;
                case"Wed":
                    return"Rabu";
                    break;
                case"Thu":
                    return"Kamis";
                    break;
                case"Fri":
                    return"Jum'at";
                    break;
                case"Sat":
                    return"Sabtu";
                    break;
                case"Sun":
                    return"Minggu";
                    break;
                default:
                    return hariEng;break;}
        }
 


    </script>

     <script type="text/javascript">
            function setJam(injam) {
                var jam = injam;
                try {
                    document.getElementById("txt_jam").value = jam;
                    document.getElementById("txt_jam2").value = jam;
                    show_kont_time('none');
                } catch (exo) {
                    alert(exo)
                }
            }
            function show_kont_time(status) {
                try {
                    document.getElementById("kont_time").style.display = status;
                    document.getElementById("kont_time2").style.display = status;
                } catch (ex0) {
                    alert(ex0);
                }
            }

            function setJam2(injam2) {
                var jam2 = injam2;
                try {
                   
                    document.getElementById("txt_jam2").value = jam2;
                    show_kont_time2('none');
                } catch (exo) {
                    alert(exo)
                }
            }
            function show_kont_time2(status2) {
                try {
                    
                    document.getElementById("kont_time2").style.display = status2;
                } catch (ex0) {
                    alert(ex0);
                }
            }

           
        </script>

       
        <!-- <style>

            ul.kont_time{
                width:185px;
                list-style:none;
                box-shadow:2px 2px 5px #222;
                float:left;
                position:absolute;
                background:#fff;
                margin:0;
                padding:0;
                display:none;
                font-size:14px;
                text-align:center;
            }
             ul.kont_time2{
                width:185px;
                list-style:none;
                box-shadow:2px 2px 5px #222;
                float:left;
                position:absolute;
                background:#fff;
                margin:0;
                padding:0;
                display:none;
                font-size:14px;
                text-align:center;
            }
            li{
                float:left;
                padding:5px;
            }
            li:hover{
                background:#ddd;
                cursor:pointer;
            }
        </style> -->

         
        
    
</head>
<body onload="menunggumu()">
        <div class="col-lg-12">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-bell fa-5x"></i>
                        </div>
                        <div class="col-0 text-right">
                            <span class="font-bold" style="font-size: 20px;"> BELL SMK GT </span>
                            <br>
                            <small class="font-bold">Automatic Bell's schools</small>
                        </div>
                        <div class="col-8 text-right" id="jam">
                            <span class="font-bold" style="font-size: 20px;"> </span>
                            
                        </div>
                    </div>
                </div>
            </div>


<div class="row m-t-lg">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#tab-10">
                                Beranda
                                <!-- <span class="label label-warning">NEW</span> -->
                            </a>
                            </li>
                             <li><a class="nav-link" data-toggle="tab" href="#tab-11">
                                Pengaturan
                                <!-- <span class="label label-warning">NEW</span> -->
                            </a>
                            </li>
                             <li><a class="nav-link" data-toggle="tab" href="#tab-12">
                                Upload Ringtone
                                <!-- <span class="label label-warning">NEW</span> -->
                            </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" id="tab-10" class="tab-pane active">
                                <div class="panel-body">
                                    <div id="status" <?php echo $status_class; ?>><a href="<?php echo $status_href; ?>" title="<?php echo $status_title; ?>" <?php echo $status_js; ?>><?php echo $status_desc; ?></a></div>
                                    <strong>Jadwal Hari <?php echo $this->MSudi->replaceDayToInd(date("D")); ?></strong>

                                       <table class="table table-striped">
                                           
                                        <tr>
                                           <th>NO</th>
                                           <th>Hari</th>
                                           <th>Jam</th>
                                           <th>Jadwal</th>
                                           <th>Audio</th>
                                       </tr>
                                       <?php
    $no = 1;
    
   if(!empty($JadwalBell)){
    foreach($JadwalBell as $read){

            ?>
            
                <td><?php echo $no; ?></td>
                <td><?php echo $read->hari; ?></td>
                <td><?php echo $read->jam; ?></td>
                <td><?php echo $read->jadwal; ?></td>
                <td><?php echo $read->id_audio; ?></td>
            </tr>
            <?php
            $no++;
        }
    } else {
        ?>
        <tr>
            <td colspan="5"><center><i>** no data **</i></center></td>
    </tr>
    <?php
}
?>
                                       </table>

                                       <h2>Bunyikan Manual</h2>
<select class="form-control" name="txt_audio_manual" id="txt_audio_manual" style="max-width:600px">
    <?php
    if(!empty($BunyiBell)){

        foreach($BunyiBell as $read){



   ?>
        <option value="<?php echo $read->kd_audio; ?>"><?php echo $read->file_audio; ?></option>
    <?php     }
    } ?>
</select>
<!-- <?php
    if(!empty($BunyiBell)){
      foreach($BunyiBell as $read){


        ?>
           <h2 style="position:absolute;top:0;left:0;text-align:center;font-family:arial;text-align:center;width:100%;color:#777;font-size:18px;"><?php echo $audio; ?></h2>
    <a href="<?= base_url('upload/'.$read->file_audio) ?>" style="position:absolute;bottom:0;left:0;width:0;text-align:center;display:block;;">play</a>
        <?php 
      }
    }

    ?> -->

    <input type="button" name="btn_play" id="btn_play" value="Play" onclick="PlayNow()" />
                                </div>
                            </div>
                        

                        
                            <div role="tabpanel" id="tab-11" class="tab-pane">
                                <div class="panel-body">
                                    <span id="tgl"></span>

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

 
<br>
<!-- <a class="btn bg-primary" style="margin-left: 7px;" href="<?php echo site_url('Welcome/Siswa/Add'); ?>"><i class="fa fa-plus"></i></a> -->
 <a href="<?= site_url('Welcome/DataBell/Add'); ?>" class="btn btn-primary">
                                Tambah Data
</a>
                            
<br><br>

 <div class="table-responsive">
               <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                  <th>No</th>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Jadwal</th>
                  <th>Audio</th>
                  <th style="width:100px;">Tools</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                $i = 1;
                
                if (!empty($DataPengaturan))
                {
                    foreach($DataPengaturan as $ReadDS)
                    {
                        
                ?>
                    
                    <tr>
                        <td><?php echo $i; ?></td>
                        
                        <td><?php echo $ReadDS->hari; ?></td>

                        <td><?php echo $ReadDS->jam; ?></td>
                        <td><?php echo $ReadDS->jadwal; ?></td>

                        <td><?php echo $ReadDS->file_audio; ?></td>
                        
                        
                        <td>
                            <a class="btn bg-warning" data-toggle="modal" data-target="#myModal5<?php echo $ReadDS->id; ?>"><i class="fa fa-pencil"></i></a>
                            <a class="btn bg-danger" data-toggle="modal" data-target="#delete<?php echo $i; ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    
                    <!-- Popup -->
                    <div class="modal modal-danger fade" id="delete<?php echo $i; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p><h4>Anda yakin ingin menghapus Data "<?php echo $ReadDS->id_audio; ?>" ?</h4></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
                                    <a href="<?php echo site_url('Welcome/DeleteSiswa/'.$ReadDS->id); ?>" class="btn btn-outline">Hapus Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                      <div class="modal inmodal" id="myModal5<?php echo $ReadDS->id; ?>" tabindex="-1" role="dialog"  aria-hidden="true">
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

                                                <form action="<?php echo site_url('Welcome/UpdateJadwalBell'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                              <div class="box-body">
                                                                <div class="form-group">
                                                                  <label for="inputEmail3" class="col-sm-2 control-label">id</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" name="id" value="<?php echo $ReadDS->id; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                                  </div>
                                                                </div>

                                                                <div class="form-group">
                                                                  <label for="inputEmail3" class="col-sm-2 control-label">Jadwal</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" name="jadwal" value="<?php echo $ReadDS->jadwal; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
                                                                  </div>
                                                                </div>

                                                                <div class="form-group">
                                                                  <label for="inputEmail3" class="col-sm-2 control-label">Audio</label>
                                                                  <div class="col-sm-10">
                                                                    <select class="form-control" name="id_audio">
                                                                        <option value="<?php echo $ReadDS->id_audio; ?>"><?php echo $ReadDS->file_audio; ?></option>
                                                                        <option>-----------------------------------</option>
                                                                        <?php
                                                                                if(!empty($BunyiBell)){

                                                                                    foreach($BunyiBell as $read){



                                                                               ?>
                                                                                    <option value="<?php echo $read->kd_audio; ?>"><?php echo $read->file_audio; ?></option>
                                                                                <?php     }
                                                                                } ?>
                                                                    
                                                                    </select>
                                                                  </div>
                                                                </div>

                                                                <div class="form-group">
                                                                  <label for="inputEmail3" class="col-sm-2 control-label">Hari</label>
                                                                  <div class="col-sm-10">
                                                                     <select class="form-control" name="id_hari">
                                                                        <option value="<?php echo $ReadDS->id_hari; ?>"><?php echo $ReadDS->hari; ?></option>
                                                                        <option>-----------------------------------</option>
                                                                        <?php
                                                                                if(!empty($DataHari)){

                                                                                    foreach($DataHari as $read){



                                                                               ?>
                                                                                    <option value="<?php echo $read->kd_hari; ?>"><?php echo $read->hari; ?></option>
                                                                                <?php     }
                                                                                } ?>
                                                                    
                                                                    </select>
                                                                    
                                                                  </div>
                                                                </div>

                                                                 <div class="form-group">
                                                              <label class="col-sm-2 control-label">Jam</label>
                                                                    
                                                              <div class="col-sm-10">

                                                                <input type="text" name="jam" id="" placeholder="mm:ss" required maxlength="5" size="5" style="text-align:center;" title="mm:ss"   />
                                                              </div>
                                                            </div>
                                                             
                                                             <!-- <ul class="kont_time2" id="kont_time2">
                                                                <li onclick="setJam2(this.innerHTML)">00:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">01:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">02:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">03:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">04:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">05:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">06:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">07:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">08:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">09:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">10:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">11:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">12:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">13:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">14:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">15:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">16:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">17:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">18:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">19:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">20:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">21:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">22:00</li>
                                                                <li onclick="setJam2(this.innerHTML)">23:00</li>
                                                            </ul> -->


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
                                            <h4 class="modal-title">Tambah Jadwal Bel</h4>
                                            <!-- <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                                        </div>
                                        <div class="modal-body">
                                           


                                            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/AddPengaturanBell'); ?>" method="post">

                                                          
                                                            
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">Hari</label>
                                                                    
                                                              <div class="col-sm-10">
                                                                <select name="id_hari" class="form-control">
                                                                    <option>PILIH</option>

                                                                    <option value="1">Senin</option>
                                                                    <option value="2">Selasa</option>
                                                                    <option value="3">Rabu</option>
                                                                    <option value="4">Kamis</option>
                                                                    <option value="5">Jum'at</option>
                                                                    <option value="6">Sabtu</option>
                                                                    <option value="7">Minggu</option>
                                                                </select> 
                                                              </div>
                                                            </div>


                                                            <div class="form-group ">
                                                              <label class="col-sm-2 control-label">Jam</label>
                                                                    
                                                                <div class="input-group clockpicker" data-autoclose="true">
                                                                    <input type="text" name="jam" class="form-control" value="" >
                                                                    <span class="input-group-addon">
                                                                        <span class="fa fa-clock-o"></span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">Jadwal</label>
                                                                    
                                                              <div class="col-sm-10">
                                                                <input type="text" name="jadwal" class="form-control" placeholder="jadwal">
                                                              </div>
                                                            </div>

                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">Audio</label>
                                                                    
                                                              <div class="col-sm-10">
                                                                <select class="form-control" name="id_audio">

                                                                    <option>--PILIH--</option>
                                                                   
                                                                      <?php
                                                                            if(!empty($BunyiBell)){

                                                                                foreach($BunyiBell as $read){



                                                                           ?>
                                                                                <option value="<?php echo $read->kd_audio; ?>"><?php echo $read->file_audio; ?></option>
                                                                            <?php     }
                                                                            } ?>
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

                         

                          
                                </div>
                            </div>
                       

                        
                            <div id="tab-12" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Upload</strong>

                                    <form action="<?= site_url('Welcome/UploadRingtone'); ?>" method="post" enctype="multipart/form-data">
                                        <div class="custom-file">
                                            <br>
                                            <div class="col-sm-7">

                                                <input type="file" name="file_audio" class="form-control col-sm-7">
                                                
                                            </div>
                                            <br>
                                            Nama Audio<input type="text" name="nama" class="form-control col-sm-7 has-warning" >
                                        </div> 
                                    </form>

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--  -->
</body>


</html>






