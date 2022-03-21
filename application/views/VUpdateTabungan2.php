	<form action="<?php echo site_url('Welcome/AddDataTabungan'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
												              <div class="box-body">
												                <!-- <input type="hidden" name="nis" value="<?= $detail['nis']; ?>"> -->
												                <input type="hidden" name="nis" value="<?= $detail['nis']; ?>">
												               <!--  <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Nabung</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="tgl_nabung" value="<?php echo $ReadDS->tgl_nabung; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                    
												                  </div>
												                </div> -->


												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Saldo</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="" disabled="" id="jml_nabung" onkeyup="Hitung()" value="<?php echo $detail['jml_nabung']; ?>" class="form-control" id="inputEmail3" placeholder="Kodes">
												                    
												                  </div>
												                </div>

												                <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Nabung</label>
												                  <div class="col-sm-10">
												                    <input type="text" name="" onkeyup="Hitung()" id="jml_nabungbaru" class="form-control" id="inputEmail3" placeholder="">
												                    
												                  </div>
												                </div>
												                <input type="hidden" id="totals" name="jml_nabung">
												                <input type="hidden" id="totals2" name="jml_pendapatan">

												               <!--  <div class="form-group">
												                  <label for="inputEmail3" class="col-sm-2 control-label">status</label>
												                  <div class="col-sm-10">
												                    <select class="form-control" name="status">
																	<option><?php echo $ReadDS->status; ?></option>
																	<option>-----------------------------</option>
																	<option value="1">Aktif</option>
																	<option value="0">Tidak Aktif</option>
																</select>
												                    
												                  </div>
												                </div> -->


												              </div>
												              <!-- /.box-body -->
												              <div class="box-footer">
												                <button type="submit" name="simpan" value="Simpan" class="btn bg-primary" style="margin-left: 13px;"><i class="fa fa-check"></i> Ubah Data</button>
												              </div>
												              <!-- /.box-footer -->
												</form>

												<script type="text/javascript">
	function Hitung() {
		
	
        var txt1value = document.getElementById('jml_nabung').value;
        var txt2value = document.getElementById('jml_nabungbaru').value;
        var hasil = parseInt(txt1value) - parseInt(txt2value);
        var hasil2 = hasil * 10/100;

        if (!isNaN(hasil)) {
            document.getElementById('totals').value = hasil;
           
        }
    }
 </script>

           