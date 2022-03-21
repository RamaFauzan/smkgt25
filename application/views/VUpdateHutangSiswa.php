 
<?php 
    $kd = $this->uri->segment(3);
?>

 <div class="row">
                                <div class="col-lg-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            SPP Panel
                                        </div>
                                        <div class="panel-body">
                                           Sisa Pembayaran<br>Rp.<input type="text" id="jml_spp" onkeyup="" value="<?= $detail['sisa_pembayaran_spp'] ?>" style="border: none;">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            Uang Bangunan Panel
                                        </div>
                                        <div class="panel-body">
                                             Sisa Pembayaran<br>Rp.<input type="text" id="jml_ub" onkeyup="" value="<?= $detail['uang_bangunan'] ?>" style="border: none;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            Success Panel
                                        </div>
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <i class="fa fa-info-circle"></i> Info Panel
                                        </div>
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <i class="fa fa-warning"></i> Warning Panel
                                        </div>
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                        </div>
                                    </div>
                                </div>


                                 <table class="table table-striped col-lg-7">
                            
                           
                                         <tr>
                                            <th>Total Hutang</th>

                                            <th>Aksi</th>
                                        </tr>
                                        <tr>
                                            <td>Rp.<input type="text" style="border: none;" id="totals"></input></td>
                                            <td><a class="badge badge-primary" target="_blank" href="<?= site_url('Welcome/DataHutangSiswa/'.$kd.'/cetak') ?>" >Cetak</a></td>
                                            
                                        </tr>
                
                                </table>
                              <!--   <input type="text" class="form-control" id="totals"></input> -->
</div>

 <script type="text/javascript">
        var txt1value = document.getElementById('jml_spp').value;
        var txt2value = document.getElementById('jml_ub').value;
        var hasil = parseInt(txt1value) + parseInt(txt2value);

        if (!isNaN(hasil)) {
            document.getElementById('totals').value = hasil;
        }
 </script>