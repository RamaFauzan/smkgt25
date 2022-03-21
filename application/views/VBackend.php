<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.8
*
-->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SYSTEM AKADEMIK GT25</title>

    <link href="<?php echo base_url('temp3/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('temp3/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url('temp3/css/plugins/toastr/toastr.min.css');?>" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url('temp3/js/plugins/gritter/jquery.gritter.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('temp3/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('temp3/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('temp3/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('temp3/css/plugins/datapicker/datepicker3.css');?>" rel="stylesheet">
    <link href="<?= base_url('temp3/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('temp3/css/plugins/iCheck/custom.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('temp3/css/plugins/clockpicker/clockpicker.css');?>" rel="stylesheet">

   
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="<?php echo base_url('temp3/img/profile_small.jpg'); ?>"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold"><?php echo $this->session->userdata('ses_nama');?></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">                        
                                <li><a class="dropdown-item" href="<?= site_url('welcome/'); ?>">Profile</a></li>
                                <li><a class="dropdown-item tombol-keluar" href="<?= site_url('welcome/logout'); ?>">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                   
                          <?php if($akses == '3'):?>
             <li class="active">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                   <li>
                        <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Profile</span><span class="label label-info float-right">NEW</span></a>
                       
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Nilai</span><span class="label label-info float-right">NEW</span></a>
                       
                    </li>
                </ul>
            </li>

           
                   <?php elseif($akses == '1'):?>
                  
                        
                
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Data Master</span>  <!-- <span class="float-right label label-primary">SPECIAL</span> --></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?= site_url('Welcome/DataSiswa'); ?>">Master Siswa</a></li>
                            <li><a href="<?= site_url('Welcome/DataGuru'); ?>">Master Guru</a></li>
                            <li><a href="<?= site_url('Welcome/DataStafBawah'); ?>">Master Staf Bawah</a></li>
                            <li><a href="<?= site_url('Welcome/DataMasterAdministrasi'); ?>">Master Administrasi</a></li>
                            <li><a href="<?= site_url('Welcome/Mapel'); ?>">Master Mapel</a></li>
                            <li><a href="<?= site_url('Welcome/MasterPenggajian'); ?>">Master Penggajian</a></li>
                            <li><a href="<?= site_url('Welcome/DataKenakalan'); ?>">Data Kenakalan</span></a></li>
                            <li><a href="<?= site_url('Welcome/MasterJabatan'); ?>">Master Jabatan Guru</span></a></li>
                            <li><a href="<?= site_url('Welcome/MasterStafBawah'); ?>">Master Tunjangan Staf </span></a></li>
                            
                         </ul>                          
                    </li>
              

                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Data Berkas</span>  <!-- <span class="float-right label label-primary">SPECIAL</span> --></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?= site_url('Welcome/Berkassiswa'); ?>">Berkas Siswa</a></li>
                            <li><a href="<?= site_url('Welcome/Berkasguru'); ?>">Berkas Guru</a></li>
                            
                                                   
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Data Keuangan</span> <!--  <span class="float-right label label-primary">SPECIAL</span> --></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?= site_url('Welcome/DataAdministrasiSpp'); ?>">Keuangan SPP Siswa</a></li>
                            <li><a href="<?= site_url('Welcome/DataAdministrasiBangunan'); ?>">Keuangan Bangunan Siswa</a></li>
                            <li><a href="<?= site_url('Welcome/DataPengeluaran'); ?>">Data Pengeluaran</a></li>
                            <li><a href="<?= site_url('Welcome/DataPenggajian'); ?>">Data Gaji Guru</a></li>
                            <li><a href="<?= site_url('Welcome/DataPenggajianStaf'); ?>">Data Gaji Staf</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Data Jadwal</span> <!--  <span class="float-right label label-primary">SPECIAL</span> --></a>
                        <ul class="nav nav-second-level collapse">
                           <!--  <li><a href="<?= site_url('Welcome/JadwalMapel'); ?>"> <span class="nav-label">Jadwal Pelajaran</span></a></li> -->
                            <li><a href="<?= site_url('Welcome/DataJamMapel'); ?>">Data Jadwal Mengajar</a></li>
                            
                                                   
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Data Hutang</span>  <!-- <span class="float-right label label-primary">SPECIAL</span> --></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?= site_url('Welcome/DataKasbonGuru'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Kasbon Guru</span></a>
                            </li> 
                            <li>
                                <a href="<?= site_url('Welcome/DataHutangSiswa'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Hutang Siswa</span></a>
                            </li>
                             <li>
                                <a href="<?= site_url('Welcome/DataKasbonStaf'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Kasbon Staf</span></a>
                            </li> 
                            
                                                   
                        </ul>
                    </li>
                    
                     <li>
                        <a href="<?= site_url('Welcome/DataPengumuman'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Pengumuman</span></a>
                    </li>
                     <!-- <li>
                        <a href="<?= site_url('Welcome/DataBell'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Manage Bell Sekolah</span></a>
                    </li> -->
                    <li>
                        <a href="<?= site_url('Welcome/DataNilai'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Nilai</span></a>
                    </li>
                     <!-- <li>
                        <a href="<?= site_url('Welcome/DataAkumulasiAbsen'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Absen Guru</span></a>
                    </li> -->

                     <li>
                        <a href="<?= site_url('Welcome/DataTabunganSiswa'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Tabungan Siswa</span></a>
                    </li>

                     <li>
                        <a href="<?= site_url('Welcome/DataStatusSiswa'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Status Siswa</span></a>
                    </li>

                     <li>
                        <a href="<?= site_url('Welcome/DataKenakalanSiswa'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Poin Kenakalan</span></a>
                    </li>
                     <li>
                        <a href="<?= site_url('Welcome/DataMonitoringJadwal'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Monitoring Jadwal</span></a>
                    </li>
                    <li>
                        <a href="<?= site_url('Welcome/DataMonitoringAbsen'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Monitoring Absen</span></a>
                    </li>
                </ul>
          <?php elseif($akses =='4'):?>
                <li>
                        <a href="<?= site_url('Welcome/DataAdministrasiSpp'); ?>"><i class="fa fa-edit"></i> <span class="nav-label">Keuangan SPP Siswa</span></a>
                </li>
                <li>
                        <a href="<?= site_url('Welcome/DataAdministrasiBangunan'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Keuangan Bangunan Siswa</span></a>
                </li> 

                <li>
                        <a href="<?= site_url('Welcome/DataKasbonGuru'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Kasbon Guru</span></a>
                </li> 

                 <li>
                        <a href="<?= site_url('Welcome/DataPengeluaran'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Pengeluaran</span></a>
                </li>

                <li>
                        <a href="<?= site_url('Welcome/DataHutangSiswa'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Hutang Siswa</span></a>
                </li> 

                <li>
                        <a href="<?= site_url('Welcome/DataTabunganSiswa'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Tabungan Siswa</span></a>
                </li>
                <li>
                        <a href="<?= site_url('Welcome/DataPenggajian'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label">Data Gaji Guru</span></a>
                </li>
                <?php elseif($akses == '5'):?>
                <li>
                        <a href="<?= site_url('Welcome/DataAdministrasiSpp'); ?>"><i class="fa fa-edit"></i> <span class="nav-label"> SPP wakeri</span></a>
                </li>
                <li>
                        <a href="<?= site_url('Welcome/DataAdministrasiBangunan'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label"> Bangunan Siswa</span></a>
                </li> 

                 <?php elseif($akses == '6'):?>
                <li>
                        <a href="<?= site_url('Welcome/DataAdministrasiSpp'); ?>"><i class="fa fa-edit"></i> <span class="nav-label"> Jadwal Pelajaran</span></a>
                </li>
                <li>
                        <a href="<?= site_url('Welcome/DataAdministrasiBangunan'); ?>"><i class="fa fa-calendar"></i> <span class="nav-label"> Bangunan Siswa</span></a>
                </li> 
                <?php elseif($akses == '7'):?>
                <li>
                        <a href="<?= site_url('Welcome/DataPenggajianStaf'); ?>"><i class="fa fa-edit"></i> <span class="nav-label"> Detail Penggajian</span></a>
                </li>
               


        
<?php else:?>
                
                
                        
                      
                    <li>
                        <a href="<?= site_url('Welcome/DataSiswa'); ?>"><i class="fa fa-edit"></i> <span class="nav-label">Data Siswa</span></a>
                    </li>
                   <!--  <li>
                        <a href="<?= site_url('Welcome/Mapel'); ?>"><i class="fa fa-files-o"></i> <span class="nav-label"></span></a>
                       
                    </li> -->
                    <li>
                        <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Master Nilai</span><span class="label label-info float-right">NEW</span></a>
                       
                    </li>
               <?php endif;?>
                        

                     

                    
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="<?= site_url('welcome/logout'); ?>" class="tombol-keluar">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                      
 <?php $this->load->view($content); ?>
                        </div>
                </div>

            </div> 
            </div>
        </div>
       

        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('temp3/js/jquery-3.1.1.min.js');?>"></script>
    <script src="<?php echo base_url('temp3/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('temp3/js/bootstrap.js');?>"></script>
    <script src="<?php echo base_url('temp3/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
    <script src="<?php echo base_url('temp3/js/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>

    <!-- Flot -->
    <script src="<?php echo base_url('temp3/js/plugins/flot/jquery.flot.js');?>"></script>
    <script src="<?php echo base_url('temp3/js/plugins/flot/jquery.flot.tooltip.min.js');?>"></script>
    <script src="<?php echo base_url('temp3/js/plugins/flot/jquery.flot.spline.js');?>"></script>
    <script src="<?php echo base_url('temp3/js/plugins/flot/jquery.flot.resize.js');?>"></script>
    <script src="<?php echo base_url('temp3/js/plugins/flot/jquery.flot.pie.js');?>"></script>

    <!-- Peity -->
    <script src="<?php echo base_url('temp3/js/plugins/peity/jquery.peity.min.js');?>"></script>
    <script src="<?php echo base_url('temp3/js/demo/peity-demo.js');?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('temp3/js/inspinia.js');?>"></script>
    <script src="<?php echo base_url('temp3/js/plugins/pace/pace.min.js');?>"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url('temp3/js/plugins/jquery-ui/jquery-ui.min.js');?>"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url('temp3/js/plugins/gritter/jquery.gritter.min.js');?>"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url('temp3/s/plugins/sparkline/jquery.sparkline.min.js');?>j"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url('temp3/js/demo/sparkline-demo.js');?>"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url('temp3/js/plugins/chartJs/Chart.min.js');?>"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url('temp3/js/plugins/toastr/toastr.min.js');?>"></script>

     <script src="<?php echo base_url('temp3/js/plugins/dataTables/datatables.min.js');?>"></script>
    <script src="<?php echo base_url('temp3/js/plugins/dataTables/dataTables.bootstrap4.min.js');?>"></script>
    <script src="<?= base_url('temp3/js/plugins/datapicker/bootstrap-datepicker.js');?>"></script>
    <script src="<?= base_url('temp3/js/plugins/clockpicker/clockpicker.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            // setTimeout(function() {
            //     toastr.options = {
            //         closeButton: true,
            //         progressBar: true,
            //         showMethod: 'slideDown',
            //         timeOut: 4000
            //     };
            //     toastr.success('Semoga hari mu menyenangkan', 'Selamat Datang');

            // }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>
     <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'DataNilai.<?= $this->uri->segment(7); ?>'},
                    {extend: 'pdf', title: 'Data Berkas Siswa'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
     <script>
       $('#data2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

       var mem = $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
                
            });

            var yearsAgo = new Date();
            yearsAgo.setFullYear(yearsAgo.getFullYear() - 20);

            $('#selector').datepicker('setDate', yearsAgo );
   </script>


   <script src="<?= base_url('temp3/js/plugins/iCheck/icheck.min.js'); ?>"></script>
   
   <script src="<?= base_url(); ?>temp3/assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>temp3/assets/js/myscript.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
                $('.clockpicker').clockpicker();
            });
        </script>

     <script>
         
    $('.tombol-keluar').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "ingin keluar?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});

     </script>
        
</body>
</html>
