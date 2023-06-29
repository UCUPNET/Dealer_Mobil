<?php
// Membaca data pembayaran yang dikirimkan oleh pengguna
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalHarga = $_POST["total_harga"];
    $uangMuka = $_POST["uang_muka"];
    $tenor = $_POST["tenor"];
    
    // Menghitung jumlah yang harus dibayar setiap bulan
    $jumlahAngsuran = ($totalHarga - $uangMuka) / $tenor;
}
?>

<!DOCTYPE html>
<html>
<head>  
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Fitur Finansial dan Pembayaran</title>
</head>
<body>
    <div class="w-full lg:w-1/3 text-center">
        <div class="bg-white shadow p-6 rounded-lg mb-6">
            <i class="text-3xl text-blue-500 ion-android-options"></i>
            <h3 class="text-xl font-semibold mt-4">Pilihan Finansial</h3>
            <p class="mt-4">Kami menyediakan berbagai opsi finansial seperti kredit dan leasing untuk memudahkan pembelian mobil.</p>
        </div>
    </div>
    
    <div class="w-full lg:w-1/3 text-center">
        <div class="bg-white shadow p-6 rounded-lg mb-6">
            <h3 class="text-xl font-semibold mt-4">Pembayaran</h3>
            
            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <label for="total_harga">Total Harga Mobil:</label>
                <input type="number" name="total_harga" id="total_harga" required><br><br>
                
                <label for="uang_muka">Uang Muka:</label>
                <input type="number" name="uang_muka" id="uang_muka" required><br><br>
                
                <label for="tenor">Tenor (bulan):</label>
                <input type="number" name="tenor" id="tenor" required><br><br>
                
                <input type="submit" value="Hitung Pembayaran">
            </form>
            
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <h4 class="text-lg font-semibold mt-4">Rincian Pembayaran:</h4>
                <p>Jumlah Angsuran per Bulan: <?php echo $jumlahAngsuran; ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
