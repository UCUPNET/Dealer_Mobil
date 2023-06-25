<?php
session_start();
include('config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dealer Mobil | Beranda</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta content="Author" name="WebThemez">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Tailwind CSS File -->

  <link rel="stylesheet" href="dist/output.css">
</head>

<body>
  <?php include('header.php');?>

  <section id="hero" class="pt-72 container mx-auto min-h-screen" style="background-image: url('img/blog3.jpg');">
    <div class="hero-container">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <h1 class="text-3xl ">Selamat Datang di Dealer Mobil</h1>
          <h2 class="">Tersedia berbagai macam mobil terbaru dengan kualitas terbaik</h2>
          <a href="services.php" class="btn-get-started:hover ">Lihat Layanan Kami</a>
        </div>
      </div>
    </div>
  </section><!-- #hero -->

  <section class="cars" id="cars">
        <div class="heading">
            <span>All Cars</span>
            <h2>We have all types cars </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, doloremque!</p>
        </div>
        <!-- Cars Container-->
        <div class="cars-container container">
            <!-- Box 1 -->
            <div class="box">
                <img src="img/car1.jpg" alt="">
                <h2>Mercedes Benz Clark</h2>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <img src="img/car2.jpg" alt="">
                <h2>Mustang GT</h2>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <img src="img/blog3.jpg" alt="">
                <h2>Audi GT 370</h2>
            </div>
            <!-- Box 4 -->
            <div class="box">
                <img src="img/car4.jpg" alt="">
                <h2>Chevrolet Camaro</h2>
            </div>
            <!-- Box 5 -->
            <div class="box">
                <img src="img/car5.jpg" alt="">
                <h2>Porsche</h2>
            </div>
            <!-- Box 6 -->
            <div class="box">
                <img src="img/car6.jpg" alt="">
                <h2>Lamborghini Aventador</h2>
            </div>
    </section>
    
  <main id="main">
    <!-- Content Here -->

  </main>

  <?php include('footer.php');?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script>

  </script>


</body>

</html>
