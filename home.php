<?php
include '/aset/header.php';
 ?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Corona checksite</title>

    </head>
    <body>
        <h1><center>Selamat datang perawat</center></h1>



         <div class="container">
 <div class="row mt-4">
 <div class="col-md">
            <h2><i class="fas fa-chart-line mr-2"></i>Dashboard</h2>
            <hr class="bg-light">

 </div>
 </div>

 <div class="row">
    <div class="col-md-4">
    <div class="card bg-danger" style="width: 18rem;">
    <div class="card-body text-white">
    <h5 class="card-title">Jumlah ODP</h5>
    <p class="card-text" style="font-size: 60px">350</p>
    <a href="http://localhost/tugas/pasien odp/home.php" class="text-white">lebih detail<i class="fas fa-angle-double-right"></i></a>
    </div>
    </div>
    </div>
   <div class="col-md-4">
   <div class="card bg-warning" style="width: 18rem;">
   <div class="card-body text-white">
    <h5 class="card-title">Jumlah PDP</h5>
    <p class="card-text" style="font-size: 60px">350</p>
    <a href="http://localhost/tugas/pasien pdp/home.php" class="text-white">lebih detail<i class="fas fa-angle-double-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-info" style="width: 18rem;">
  <div class="card-body text-white">
    <h5 class="card-title"></h5>
    <p class="card-text" style="font-size: 60px">350</p>
    <a href="http://localhost/tugas/pasien positif/home.php" class="text-white">lebih detail<i class="fas fa-angle-double-right"></i></a>
    </div>
    </div>
    </div>
    </body>
    </html>    

 <?php 
include '/aset/footer.php';
 