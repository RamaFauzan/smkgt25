  <a href="<?= site_url('Welcome/DataPenggajian') ?>" class="btn btn-primary">Kembali</a>
 
  <div class="wrapper wrapper-content p-xl">
                    <div class="ibox-content p-xl">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>From:</h5>
                                    <address>
                                        <strong>Yayasan Smk Global Teknik.</strong><br>
                                        106 Jorg Avenu, 600/10<br>
                                        Chicago, VT 32456<br>
                                        <abbr title="Phone"><i class="fa fa-phone">: </i></abbr> (123) 601-4590
                                    </address>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <!-- <h4>Invoice No.</h4>
                                    <h4 class="text-navy">INV-000567F7-00</h4> -->
                                    <span>To:</span>
                                    <address>
                                        <strong><?= $detail['nama_guru'] ?></strong><br>
                                        <?= $detail['alamat'] ?><br>
                                        <br>
                                        <abbr title="Phone"><i class="fa fa-phone">: </i></abbr> <?= $detail['no_telp'] ?>
                                    </address>
                                    <p>
                                        <span><strong>Tanggal Gajian:</strong> <?= $detail['tgl_gaji'] ?></span><br/>
                                        <!-- <span><strong>Due Date:</strong> March 24, 2014</span> -->
                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>Detail Penggajian</th>                                
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><div><strong>Gaji Pokok</strong></div></td>
                                        
                                        <td><?= $detail['gapok'] ?></td>
                                        
                                        <td><?= $detail['gapok'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><div><strong>Jabatan</strong></div></td>
                                        
                                        <td><?= $detail['nama_jabatan'] ?></td>
                                        
                                        <td><?= $detail['tunjangan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><div><strong>Jam Mengajar</strong></div></td>
                                        
                                        <td><?= $detail['jamngajar'] ?></td>
                                      
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td><div><strong>Uang Transportasi</strong></div></td>
                                        
                                        <td><?= $detail['transport'] ?></td>
                                        
                                        <td><?= $detail['transport'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><div><strong>Uang Tunjangan Jabatan</strong></div></td>
                                        
                                        <td>0</td>
                                        
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td><div><strong>Total Kasbon</strong></div></td>
                                        
                                        <td><?= $detail['datakasbon'] ?></td>
                                      
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->

                            <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>Gaji :</strong></td>
                                    <td><?= $detail['gapok'] * $detail['jamngajar'] ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Potongan Kasobon :</strong></td>
                                    <td><?= $detail['datakasbon'] ?></td>
                                </tr>
                                <tr>
                                    <td><strong>TOTAL :</strong></td>
                                    <td>Rp.<?php echo number_format($detail['jamngajar'] * $detail['gapok'] + $detail['transport'] + $detail['tunjangan'] - $detail['datakasbon']) ?></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="well m-t"><strong>Comments</strong>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            </div>
                        </div>

    </div>


    

    <script type="text/javascript">
      
        window.print();
        
        
    </script>