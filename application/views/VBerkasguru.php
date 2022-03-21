                    <div class="ibox-content"> 
            <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA GURU</th>
                        <th>SURAT LAMARAN</th>
                        <th>DAFTAR RIWAYAT HIDUP</th>
                        <th>PAS FOTO</th>
                        <th>IJAZAH SD</th>
                        <th>IJAZAH SMP</th>
                        <th>IJAZAH SMK</th>
                        <th>IJAZAH S1</th>
                        <th>IJAZAH S2</th>
                        <th>TRANSKIP NILAI</th>
                        <th>AKTA IV</th>
                        <th>KTP</th>                        
                        <th>SERTIFIKAT</th>
                        <th>SKCK</th>
                        <th>KETERANGAN</th>                        
                        <th>AKSI</th>
                    </tr>
                    </thead>
                     
                    
  
                    <tbody>
                       <?php 
                      $i=1;
                      if(!empty($DataBerkasguru))
                      {
                        foreach($DataBerkasguru as $ReadDS)
                          
                      {
                      ?>
                    
    <tr>
    <td><?php echo $ReadDS->kd_berkasguru ?></td>
  <td><?= $ReadDS->nama_guru; ?></td>

    <td align="center">
      <?php 
        $a=$ReadDS->surat_lamaran;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->daftar_riwayat_hidup;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->pas_foto;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->fc_ijazah_sd;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->fc_ijazah_smp;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->fc_ijazah_smk;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->fc_ijazah_s1;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->fc_ijazah_s2;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->fc_transkip_nilai;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->fc_akta_iv;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->fc_ktp;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->fc_sertifikat;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
      <?php 
        $a=$ReadDS->fc_skck;
        if($a == '1')
        {
          echo '<button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-check"></i></button>';
        }
        else
        {
          echo '<button class="btn btn-outline btn-danger  dim " type="button"><i class="fa fa-heart"></i></button>';
        }
      ?>
    </td>
    <td align="center">
    <?php 
        $b=$ReadDS->surat_lamaran;
        $c=$ReadDS->daftar_riwayat_hidup;
        $d=$ReadDS->pas_foto;
        $e=$ReadDS->fc_ijazah_sd;
        $f=$ReadDS->fc_ijazah_smp;
        $g=$ReadDS->fc_ijazah_smk;
        $h=$ReadDS->fc_ijazah_s1;
        $i=$ReadDS->fc_ijazah_s2;
        $j=$ReadDS->fc_transkip_nilai;
        $k=$ReadDS->fc_akta_iv;
        $l=$ReadDS->fc_ktp;
        $m=$ReadDS->fc_sertifikat;
        $n=$ReadDS->fc_skck;
        if($b == '1' && $c == '1' && $d == '1' && $e == '1' && $f == '1' && $g == '1' && $h == '1' && $i == '1' && $j == '1' && $k == '1' && $l == '1' && $m == '1' && $n == '1')
        {
          echo '<i class="badge badge-primary" aria-hidden="true">LENGKAP</i>';
        }
        else
        {
          echo '<i class="badge badge-danger" aria-hidden="true">TIDAK LENGKAP</i>';
        }
    ?>
    </td>

    <td>
       <a href="<?php echo site_url('Welcome/Berkasguru/'.$ReadDS->kd_berkasguru.'/view') ?>"><i class="fa fa-pencil">UPDATE </i></a>
    </td>
                    </tr>
                    
                   </tbody>
        <?php } } ?>
                   
                    </table>
                    </div>
                    </div>