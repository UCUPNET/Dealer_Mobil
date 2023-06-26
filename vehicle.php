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
    <section class="">
        <img class="w-full pt-20" src="./img/Iklan.jpg" alt="">
        <h2 class="font-extrabold text-3xl text-center my-10">Pilih Mobil yang anda suka</h2>
        <div class="grid grid-cols-4 w-10/12 mx-auto gap-4 my-12 ">
            <div class="flex flex-col justify-center items-center px-7 py-12 shadow-lg gap-5 rounded-xl">
                <img width="200" src="./img/Sigera.png" alt="">
                <p class="text-[#787878] text-center">Daihatsu Sigera</p>
                <p class="text-[#E71D4F] font-extrabold text-center">Rp135.000.000</p>
                <a class="px-6 py-2  text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="">Lihat
                    Selengkapnya</a>
            </div>
            <div class="flex flex-col justify-center items-center px-7 py-12 shadow-lg gap-5 rounded-xl">
                <img width="200" src="./img/All_new_Alya.png" alt="">
                <p class="text-[#787878] text-center">All New Ayla</p>
                <p class="text-[#E71D4F] font-extrabold text-center">Rp134.000.000</p>
                <a class="px-6 py-2  text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="">Lihat
                    Selengkapnya</a>
            </div>
            <div class="flex flex-col justify-center items-center px-7 py-12 shadow-lg gap-5 rounded-xl">
                <img width="200" src="./img/Rocky.png" alt="">
                <p class="text-[#787878] text-center">Daihatsu Rocky</p>
                <p class="text-[#E71D4F] font-extrabold text-center">Rp207.000.000</p>
                <a class="px-6 py-2  text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="cardetail.php">Lihat
                    Selengkapnya</a>
            </div>
            <div class="flex flex-col justify-center items-center px-7 py-12 shadow-lg gap-5 rounded-xl">
                <img width="200" src="./img/All_new_sirion.png" alt="">
                <p class="text-[#787878] text-center">All New Sirion</p>
                <p class="text-[#E71D4F] font-extrabold text-center">Rp228.000.000</p>
                <a class="px-6 py-2  text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="">Lihat
                    Selengkapnya</a>
            </div>
            <div class="flex flex-col justify-center items-center px-7 py-12 shadow-lg gap-5 rounded-xl">
                <img width="200" src="./img/Terios.png" alt="">
                <p class="text-[#787878] text-center">Terios</p>
                <p class="text-[#E71D4F] font-extrabold text-center">Rp204.000.000</p>
                <a class="px-6 py-2  text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="">Lihat
                    Selengkapnya</a>
            </div>
            <div class="flex flex-col justify-center items-center px-7 py-12 shadow-lg gap-5 rounded-xl">
                <img width="200" src="./img/xenia.png" alt="">
                <p class="text-[#787878] text-center">Xenia</p>
                <p class="text-[#E71D4F] font-extrabold text-center">Rp218.000.000</p>
                <a class="px-6 py-2  text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="">Lihat
                    Selengkapnya</a>
            </div>
            <div class="flex flex-col justify-center items-center px-7 py-12 shadow-lg gap-5 rounded-xl">
                <img width="200" src="./img/Grand_Max_Pu.png" alt="">
                <p class="text-[#787878] text-center">Grand Max Pu</p>
                <p class="text-[#E71D4F] font-extrabold text-center">Rp157.000.000</p>
                <a class="px-6 py-2  text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="">Lihat
                    Selengkapnya</a>
            </div>
            <div class="flex flex-col justify-center items-center px-7 py-12 shadow-lg gap-5 rounded-xl">
                <img width="200" src="./img/luxio.png" alt="">
                <p class="text-[#787878] text-center">Luxio</p>
                <p class="text-[#E71D4F] font-extrabold text-center">Rp218.000.000</p>
                <a class="px-6 py-2  text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="">Lihat
                    Selengkapnya</a>
            </div>
        </div>
    </section>

    <?php include('footer.php');?>
</body>

</html>