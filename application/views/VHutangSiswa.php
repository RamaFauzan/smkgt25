<table class="table table-striped">
    <tr>
        <td>No</td>
        <td>Nis</td>
        <td>Nama</td>
        <td>Aksi</td>
    </tr>

    <?php 
    $i= 1;
        if(!empty($DataHutang)){
            foreach($DataHutang as $read){

        ?>


        <tr>
            <td><?= $i++; ?></td>
            <td><?= $read->nis; ?></td>
            <td><?= $read->nama_siswa; ?></td>
            <td><a class="badge badge-warning" href="<?= site_url('Welcome/DataHutangSiswa/'.$read->kd_siswa.'/view'); ?>"><i class="fa fa-pencil"></i></a></td>
        </tr>

        <?php
            }
        }
    ?>
</table>