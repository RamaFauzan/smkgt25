
<div class="alert alert-warning alert-dismissible" style="<?php echo ($successMsg == 'Add_Fail') ? '' : 'display:none' ;?>">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
</div>

<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/AddMapel'); ?>" method="post">

              <div class="box-body">
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Kode Mapel</label>
						
                  <div class="col-sm-10">
					<input type="text" name="kd_mapel" class="form-control" id="inputPassword3" placeholder="Kode">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Nama Mapel</label>
						
                  <div class="col-sm-10">
					<input type="text" name="nama_mapel" class="form-control" id="inputPassword3" placeholder="Mapel">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <select name="status" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                  </div>
                </div>
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="simpan" value="Simpan" class="btn bg-primary"><i class="fa fa-check"></i> Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>