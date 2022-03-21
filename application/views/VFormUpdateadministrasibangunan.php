
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
                                                           <i class="badge badge-success">Pembayaran UangBangunan</i>
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
                    <td>Sisa Pembayaran : <span style="margin-left: 20px;">Rp.<?php echo number_format($detail['sisa_pembayaran'],2,',','.'); ?></span></td>

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
                                <div class="col-lg-4">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <i class="fa fa-info-circle"></i> Transaksi Terakhir
                                        </div>
                                        <div class="panel-body">
                                             <table class="table table-striped">
                            <thead>
                            <tr>
                                
                                <th>Tanggal Pembayaran</th>
                                <th>Dibayar</th>
                                <th>Tools</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                           <?php 
                if (!empty($DataTransaksi2))
                {
               foreach($DataTransaksi2 as $products) { 

                ?>
                            <tr>
                                <td><?php echo $products->tgl_transaksi; ?></td>
                                <td>Rp.<?php echo number_format($products->jml_pembayaran,2,',','.'); ?></td>
                                <td><a class="btn btn-primary" href="<?php echo site_url('Welcome/DataTransaksi2/'.$products->kd_transaksi.'/view'); ?>">cetak</a></td>
                               
                            </tr>
                            
                        <?php } } ?>
                            
                        
                            </tbody>
                        </table>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <i class="fa fa-warning"></i> Dibayar
                                        </div>
                                      
                                       
                                       
                                        <form action="<?= site_url('Welcome/AddDataTransUB'); ?>" method="post">
                                             <input type="hidden" name="no_uangbangunan">
                                            <input type="hidden" name="kd" value="<?= $this->session->userdata('kd_siswa') ?>">
                                             <input type="hidden" name="kategori_trans" value="UB">
                                        <div class="panel-body row">
                      
                                       <!--  <div class="col-sm-10">
                                            <label class="checkbox-inline">
                                                <input name="options[]"  class="i-checks"  type="checkbox" value="6" id="inlineCheckbox2"><br>JUN
                                            </label>  
                                            <label class="checkbox-inline">
                                                <input name="options[]" class="i-checks" type="checkbox" value="7" id="inlineCheckbox2"><br>JUL 
                                            </label> 
                                            
                                            <label>
                                                <input name="options[]" class="i-checks" type="checkbox" value="8" id="inlineCheckbox3"><br>AGS 
                                            </label>
                                            <label>
                                                <input name="options[]" class="i-checks" type="checkbox" value="9" id="inlineCheckbox3"><br>SEP 
                                            </label>
                                            <label>
                                                <input name="options[]" class="i-checks" type="checkbox" value="10" id="inlineCheckbox3"><br>OKT 
                                            </label>
                                            <label>
                                                <input name="options[]" class="i-checks" type="checkbox" value="11" id="inlineCheckbox3"><br>NOV 
                                            </label>
                                            <label>
                                                <input name="options[]" class="i-checks" type="checkbox" value="12" id="inlineCheckbox3"><br>DES 
                                            </label>
                                            <label>
                                                <input name="options[]" class="i-checks" type="checkbox" value="1"   id="inlineCheckbox3"><br>JAN 
                                            </label>
                                            <label>
                                                <input name="options[]" class="i-checks" type="checkbox" value="2" id="inlineCheckbox3"><br>FEB 
                                            </label>
                                            <label>
                                                <input name="options[]" class="i-checks" type="checkbox" value="3" id="inlineCheckbox3"><br>MAR 
                                            </label>
                                            <label>
                                                <input name="options[]" class="i-checks" type="checkbox" value="4" id="inlineCheckbox3"><br>APR 
                                            </label>
                                            <label>
                                                <input name="options[]" class="i-checks" type="checkbox" value="5" id="inlineCheckbox3"><br>MEI 
                                            </label>

                                        </div> -->
                    
                                            <br>
                                            <div class="font-bold" style="margin: -45px 20px 20px 150px; ">
                                         <!--  Dibayar -->
                                        </div>
                                            <input class="col-lg-10" style="margin: -25px 0px 0px 30px; " type="text" name="jml_pembayaran">
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                             Cetak Pembayaran
                                        </div>
                                        <div class="panel-body">
                                           <div class="form-group" id="data2">
                                
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" class="form-control" name="tgl_transaksi" >
                                </div>
                                <br>
                                <div class="">
                                  <input type="submit" class="btn btn-block btn-outline btn-primary" value="Cetak"></input>
                                  
                                </div>
                                </form>
                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

 <div class="col-lg-20">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            Informasi Pembayaran
                                        </div>
                                        <div class="panel-body">
                                            
                                             <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Sisa Tagihan</th>
                                <th>Ket Bayar</th>
                               
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                if (!empty($DataPembayaran))
                {
               foreach($DataPembayaran as $products) { 
                // if($products->januari == '500000')
                ?>
                            <tr>
                                <td>
                                    <?php echo $products->nis; ?>
                                </td>
                           
                            
                                <td><?php echo $products->sisa_pembayaran; ?></td>
                           
                            
                                <td>
                                  <?php 

                                 
        $a = $products->sisa_pembayaran;
        $b=$products->keterangan;
        if($a == '0')
        {
          echo '<i class="badge badge-primary" aria-hidden="true">LUNAS</i>';
        }
        else
        {
          echo '<i class="badge badge-danger" aria-hidden="true">BELUM LUNAS</i>';
        }
    ?>
                                
                    
                                </td>

                                
                                    
                            </tr>
                        <?php } } ?>
                            </tbody>
                        </table>
                                        </div>
                                    </div>
                                </div>


                 