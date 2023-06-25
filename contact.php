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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Tailwind CSS File -->
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body id="body">
  <?php include('header.php');?>

  <main id="main">
    <section id="contact" class="pt-32 wow fadeInUp">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-2/3">
            <div class="bg-white shadow p-6 rounded-lg mb-6">
              <h3 class="text-xl font-semibold mb-4">Formulir Kontak</h3>
              <form action="#" method="post" role="form" class="php-email-form">
                <div class="flex flex-wrap mb-4">
                  <div class="w-full md:w-1/2">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                  </div>
                  <div class="w-full md:w-1/2 mt-2 md:mt-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Pesan Anda" required></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </div>
              </form>
            </div>
          </div>

          <div class="w-full lg:w-1/3">
            <div class="bg-white shadow p-6 rounded-lg mb-6">
              <h3 class="text-xl font-semibold mb-4">Informasi Kontak</h3>
              <p>Jalan Raya No. 123<br>Kota Anda, Negara Anda</p>
              <p><strong>Telepon:</strong> +123456789</p>
              <p><strong>Email:</strong> info@example.com</p>
              <div class="social-links mt-4">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #Contact -->

  </main>

  

  <?php include('footer.php');?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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
