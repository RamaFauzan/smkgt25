


             <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox product-detail">
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-5">


                                    <div class="">

                                        <div>
                                            
                                                
                                                <img style="margin-top: 80px; width: 350px; position: absolute;" src="<?php echo base_url('./upload/'.$detail['foto_guru']); ?>">
                                            
                                        </div>
                                        

                                    </div>


                                </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                        <?php echo $detail['nama_guru']; ?>
                                    </h2>
                                    <small><?php echo $detail['alamat']; ?></small>
                                    <dt><?php echo $detail['kategori']; ?></dt>
                                    <div class="m-t-md">
                                        <h2 class="product-main-price">
                                        
                                            <?php $a=$detail['keterangan'];
                                             if($a == '1')
                                                {
                                                  echo '<i class="badge badge-success">AKTIF</i>';
                                                }
                                                else
                                                {
                                                  echo '<i class="badge badge-danger">TIDAK AKTIF</i>';
                                                }
                                            ?>
                                        </dd> <!-- <small class="text-muted">Exclude Tax</small> --> 
                                    </h2>
                                    </div>
                                    <hr>

                                        <dt>Tempat, Tanggal Lahir</dt>
                                        <dd><?php echo $detail['tempat_lahir']; ?>&nbsp;&nbsp;<?php echo $detail['tanggal_lahir']; ?></dd>
                                        <div class="" style="">
                                        <dt style="margin: -48px 0px 0px 300px;">Jenis Kelamin</dt>
                                        <dd style="margin-left: 300px;"><?php echo $detail['jenis_kelamin']; ?></dd>
                                        <dt>Agama</dt>
                                        <dd><?php echo $detail['agama']; ?></dd>
                                        <dt style="margin: -48px 0px 0px 300px;">Email</dt>
                                        <dd style="margin-left: 300px;"><?php echo $detail['email']; ?></dd>
                                        <dt>No Telp</dt>
                                        <dd><?php echo $detail['no_telp']; ?></dd>
                                        </div>
                                        
                                        
                                    <hr>
                                    <h4>Data Pendidikan</h4>

                                    <div class="medium text-muted">
                                        <dt>Pendidikan Terakhir</dt>
                                        <dd><?php echo $detail['pendidikan_terakhir']; ?></dd>
                                        <dt style="margin: -48px 0px 0px 300px;">Data Pendidikan SD</dt>
                                        <dd style="margin-left: 300px;"><?php echo $detail['data_pendidikan_sd']; ?></dd>
                                        <dt>Data Pendidikan SMP</dt>
                                        <dd><?php echo $detail['data_pendidikan_smp']; ?></dd>
                                        <dt style="margin: -48px 0px 0px 300px;">Data Pendidikan SMK</dt>
                                        <dd style="margin-left: 300px;"><?php echo $detail['data_pendidikan_smk']; ?></dd>
                                        <dt>Data Pendidikan S1</dt>
                                        <dd><?php echo $detail['data_pendidikan_s1']; ?></dd>
                                        <dt style="margin: -48px 0px 0px 300px;">Data Pendidikan S2</dt>
                                        <dd style="margin-left: 300px;"><?php echo $detail['data_pendidikan_s2']; ?></dd>
                                    </div>
                                    <br>
                                    <dl class="medium m-t-md">
                                        <dt>Pengalaman</dt>
                                        <dd><?php echo $detail['pengalaman']; ?></dd>
                                        
                                    </dl>
                                    <hr>

                                    <div>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-left-o"></i>Kembali</button>
                                           
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
                        <!-- <div class="ibox-footer">
                            <span class="float-right">
                                Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm
                            </span>
                            The generated Lorem Ipsum is therefore always free
                        </div> -->
                    </div>

                </div>
            </div>
        </div>
        