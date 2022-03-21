
                    <div class="ibox-content"> 
            <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA SISWA</th> 
                        <th>TAHUN AJARAN</th>
                        <th>SISA PEMBAYARAN</th>                                                                        
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                     

  
                    <tbody>
                    <?php
  $i=1;
  if(!empty($DataAdministrasiBangunan))
  {
    foreach($DataAdministrasiBangunan as $ReadDS)
    {
  ?>
    <tr>
    <td><?= $i++; ?></td>
    <td><?= $ReadDS->nama_siswa; ?></td>
    <td><?= $ReadDS->tahun_ajaran; ?></td>
    <td><?= $ReadDS->sisa_pembayaran; ?></td>
    <td align="center">
    <?php 
        $a = $ReadDS->sisa_pembayaran;
        $b=$ReadDS->keterangan;
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
    <td>
        <?php 

        $abis = $ReadDS->sisa_pembayaran; 
        if($abis > '0')
        {
            
        

        ?>

        <a href="<?php echo site_url('Welcome/DataAdministrasiBangunan/'.$ReadDS->kd_siswa.'/view') ?>"><i class="fa fa-pencil">UPDATE </i></a>
        <?php } 
          else
        {
            echo '<i class="badge badge-primary" aria-hidden="true">LUNAS</i>';
        }
        ?>

  
    </td>
                    </tr>
                    <?php } } ?>
                   </tbody>
        
                   
                    </table>
                    </div>
                    </div>
                      