<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="<?= base_url('temp3/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('temp3/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">

    <link href="<?=  base_url('temp3/css/animate.css')?>" rel="stylesheet">
    <link href="<?= base_url('temp3/css/style.css'); ?>" rel="stylesheet">
    <script>
        
        function hanyaAngka(evt) {
            var x = (evt.which) ? evt.which : event.keycode
            if (x > 31 && (x < 48))
            {
                return false;
                return true;
            }
        }

    </script>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">GT+</h1>

            </div>
             <?php echo $this->session->flashdata('msg');?>
             <!-- <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                Continually expanded and constantly improved Inspinia Admin Them (IN+)
            </p>  -->
            <p>Login in. To see it in action.</p>
            <form class="m-t"  action="<?php echo site_url('Login/Auth'); ?>" method="post">
                <!-- <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash(); ?>"> -->
                <div class="form-group">
                    <input onkeypress="return hanyaAngka(event)" type="number" class="form-control" name="username" placeholder="Username" required="">
                </div>
                <!-- <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div> -->
                <button type="submit" name="btn_login" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <!-- <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
            <p class="m-t"> <small>GT Vocation High School Application System &copy; 2020</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?= base_url('temp3/jquery-3.1.1.min.js'); ?>"></script>
    <script src="<?= base_url('temp3/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('temp3/js/bootstrap.js'); ?>"></script>

</body>

</html>
