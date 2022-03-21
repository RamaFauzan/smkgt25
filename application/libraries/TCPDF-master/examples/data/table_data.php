 
<?php
 $i=0;
            $html='<h3>Daftar Produk</h3>
                    <table class="table table-hover" cellspacing="1" bgcolor="#666666" cellpadding="1">
                        <tr bgcolor="#ffffff">
                            <th width="10%" align="center">Nama Siswa</th>
                            <th width="10%" align="center">Jumlah Bayar </th>
                             <th width="10%" align="center">Tanggal Bayar </th>
                            
                        </tr>';
            
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$detail['nama_siswa'].'</td>
                            <td align="center">'.$detail['jml_pembayaran'].'</td>
                            <td align="center">'.$detail['tgl_transaksi'].'</td>
                            
                           
                        </tr>';
                
            $html.='</table>';
            ?>