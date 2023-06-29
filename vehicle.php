<?php
session_start();
include('config.php');
error_reporting(0);
function getMobilData() {
    global $conn;
    $query = "SELECT * from mobil limit 8";
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
        <?php foreach ($data_mobil as $row): ?>
            <div class="flex flex-col justify-center items-center px-7 py-12 shadow-lg gap-5 rounded-xl">
                <img width="200" src="./img/<?= $row['gambar']; ?>" alt="">
                <p class="text-[#787878] text-center"><?php echo $row['model']; ?></p>
                <p class="text-[#E71D4F] font-extrabold text-center">Rp<?php echo $row['harga']; ?></p>
                <a class="px-6 py-2  text-center rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="">Lihat
                    Selengkapnya</a>
            </div>
        <?php endforeach; ?>
            
        </div>
    </section>

    <?php include('footer.php');?>
</body>

</html>