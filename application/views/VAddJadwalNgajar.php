
<div class="alert alert-warning alert-dismissible" style="<?php echo ($successMsg == 'Add_Fail') ? '' : 'display:none' ;?>">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
</div>

<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/AddJamNgajar'); ?>" method="post">

              <div class="box-body">
				<!-- <input type="text" name="" value="<?= $this->session->userdata('kelasGuru'); ?>"> -->
				 <div class="form-group">
            <label class="col-sm-2 control-label">Hari</label>
                  
            <div class="col-sm-10">
              <select name="id_hari" class="form-control">
                 
                  <option>PILIH</option>
                  <?php 
                    if(!empty($DataHari)){
                        foreach($DataHari as $read){

                      ?>

                      <option value="<?= $read->kd_hari ?>"><?= $read->hari; ?></option>

                    <?php
                        }
                    }

                  ?>
              </select> 
            </div>
          </div>
				
				 <div class="form-group">
            <label class="col-sm-2 control-label">Nama Guru</label>
                  
            <div class="col-sm-10">
              <select name="nid" class="form-control">
                  
                  <option>PILIH</option>
                  <?php 
                    if(!empty($DataGuru)){
                        foreach($DataGuru as $read){

                      ?>

                      <option value="<?= $read->nid ?>"><?= $read->nama_guru; ?></option>

                    <?php
                        }
                    }

                  ?>
              </select> 
            </div>
          </div>
				
				 <div class="form-group">
              <label class="col-sm-2 control-label">Mapel</label>
                    
              <div class="col-sm-10">
                <select name="kd_mapel" class="form-control">
                    
                    <option>PILIH</option>
                    <?php 
                      if(!empty($Mapel)){
                          foreach($Mapel as $read){

                        ?>

                        <option value="<?= $read->kd_mapel ?>"><?= $read->nama_mapel; ?></option>

                      <?php
                          }
                      }

                    ?>
                </select> 
              </div>
            </div>
				  <hr>
          <p>*batas Absen</p>
        <div class="form-group ">
            <label class="col-sm-2 control-label">Jam Awal</label>
                  
              <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" name="jam_awal" class="col-lg-2" style="margin-left: 15px;" value="" >
                  <span class="input-group-addon">
                      <span class="fa fa-clock-o"></span>
                  </span>
              </div>
          </div>

          <div class="form-group ">
            <label class="col-sm-2 control-label">Jam Akhir</label>
                  
              <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" name="jam_akhir" class="col-lg-2" style="margin-left: 15px;" value="" >
                  <span class="input-group-addon">
                      <span class="fa fa-clock-o"></span>
                  </span>
              </div>
          </div>
          <hr>
          <label class="col-sm-2 control-label">Kelas</label>
            <div class="form-group row" style="margin-left: -10px;">
                  
            
                  <div class="col-sm-3">
          <select class="form-control" name="kelas">
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
                  </div>
          <div class="col-sm-3">
          <select class="form-control" name="jurusan">
            
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
           
          </select>
                  </div>
          <div class="col-sm-3">
          <select class="form-control" name="sub_kelas">
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
                  </div>
                  <hr>

                  
                </div>
                <hr>
                <label class="col-sm-2 control-label">Jam Belajar</label>
                <div class="form-group row" style="margin-left: -10px;">
                  
            
                  <div class="col-sm-3">
          <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" name="jamawal" class="col-lg-5" style="margin-left: 15px;" value="" >
                  <span class="input-group-addon">
                      <span class="fa fa-clock-o"></span>
                  </span>
              </div>
                  </div>

                  <div style="margin-left: -70px; margin-top: 5px;">
                      <span class="badge badge-danger">-</span>
                  </div>

          <div class="col-sm-3">
          <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" name="jamakhir" class="col-lg-5" style="margin-left: 15px;" value="" >
                  <span class="input-group-addon">
                      <span class="fa fa-clock-o"></span>
                  </span>
              </div>
                  </div>
          </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="simpan" value="Simpan" class="btn bg-primary"><i class="fa fa-check"></i> Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>