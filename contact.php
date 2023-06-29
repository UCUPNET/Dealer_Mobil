<?php
session_start();
include('config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dealer Mobil | Kontak</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta content="Author" name="WebThemez">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
    rel="stylesheet">

  <!-- Tailwind CSS File -->
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body id="body">
  <?php include('header.php');?>

  <main id="main">
    
    <section  id="contact" class="pt-32 container mx-auto ">

      <div class="flex flex-col min-h-screen justify-between w-6/12 mx-auto py-20 space-y-9 shadow-2xl p-5 w-50% " >
        
        <div class="text-center font-extrabold">
          <h2 class="font-extrabold">Isi From Berikut</h2>
          <p>Kami Akan Segera mengirim email kepada Anda</p>
        </div>

        <div class="text-[#787878] flex flex-col justify-between mx-auto w-full space-y-5">
          <input class="border  border-[#787878]-200" placeholder="Nama">
          <input class="border  border-[#787878]-200" placeholder="Pilih Jenis Kelamin">
          <input class="border  border-[#787878]-200" placeholder="Pilih Kota">
          <input class="border  border-[#787878]-200" placeholder="Pilih Mobil">
          <input class="border  border-[#787878]-200" placeholder="Alamat">
          <input class="border  border-[#787878]-200" placeholder="No Telp">
          <input class="border  border-[#787878]-200" placeholder="Pilih Kategori">
          <input class="border  border-[#787878]-200" placeholder="Email">
          <input class="border  border-[#787878]-200" placeholder="Pesan">
        </div>
        <div class="w-full text-center py-14">
          <button class="px-32 py-2 bg-[#E71D4F] text-[#FFFFFF] rounded-lg"><a class=" w-full text-center  font-bold  mx-auto" href="">Kirim</a></button>
        </div>
      </div>
      </div>
    </section><!-- #Contact -->

  </main>



  <?php include('footer.php');?>

  <!-- JavaScript -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="contact/jqBootstrapValidation.js"></script>
  <script src="contact/contact_me.js"></script>
  <script src="js/main.js"></script>

</body>

</html>