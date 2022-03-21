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

 <div class="alert alert-danger alert-dismissible" style="<?php echo ($successMsg == 'Add_Fail') ? '' : 'display:none' ;?>">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-warning"></i> Harap Isi Semua Field!</h4>
</div>
<br>
<!-- <a class="btn bg-primary" style="margin-left: 7px;" href="<?php echo site_url('Welcome/Siswa/Add'); ?>"><i class="fa fa-plus"></i></a> -->
<!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
                                Tambah Data
</button> -->
                            
<br><br>

 <div class="table-responsive">
               <table class="table table-striped table-bordered table-hover dataTables-example" >
               	<thead>
                <tr>
                  <th width="20px;">No</th>
                  <th>Nama Siswa</th>
                  
	              <th>SP1</th>
	              <th>SP2</th>
	              <th>SP3</th>
                  
				  <th style="width:100px;">Detail</th>
                </tr>
                </thead>
                <tbody>
				
				<?php
				$i = 1;
				
				if (!empty($DataSiswa))
				{
					foreach($DataSiswa as $ReadDS)
					{
						$b = $this->uri->segment(3);
						$a = $ReadDS->status_kenakalan;
				?>
					
					<tr>
						<td><?php echo $i++; ?></td>
						
						<!-- <td><?php echo $ReadDS->nis; ?></td> -->
					 	<td><?php echo $ReadDS->nama_siswa; ?></td>

						
					 	<td align="center">


					 		<?php if($ReadDS->status_kenakalan == '1'): ?>
					 		<button class="btn btn-danger  dim " type="button"><i class="fa fa-exclamation-circle"></i></button>

					 		<?php elseif($ReadDS->status_kenakalan == '2'): ?>
					 		<button class="btn btn-danger  dim " type="button"><i class="fa fa-exclamation-circle"></i></button>

					 		<?php elseif($ReadDS->status_kenakalan == '3'): ?>
					 		<button class="btn btn-danger  dim " type="button"><i class="fa fa-exclamation-circle"></i></button>

					 		<?php else: ?>

					 		<?php endif; ?>
					 	</td>
					 	<td align="center">
					 		<?php if($ReadDS->status_kenakalan == '2'): ?>
					 		<button class="btn btn-danger  dim " type="button"><i class="fa fa-exclamation-circle"></i></button>

					 		<?php elseif($ReadDS->status_kenakalan == '3'): ?>
					 		<button class="btn btn-danger  dim " type="button"><i class="fa fa-exclamation-circle"></i></button>

					 		<?php else: ?>

					 		<?php endif; ?>
					 	</td>
					 	<td align="center">
					 		<?php if($ReadDS->status_kenakalan == '3'): ?>
					 		<button class="btn btn-danger  dim " type="button"><i class="fa fa-exclamation-circle"></i></button>

					 		<?php else: ?>

					 		<?php endif; ?>
					 	</td>
	
						
						<td>
							<a class="btn bg-warning"  href="<?= site_url('Welcome/DataKenakalanSiswa/Detail/'.$ReadDS->nis) ?>"><i class="fa fa-history"></i></a>
							<!-- <a class="btn bg-danger" data-toggle="modal" data-target="#delete<?php echo $i; ?>"><i class="fa fa-trash-o"></i></a> -->
						</td>
					</tr>
					
					<?php } } ?>
					</tbody>


<script>
    function UangBangunan()
  {
    // get combo boxes
    var idx_barang = document.getElementById('barang');
    var hrg_barang = document.getElementById('hg_barang');
     var hrg_barang2 = document.getElementById('hg_barang2');
    
    // change both combo box on same index
    hrg_barang.selectedIndex = idx_barang.selectedIndex;
     hrg_barang2.selectedIndex = idx_barang.selectedIndex;
    
    // get 'hrg_barang' values
    var values = hrg_barang.value;
    var values2 = hrg_barang2.value;

    document.getElementById('harga').value = values;
    document.getElementById('harga2').value = values2;
  }
</script>  

                          