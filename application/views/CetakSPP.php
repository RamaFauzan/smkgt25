 

   

    


    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Invoice Print</title>
    </head>
    <body>
             <a href="<?= site_url('Welcome/DataAdministrasiSpp') ?>" class="btn btn-primary">Kembali</a>

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
                                        <strong><?= $detail['nama_siswa'] ?></strong><br>
                                        <?= $detail['tempat_lahir'] ?><br>
                                        <br>
                                        <abbr title="NIS"><i class="fa fa-drivers-license">: </i></abbr> <?= $detail['nis'] ?>
                                    </address>
                                    <p>
                                        <span><strong>Kelas:</strong> <?= $detail['kelas_siswa'] ?><?= $detail['jurusan_siswa']  ?> <?= $detail['sub_kelas_siswa'] ?></span><br/>
                                        <!-- <span><strong>Due Date:</strong> March 24, 2014</span> -->
                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>Detail Pembayaran</th>                                
                                        
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <tr>
                                        <td><div><strong>Tanggal Pembayaran</strong></div></td>
                                        
                                        
                                      
                                        <td><?= $detail['tgl_transaksi'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><div><strong>Jumlah Bayar</strong></div></td>
                                        
                                        
                                        
                                        <td><?= number_format($detail['jml_pembayaran']) ?></td>
                                    </tr>
                                    
                                    
                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->

                            <table class="table invoice-total">
                                <tbody>
                               
                                <tr>
                                    <td><strong>TOTAL :</strong></td>
                                    <td>Rp.<?php echo number_format($detail['jml_pembayaran']); ?></td>
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
    </body>
    </html>
     