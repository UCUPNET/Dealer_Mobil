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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

    <!-- Tailwind CSS File -->

    <link rel="stylesheet" href="dist/output.css">
</head>

<body>
    <?php include('header.php');?>
   <section class="w-10/12 mx-auto ">
    <div class="flex pt-40">
        <div>
            <img class="mb-20" src="./img/Logo_Rocky_slice_banner 1.png" alt="">
            <h2 class="font-extrabold">Ringanan Cicilan</h2>
            <div class="flex">
                <p class="text-[#787878]">3 bulan</p>
                <p class="text-[#E71D4F] font-bold">45jt/Bulan</p>
            </div>
            <div class="flex">
                <p class="text-[#787878]">6 bulan</p>
                <p class="text-[#E71D4F] font-bold">23jt/Bulan</p>
            </div>
            <div class="flex">
                <p class="text-[#787878]">2 Tahun</p>
                <p class="text-[#E71D4F] font-bold">6jt/Bulan</p>
            </div>
            <div class="flex">
                <p class="text-[#787878]">5 Tahun</p>
                <p class="text-[#E71D4F] font-bold">2,5jt/Bulan</p>
            </div>
            <div>
                <h2 class="font-extrabold"> Contact Dealer </h2>
                <div class="flex">
                    <img src="./img/telp.png" alt="">
                    <p class="text-[#E71D4F] font-bold">0827391272310</p>
                </div>
                <div class="flex">
                    <img src="./img/ig_1.png" alt="">
                    <p class="text-[#E71D4F] font-bold">daihatsuindo</p>
                </div>
                <div class="flex">
                    <img src="./img/twiter.png" alt="">
                    <p class="text-[#E71D4F] font-bold">daihatsuindo_</p>
                </div>
            </div>
            <img src="./img/iklan_2.png" alt="">
        </div>
       
        <div>
            <img src="./img/Rocky.png" alt="">
            <div>
                <h3 class="font-bold">Daihatsu Rocky (2021)</h3>
                <p class="text-[#E71D4F]">Rp134.000.000</p>
            </div>
            <a class="px-6 py-2 w-6/12 text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="">Beli Sekarang</a>
        </div>
    </div>
   </section>
    <?php include('footer.php');?>
</body>

</html>