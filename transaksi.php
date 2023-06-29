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
    <script src="https://cdn.tailwindcss.com"></script>
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

    <section class="container w-10/12 mx-auto py-20 px-20 ">
        <div class="mb-7">
            <h2 class="font-extrabold text-4xl mb-10 mt-10">Transaksi</h2>
        </div>
    <div class="shadow-lg flex rounded-md mx-auto justify-center gap-9 p-10">
        <div class="flex flex-col gap-8 border-r-2 text-xs">
            <div class="flex justify-center pt-10 pb-10 ">
                <img class="w-2/3 " src="./img/Rocky.png" alt="">
            </div>
            <h3 class="font-extrabold text-black">Informasi Mobil</h3>
            <div class="flex justify-between mb-10">
                <div class="flex gap-14">
                    <div class="flex flex-col gap-5">
                        <p>Make :</p>
                        <p>Year :</p>
                        <p>VIN :</p>
                        <P>Color :</P>
                        <p>Door :</p>
                    </div>
                    <div class="font-bold text-black flex flex-col gap-5">
                        <p>Daihatsu</p>
                        <p>21</p>
                        <p>OOWAJWAN981H</p>
                        <P>Red/Black</P>
                        <p>4 Pintu</p>
                    </div>
                </div>
                <div class="flex gap-14">
                    <div class="flex flex-col gap-5">
                        <p>Engine :</p>
                        <p>Transmition :</p>
                        <p>Seat :</p>
                        <P>Interior Color :</P>
                        <p>Drive :</p>
                    </div>
                    <div class="font-bold text-black flex flex-col gap-5 ">
                        <p>996 cc </p>
                        <p>Automatic</p>
                        <p>4 Seat</p>
                        <P>Hitam</P>
                        <p>Kanan</p>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between">
            <h3 class="font-extrabold text-3xl ">Daihatsu Rocky 
                <br>(2021)</h3>
            
                <div class="flex gap-14 mt-5">
                    <div class="flex flex-col gap-5  ">
                        <p>Jumlah :</p>
                        <p>Sub Total :</p>
                        <p>Nama Pembeli :</p>
                        <P>Tanggal Transaksi :</P>
                        <p>Total</p>
                    </div>
                    <div class="font-bold text-black flex flex-col gap-5 w-6/12 ">
                        <input placeholder="-Input Nama-"> 
                        <p>134.000.000</p>
                        <input placeholder="-Nama-">
                        <input placeholder="-Input Data Tangal-">
                        <p class="font-extrabold text-xl text-[#E71D4F]"> Rp.134.000.000</p>
                    </div>
                </div>
                <div>
                    <a class="px-6 py-2 w-full mb-16 mt-5 inline-block text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="transaksi.php">Beli
                        Sekarang</a>
                </div>
            
        </div>
    </div>
    </section>
    <?php include('footer.php');?>
</body>

</html>