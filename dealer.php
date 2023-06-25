<!DOCTYPE html>
<html>
<head>
    <title>Dealer Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body background="">
    <!-- Navigation Bar -->
    <nav class="bg-blue-500 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="#" class="text-white text-xl font-bold">Dealer Mobil</a>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-white hover:text-gray-200">Beranda</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">Mobil</a></li>
                <li><a href="halamanberanda.php" class="text-white hover:text-gray-200">Tentang Kami</a></li>
                <li><a href="halamanlayanan.php" class="text-white hover:text-gray-200">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-gray-900 py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl text-white font-bold text-center">Daihatsu Serang</h1>
            <p class="text-lg text-gray-300 mt-4 text-center">Temukan mobil impian Anda di sini dan terdekat</p>
        </div>
    </header>

    <!-- Content Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Mobil Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                // Koneksi ke database
                $host = 'localhost';  // Ganti dengan host database Anda
                $username = 'root';  // Ganti dengan username database Anda
                $password = '';  // Ganti dengan password database Anda
                $database = 'dealermobil';  // Ganti dengan nama database Anda

                $conn = new mysqli($host, $username, $password, $database);
                if ($conn->connect_error) {
                    die('Koneksi ke database gagal: ' . $conn->connect_error);
                }

                // Mengambil data mobil dari database
                $sql = "SELECT * FROM mobil";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama']; ?>" class="w-full mb-4 rounded-lg">
                            <h3 class="text-lg font-bold mb-2"><?php echo $row['nama']; ?></h3>
                            <p class="text-gray-600">Harga: <?php echo $row['harga']; ?></p>
                            <p class="text-gray-600">Tahun: <?php echo $row['tahun']; ?></p>
                        </div>
                <?php
                    }
                } else {
                    echo "<p class='mt-4'>Tidak ada mobil yang tersedia saat ini.</p>";
                }

                // Menutup koneksi ke database
                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-500 py-4">
        <div class="container mx-auto px-4 text-center">
            <p class="text-white">&copy; <?php echo date('Y'); ?> Dealer Mobil. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
