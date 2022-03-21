
                <br>
 <?php 
        $kd = $this->uri->segment(4);
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
                                                 
                                              </select> --><div class="col-sm-10 font-bold" style="margin-top: 20px;">Tahun Ajaran<span style="margin-left: 20px; position: absolute;"><?php echo $detail['tahun_ajaran']; ?></span></div>
                                            </div>

                                            <div class="input-group" style="margin-left: 600px; margin-top: -20px; position: absolute;  ">
                                                
                                                    
                                                        <span class="input-group-">
                                                           <i class="badge badge-success">Pembayaran SPP</i>
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
                                            <i class="fa fa-info-circle"></i> Informasi Siswa
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-striped">
                          
                           
                         

                           <tbody>
                
             
                <tr>
                    <td>NIS : <span style="margin-left: 20px;"><?php echo $detail['nis']; ?></span></td>
                    <br>
                    
                </tr>
                <tr>
                    <td>Nama : <span style="margin-left: 20px;"><?php echo $detail['nama_siswa']; ?></span></td>

                </tr>
                <tr>
                     <td>Jenis Kelamin : <span style="margin-left: 20px;"><?php echo $detail['jenis_kelamin']; ?></span></td>                    
                </tr>
                <tr>

                    <td>Sisa Pembayaran : <span style="margin-left: 20px;"><?php echo $detail['sisa_pembayaran_spp']; ?></span></td>

                </tr>
                <tr>
                    <?php if($detail['status_siswa']=='2'): ?>
                    <td>Tagihan Bulanan : <span style="margin-left: 20px;"><?php echo $detail['cicilan_bulananSPP']/2; ?></span></td>
                    <?php else: ?>
                       <td>Tagihan Bulanan : <span style="margin-left: 20px;"><?php echo $detail['cicilan_bulananSPP']; ?></span></td> 
                   <?php endif; ?>
                </tr>
                <tr>
                    <td>Tabungan : <span style="margin-left: 20px;"><?php echo $detail['jml_nabung']; ?></span></td>

                </tr>
               <!--  <tr> 
                    <td>Status : <span style="margin-left: 20px;">
                        <?php  
                        $abc= $products->keterangan;
                  if($abc == 1){
                    echo 'aktif'; 
                }
                 else{
                    echo 'tidak aktif';
                 } 
                    ?>               
                    </span></td>
                </tr> -->
               <img style="margin:-25px 0px 0px 775px; position: absolute; height: 190px; width: 270px;" src="<?php echo base_url('./upload/'. $detail['foto_siswa']); ?>">
           
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
                                <th>NIS</th>
                                
                                <th>Cicilan Tagihan</th>
                                <th>Bulan</th>
                                <th>Ket Bayar</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $i=1;
                if (!empty($DataAdministrasiSpp))
                {
               foreach($DataAdministrasiSpp as $products) { 
                // if($products->januari == '500000')
                $stat = $products->status_siswa;
                $abc = $products->jml_nabung;
                if($stat == '2'){
                $abb = $products->cicilan_bulananSPP / 2;
                }
                elseif($stat == '3'){
                     $abb = 0;
                }
                else{
                     $abb = $products->cicilan_bulananSPP;
                }
                ?>
                            <tr>
                                <td>
                                    <?php echo $products->nis; ?>
                                </td>
                           
                            
                                <td><?php echo $products->cicilan_bulananSPP / 2; ?></td>
                                
                                <td>
                                <?= $products->Bulan; ?> 
                                </td>
                                
                                <td>
                                    <?php 
                                    $ket = $products->options; 
                                    if($ket == 'L')
                                    {
                                        echo '<span class="badge badge-success">Lunas</span>';
                                    }
                                    elseif($stat == '3'){
                                        echo '<span class="badge badge-success">Lunas</span>';
                                     }
                                    else
                                    {
                                        echo '<span class="badge badge-danger">Belom Lunas</span>';   
                                    }

                                    ?>
                                        
                                </td>

                                <td>
                                    <form action="<?= site_url('Welcome/AddDataTransSPP/'.$i) ?>" method="post">
                                        <input type="hidden" name="kd" value="<?= $this->session->userdata('kd') ?>">
                                        <?php if($stat == '2'): ?>
                                        <input type="hidden" name="jml_pembayaran" value="<?= $products->cicilan_bulananSPP / 2 ; ?>">
                                        <?php elseif($stat == '3'): ?>
                                        <input type="hidden" name="jml_pembayaran" value="0">
                                        <?php else: ?>
                                        <input type="hidden" name="jml_pembayaran" value="<?= $products->cicilan_bulananSPP; ?>">
                                    <?php endif; ?>
                                        <input type="hidden" name="kd_pembayaran">
                                        <input type="hidden" name="options" value="<?= $products->kd_pem; ?>">  
                                        <input type="hidden" name="kategori_trans" value="SPP">
                                        <input type="hidden" name="jml_nabung" value="<?= $products->jml_nabung; ?>">
                                        <!-- <input type="hidden" name="kd_tabungan" value="<?= $products->kd_tabungan; ?>"> -->
                                       <?php 
                                       
                                                $ket = $products->options;
                                            if ($ket == 'L'):
                                        ?>
                                       <?php elseif($stat == '3'): ?>
                                         <span class="badge badge-success">Lunas</span>
                                        
                                        <?php  else: ?>
                                        
                                          <input type="submit" class="btn btn-primary button" value="Bayar" name="">


                                        <?php endif; ?>

                                       
                                       
                                        
                                    </form>

                                    <form action="<?= site_url('Welcome/AddDataTransSPP2/'.$i) ?>" method="post">
                                        <input type="hidden" name="kd" value="<?= $this->session->userdata('kd') ?>">
                                         <?php if($stat == '2'): ?>
                                        <input type="hidden" name="jml_pembayaran" value="<?= $products->cicilan_bulananSPP / 2 ; ?>">
                                        <?php elseif($stat == '3'): ?>
                                        <input type="hidden" name="jml_pembayaran" value="0">
                                        <?php else: ?>
                                        <input type="hidden" name="jml_pembayaran" value="<?= $products->cicilan_bulananSPP; ?>">
                                    <?php endif; ?>
                                        <input type="hidden" name="kd_pembayaran">
                                        <input type="hidden" name="options" value="<?= $products->kd_pem; ?>">  
                                        <input type="hidden" name="kategori_trans" value="SPP">
                                        <input type="hidden" name="jml_nabung" value="<?= $products->jml_nabung; ?>">
                                        <input type="hidden" name="kd_tabungan" value="<?= $products->kd_tabungan; ?>">
                                       <?php 
                                       
                                                $ket = $products->options;
                                            if ($ket == 'L'):
                                        ?>
                                       
                                         <span class="badge badge-success">Lunas</span>
                                        
                                        <?php elseif($stat == '3'): ?>
                                         <span class="badge badge-success">Tidak ada potongan tabungan</span>
                                        <?php  elseif($abc >= $abb): ?>
                                        <br>
                                          <input type="submit" class="btn btn-primary button" value="Bayar Tabungan" name="">

                                           <?php elseif($abc < $abb): ?>
                                            <br>
                                            <span class="badge badge-success">Uang Tabungan Tidak cukup!</span>

                                        <?php endif; ?>

                                       
                                       
                                        
                                    </form>
                                </td>
                                
                                    
                            </tr>


                        <?php } } ?>
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
                                                    <td><?= $read->tgl_transaksi; ?></td>
                                                    <td><a class="btn btn-primary" href="<?php echo site_url('Welcome/DataTransaksi/'.$read->kd_transaksi.'/view'); ?>">cetak</a></td>
                                                    </tr>
                               


                                                <?php 
                                                    }
                                                }

                                                ?>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            


                 