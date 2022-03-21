<div class="row">
    <div class="col-lg-2">
                    <div class="widget navy-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-copy fa-4x"></i>
                            <h1 class="m-xs"><!-- <?php echo $this->MAbsenGuru->akumulasiabsen(); ?> --></h1>
                            <h3 class="font-bold no-margins">
                                Jam Mengajar
                            </h3>
                            <small>Iwan Sanusi S.E</small>
                        </div>
                    </div>
    </div>

    <div class="col-lg-2">
                    <div class="widget navy-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-copy fa-4x"></i>
                            <h1 class="m-xs"><?php echo $this->MAbsenGuru->akumulasiabsen2(); ?></h1>
                            <h3 class="font-bold no-margins">
                                Jam Mengajar
                            </h3>
                            <small>Prof.Baharudin.M.T.</small>
                        </div>
                    </div>
    </div>
</div>

<?php 
     echo $this->MAbsenGuru->akumulasiabsen() * 40000;

?>