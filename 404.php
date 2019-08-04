<?php  
require_once 'config/config.php';

// helpers/ funtion
require_once 'helpers/base_url.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Sekolah Lite">
    <meta name="author" content="fajar siagian">

    <title>SistemSekolahLite - Dashboard</title>

    <!-- fontawesome -->
    <link rel="stylesheet" href="<?=base_url('assets/node_modules/@fortawesome/fontawesome-free/css/all.min.css');?>">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link href="<?=base_url('assets/node_modules/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assets/css/404.css');?>" rel="stylesheet">

  </head>
<body>

  <div class="error-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <div class="error-text">
            <h1 class="error">404 Error</h1>
            <div class="im-sheep">
              <div class="top">
                <div class="body"></div>
                <div class="head">
                  <div class="im-eye one"></div>
                  <div class="im-eye two"></div>
                  <div class="im-ear one"></div>
                  <div class="im-ear two"></div>
                </div>
              </div>
              <div class="im-legs">
                <div class="im-leg"></div>
                <div class="im-leg"></div>
                <div class="im-leg"></div>
                <div class="im-leg"></div>
              </div>
            </div>
            <h4>Oops! This page Could Not Be Found!</h4>
            <p>Sorry bit the page you are looking for does not exist, have been removed or name changed.</p>

            <?php 
             // cek jika login tampilkan tombol homepage jika tidak jangan
            ?>
            <a href="<?=base_url()?>" class="btn btn-primary btn-round">Go to homepage</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('assets/node_modules/jquery/dist/jquery.min.js');?>"></script>
  <script src="<?=base_url('assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js');?>"></script>

</body>
</html>
        