
                <br>
 <?php 
        $kd = $this->uri->segment(3);
 ?>
              <div class="col-lg-20">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            Informasi Akademik
                                        </div>
                                        <div class="panel-body">
                                            <div class="input-group" style="margin-left: 100px;">
                                              <!-- <select class="col-md-3 form-control d-flex">
                                                  <option>---Pilih---</option>
                                                  <option id="pop" value="<?php echo $kd = '1'; ?>" >2019/2020</option>
                                                  <option value="<?php echo $kd = '2'; ?>">abc</option>
                                                 
                                              </select> --><div class="col-sm-10 font-bold" style="margin-top: 20px; margin-bottom: 20px;"><span class="badge badge-success" style="margin-left: 20px; position: absolute;"><?php echo $detail['nama_guru']; ?></span></div>
                                            </div>

                                            <div class="input-group" style="margin-left: 600px; margin-top: -20px; position: absolute;  ">
                                                
                                                    
                                                        <span class="input-group-">
                                                           <i class="badge badge-success" style="margin-left: 200px;"><?= $detail['kategori'] ?></i>
                                                        </span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                <br>
          
<br>
                                <div class="col-lg-20">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <i class="fa fa-info-circle"></i> Informasi Gaji Guru
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-striped">
                          
                           
                         

                           <tbody>
                
             
                <tr>
                    <td>NIS : <span style="margin-left: 20px;"><?php echo $detail['nid']; ?></span></td>
                    <br>
                    
                </tr>
                <tr>
                    <td>Nama : <span style="margin-left: 20px;"><?php echo $detail['nama_guru']; ?></span></td>

                </tr>
                <tr>
                     <td>Jenis Kelamin : <span style="margin-left: 20px;"><?php echo $detail['jenis_kelamin']; ?></span></td>                    
                </tr>
                <tr>

                    <td>Jabatan : <span style="margin-left: 20px;"><?= $detail['nama_jabatan'] ?> (Rp.<?php echo number_format($detail['tunjangan']); ?>) </span></td>

                </tr>
                 <tr>

                    <td>Jam Mengajar : <span style="margin-left: 20px;"><?php echo $detail['jamngajar']; ?> Jam</span></td>

                </tr>
                <tr>

                    <td>Total Kasbon : <span style="margin-left: 20px;">Rp.<?php echo number_format($detail['datakasbon']); ?></span></td>

                </tr>
                <tr>

                    <td>Transport : <span style="margin-left: 20px;">Rp.<?php echo number_format($detail['transport']); ?></span></td>

                </tr>
                 <tr>

                    <td>Gaji : <span style="margin-left: 20px;">Rp.<?php echo number_format($detail['jamngajar'] * $detail['gapok'] ); ?></span></td>

                </tr>
                 <tr>

                    <td>Total Gaji : <span style="margin-left: 20px;">Rp.<?php echo number_format($detail['jamngajar'] * $detail['gapok'] + $detail['transport'] + $detail['tunjangan'] - $detail['datakasbon']) ?>  </span></td>

                </tr>

                <!---
                <tr>
                    <?php if($detail['status_siswa']=='2'): ?>
                    <td>Tagihan Bulanan : <span style="margin-left: 20px;"><?php echo $detail['cicilan_bulananSPP']/2; ?></span></td>
                    <?php else: ?>
                       <td>Tagihan Bulanan : <span style="margin-left: 20px;"><?php echo $detail['cicilan_bulananSPP']; ?></span></td> 
                   <?php endif; ?>
                </tr>
                <tr>
                    <td>Tabungan : <span style="margin-left: 20px;"><?php echo $detail['jml_nabung']; ?></span></td>

                </tr> -->
               <!--  <tr> 
                    <td>Status : <span style="margin-left: 20px;">
                  <!--  -->
                    </span></td>
                </tr> 
               <img style="margin:-25px 0px 0px 775px; position: absolute; height: 250px; width: 270px;" src="<?php echo base_url('./upload/'. $detail['foto_guru']); ?>">
           
                </tbody>
                         
                        </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                            

 <div class="col-sm-8">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            Informasi Pembayaran
                                        </div>
                                        <div class="panel-body">
                                            
                                             <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>NID</th>                                
                                
                                <!-- <th>Ket Bayar</th> -->
                                <th>Total Gaji</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                               
                        
                            <tr>
                                <td>
                                    <?php echo $detail['nid']; ?>
                                </td>
                           
                            
                                <td>Rp.<?php echo number_format($detail['jamngajar'] * $detail['gapok'] + $detail['transport'] + $detail['tunjangan'] - $detail['datakasbon']) ?></td>
                                
                              
                                
                                <td>
                                <form action="<?= site_url('Welcome/AddGajiGuru'); ?>" method="post">

                                    <input type="hidden" name="nid" value="<?= $detail['nid']; ?>">
                                    <input type="hidden" name="total_gaji" value="<?php echo $detail['jamngajar'] * $detail['gapok'] - $detail['datakasbon'] ?>">
                                    <input type="hidden" name="kd_guru" value="<?= $detail['kd_guru'] ?>">
                                 <input class="btn btn-primary" type="submit" name="" value="BAYAR">
                                </form>                                        
                                </td>

                              
                                
                                    
                            </tr>


                        
                            </tbody>
                        </table>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-4">
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            Cetak Pembayaran
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td>No</td>
                                                    <td>tanggal transaksi</td>
                                                    <td>Aksi</td>

                                                </tr>

                                                <?php 
                                                $i=1;
                                                if(!empty($DataTransaksi)){

                                                    foreach($DataTransaksi as $read){


                                                    ?>
                                                    <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $read->tgl_gaji; ?></td>
                                                    <td><a class="btn btn-primary" href="<?php echo site_url('Welcome/DataTransaksi4/'.$read->kd.'/view'); ?>">cetak</a></td>
                                                    </tr>
                               


                                                <?php 
                                                    }
                                                }

                                                ?>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            


                 