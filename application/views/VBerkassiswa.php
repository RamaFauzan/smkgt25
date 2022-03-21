
                    <div class="ibox-content"> 
            <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA SISWA</th>
                        <th>KARTU KELUARGA</th>
                        <th>KTP ORANG TUA</th>
                        <th>IJAZAH</th>
                         <th>SKHUN</th>
                        <th>AKTE KELAHIRAN</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                     

  
                    <tbody>
                    <?php
  $i=1;
  if(!empty($DataBerkasSiswa))
  {
    foreach($DataBerkasSiswa as $ReadDS)
    {
  ?>
    <tr>
    <td><?= $i++; ?></td>
    <td><?= $ReadDS->nama_siswa; ?></td>
    <td align="center">       
      <?php 
        $a=$ReadDS->kk;
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
        $a=$ReadDS->ktp_ortu;
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
        $a=$ReadDS->ijazah;
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
        $a=$ReadDS->skhun;
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
        $a=$ReadDS->akte_kelahiran;
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
        $b=$ReadDS->kk;
        $c=$ReadDS->ktp_ortu;
        $d=$ReadDS->ijazah;
        $e=$ReadDS->skhun;
        $f=$ReadDS->akte_kelahiran;
        if($b == '1' && $c == '1' && $d == '1' && $e == '1' && $f == '1')
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
       <a href="<?php echo site_url('Welcome/Berkassiswa/'.$ReadDS->kd_berkassiswa.'/view') ?>"><i class="fa fa-pencil">UPDATE </i></a>
    </td>
                    </tr>
                    <?php } } ?>
                   </tbody>
        
                   
                    </table>
                    </div>
                    </div>