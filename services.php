<?php
session_start();
include('config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dealer Mobil | Layanan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta content="Author" name="WebThemez">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="css/style.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Tailwind CSS File -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.14/dist/tailwind.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">

</head>

<body id="body">
  <?php include('header.php');?>

  <section id="innerBanner">
    <div class="inner-content">
      <h2><span>Layanan Kami</span><br>Kami menyediakan berbagai layanan terbaik</h2>
      <div>
      </div>
    </div>
  </section><!-- #Page Banner -->

  <main id="main">
    <section id="services" class="wow fadeInUp" style="background-image: url('path_to_background_image.jpg');">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full lg:w-1/3 text-center">
          <a href="penjualan.php">
            <div class="bg-white shadow p-6 rounded-lg mb-6">
              <i class="text-3xl text-blue-500 ion-android-car"></i>
              <h3 class="text-xl font-semibold mt-4">Penjualan Mobil</h3>
              <p class="mt-4">Kami menawarkan penjualan mobil baru dan bekas dengan berbagai pilihan merk dan model terkini.</p>
            </div>
          </a>
        </div>
      </div>
  </div>
</section>

<div class="w-full lg:w-1/3 text-center">
  <a href="finansial.php">
    <div class="bg-white shadow p-6 rounded-lg mb-6">
      <i class="text-3xl text-blue-500 ion-android-options"></i>
      <h3 class="text-xl font-semibold mt-4">Pilihan Finansial</h3>
      <p class="mt-4">Kami menyediakan berbagai opsi finansial seperti kredit dan leasing untuk memudahkan pembelian mobil.</p>
    </div>
  </a>
</div>


          <div class="w-full lg:w-1/3 text-center">
            <div class="bg-white shadow p-6 rounded-lg mb-6">
              <i class="text-3xl text-blue-500 ion-android-settings"></i>
              <h3 class="text-xl font-semibold mt-4">Servis dan Perawatan</h3>
              <p class="mt-4">Kami memiliki bengkel dan teknisi yang siap memberikan servis dan perawatan berkualitas untuk mobil Anda.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #Services -->

  </main>

  <?php include('footer.php');?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript -->
</body>

</html>
