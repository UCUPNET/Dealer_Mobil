<?php
session_start();
include('config.php');
error_reporting(0);
function getMobilData() {
  global $conn;
  $query = "SELECT * from mobil limit 4";
  $result = mysqli_query($conn, $query);

  $data = array();
  while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
  }

  return $data;
}

$data_mobil = getMobilData();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Beranda</title> 
    <script src="https://cdn.tailwindcss.com"></script>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta content="Author" name="WebThemez">
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
    rel="stylesheet">
  <link rel="icon" href="img/iconlogo.png">
  <!-- Tailwind CSS File -->

  <link rel="stylesheet" href="dist/output.css">
</head>

<body>
  <?php include('header.php');?>

  <section id="about" class="mx-auto pt-56 pb-36"
    style="background : url('./img/Background_belakang.jpg') no-repeat fixed center; background-size: cover;">
    <div class="flex items-center justify-center w-10/12 mx-auto mt-10">
      <div class="flex w-8/12 container flex-col mx-auto px-10 gap-9">
        <h2 class="text-5xl font-extrabold text-white">Solusi Tepat Memilih Mobil Impian</h2>
        <p class="text-[12px] font-semibold text-white "> Selamat datang di Daihatsu Mobil Dealer, tempat di mana Anda
          dapat
          menemukan mobil impian Anda dengan kualitas terbaik dan pelayanan yang tak tertandingi.</p>
        <a class="px-6 py-2 w-6/12 text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="vehicle.php">Lihat
          Selengkapnya</a>
      </div>
      <div>
        <div><img class="-mt-36" width="600" src="./img/moblan.png" alt=""></div>
      </div>
    </div>
  </section>
  <section class="container mx-auto  px-10 mt-20">
  <div class="text-center gap-4 flex flex-col">
      <h5 class="font-bold text-[24px] text-[#E71D4F]">Vehicle</h5>
      <h3 class="font-extrabold text-[48px] text-black text-2xl">PILIH MOBIL YANG KAMU SUKA</h3>
      <p clas="">Kami menyediakan banyak mobil yang bisa
        dipilih dan disediakan</p>
    </div>
    <div class="w-10/12 mx-auto mt-10">
      <div class="flex justify-between">
      <?php foreach ($data_mobil as $row): ?>
        <div class="flex w-56 flex-col justify-center items-center px-7 py-12 shadow-lg gap-5">
          <img width="200" src="./img/<?= $row['gambar']; ?>" alt="">
          <p class="text-[#787878] text-center"><?php echo $row['model']; ?></p>
        </div>
      <?php endforeach; ?>
      </div>
  </section>

  <section class="container w-10/12 mx-auto mt-24 ">
    <div class="flex w-full items-center justify-center">
      <div class="flex w-8/12 container flex-col mx-auto px-20 gap-9">
        <h2 class="text-6xl font-extrabold text-black text-[54px]">Kenapa Pilih Mobil Daihatsu</h2>
        <p class="font-semibold text-black text-[12px]"> Kami memahami betapa pentingnya sebuah mobil dalam kehidupan Anda. Itulah
          mengapa kami dengan bangga menyajikan beragam pilihan mobil Daihatsu yang dapat disesuaikan dengan gaya hidup
          dan preferensi Anda.</p>
        <img width="300" src="./img/kenapa.svg" alt="">
      </div>
      <div><img width="800" src="./img/All_new_Alya.png" alt=""></div>
    </div>
  </section>

  <section id="about" class="py-20 mx-auto mt-20" style="background : url('./img/background_beakang.jpg') no-repeat fixed center; background-size: cover;
 ">
    <div class="flex w-10/12 mx-auto">
      <div class="flex flex-col container mx-auto px-10 justify-between ">
        <h2 class="text-6xl font-bold text-white">Layanan</h2>
        <p class="text-white text-[16px]">Kami percaya bahwa kepuasan pelanggan adalah prioritas utama. Oleh karena itu, kami
          menawarkan layanan purna
          jual yang lengkap. Tim layanan kami yang terampil dan berpengalaman akan menjaga mobil Anda tetap dalam
          kondisi
          prima</p>
        <a class="px-6 py-2 w-6/12 text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="vehicle.php">Lihat
          Selengkapnya</a>
      </div>
      <div>
        <img width="740" src="./img/luxio.png" alt="">
      </div>
    </div>



  </section>
  <?php include('footer.php');?>
</body>

</html>