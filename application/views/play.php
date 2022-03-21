<!DOCTYPE html>
<head>
    <link rel="shortcut icon" type="x-icon" href="img/bell.png" />
    <title>Play Now - automaBELL</title>
    <style>
        body{background:#222;color:#777;}

    </style>
</head>
<body>
    
   
   
    
   
<?php
 if (!empty($_REQUEST['s'])) {
        $s = $_REQUEST['s'];
    } else {
        echo "invalid operation!";
        return;
    }
   
    $s = (int) $s;
  $day =  $this->MSudi->replaceDay2(date("D"));
    $query = $this->MSudi->GetDataWhere3('audio', 'kd_audio', $s);
    if(!empty($query)){
      foreach($query as $read){


        ?>
           <!-- <h2 style="position:absolute;top:0;left:0;text-align:center;font-family:arial;text-align:center;width:100%;color:#777;font-size:18px;"><?php echo $audio; ?></h2> -->
   <iframe autoplay="autoplay" height=100%; src="<?php echo base_url('upload/'.$read->file_audio); ?>" style="position:absolute;bottom:0;left:0;width:100%;text-align:center;display:block;;"></iframe>
        <?php 
      }
    }

    ?>

   <!--  <h2 style="position:absolute;top:0;left:0;text-align:center;font-family:arial;text-align:center;width:100%;color:#777;font-size:18px;"><?php echo $audio; ?></h2> -->
    
</body>
<!--
--- automaBELL V.1, cd:20140301, cn:#flappyBELL
--- created date : 01-Mar-2014
--- revision to mysqli : 09-Feb-2019
--- author : Richad Avianto
--- email : aviantorich@gmail.com
--- blog : aviantorichad.blogspot.com
--- website : warungkost.com
--- Note : Gunakan dengan bijak aplikasi ini, 
--- silahkan memodifikasi sesuai kebutuhan anda dengan tidak mengubah pembuat awal aplikasi ini, 
--- jika anda mengalami kesulitan silahkan kontak email saya 
--- atau anda bisa menghubungi saya pada kontak yang sudah saya sediakan
--- untuk kondisi yang memungkinkan penghapusan nama saya silahkan meminta ijin saya terlebih dahulu.
-->
</html>

<?php
//echo "<audio controls><source src='".$audio."' type='audio/wav'>not support</audio>";
/*
  while(strtotime("now") < $ending_time){
  //echo "<script type='text/javascript'>self.location = '".$audio."';</script>";
  }
 */
?>