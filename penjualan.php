<!DOCTYPE html>
<html>
<head>
    <title>Penjualan Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <section id="services" class="wow fadeInUp" style="background-image: url('img/vehicleimages/car_755x430.png');">
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

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Daftar Mobil yang Tersedia</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php
            // Koneksi ke database
            $host = 'localhost';  // Ganti dengan host database Anda
            $username = 'root';  // Ganti dengan username database Anda
            $password = '';  // Ganti dengan password database Anda
            $database = 'dealer_mobil';  // Ganti dengan nama database Anda

            $conn = new mysqli($host, $username, $password, $database);
            if ($conn->connect_error) {
                die('Koneksi ke database gagal: ' . $conn->connect_error);
            }

            // Mengambil data mobil dari database
            $sql = "SELECT * FROM mobil";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='bg-white rounded-lg shadow-md p-4'>";
                    echo "<h2 class='text-lg font-bold mb-2'>{$row['nama']}</h2>";
                    echo "<p class='text-gray-600'>Lokasi: {$row['lokasi']}</p>";
                    echo "</div>";
                }
            } else {
                echo "<p class='mt-4'>Tidak ada mobil yang tersedia saat ini.</p>";
            }

            // Menutup koneksi ke database
            $conn->close();
            ?>
        </div>

    </div>
</body>
</html>
