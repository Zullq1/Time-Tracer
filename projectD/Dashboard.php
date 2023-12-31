<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: /project/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="assets/Logo/logo.PNG">
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="Dashboard.html" class="logo">
                        <img src="assets/Logo/logo.PNG" alt="" style="width: 158px;"> 
                        <!-- <h3>TimeTracer</h3> -->
                    </a>
                    <!-- Logo End -->
                    <!-- Menu Start -->
                    <!-- <ul class="nav">
                      <li><a href="Dashboard.html" class="active">Home</a></li>
                      <li><a href="shop.html">Tugas</a></li>
                      <li><a href="product-details.html">Calender</a></li>
                      <li><a href="product-details.html">Pengaturan</a></li>
                      <li><a href="contact.html">Profile</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a> -->
                    <!-- Menu End -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Selamat Datang Di TimeTracer</h3>
          <span class="breadcrumb"><a href=""></a> Silahkan Memilih Menu </span>
        </div>
      </div>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="catat.php">
            <div class="item">
              <div class="image">
                <img src="assets/Logo/plus.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Buat Jadwal</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="kalender.php">
            <div class="item">
              <div class="image">
                <img src="assets/Logo/kalender.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Kalender</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="riwayat.php">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-03.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Riwayat</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="profile.php">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Profile</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6></h6>
            <h2>Kembali KeHome</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="/project/index.php">Home</a>
          </div>
        </div>
  
  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>