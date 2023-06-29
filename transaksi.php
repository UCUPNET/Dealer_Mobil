<?php
$host = 'localhost';
$db   = 'dealer_mobil';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    die();
}

// Ambil daftar mobil
$query = $conn->query("SELECT * FROM mobil");
$mobil = $query->fetchAll(PDO::FETCH_ASSOC);

// Proses form transaksi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mobil_id = $_POST['mobil_id'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $tanggal_transaksi = $_POST['tanggal_transaksi'];
    $jumlah_beli = $_POST['jumlah_beli'];

    // Ambil data mobil berdasarkan ID
    $query = $conn->prepare("SELECT * FROM mobil WHERE id = :mobil_id");
    $query->bindParam(':mobil_id', $mobil_id);
    $query->execute();
    $data_mobil = $query->fetch(PDO::FETCH_ASSOC);

    // Hitung total harga
    $total_harga = $data_mobil['harga'] * $jumlah_beli;

    // Simpan transaksi ke database
    $query = $conn->prepare("INSERT INTO transaksi (pelanggan_id, tipe_pembayaran, jumlah, tanggal_transaksi) VALUES (:pelanggan_id, :tipe_pembayaran, :jumlah, :tanggal_transaksi)");
    $query->bindParam(':pelanggan_id', $pelanggan_id);
    $query->bindParam(':tipe_pembayaran', $tipe_pembayaran);
    $query->bindParam(':jumlah', $jumlah);
    $query->bindParam(':tanggal_transaksi', $tanggal_transaksi);
    $query->execute();

    $query = $conn->prepare("INSERT INTO sub_transaksi (transaksi_id, mobil_id, nama_mobil, harga, jumlah) VALUES (:transaksi_id, :mobil_id, :nama_mobil, :harga, :jumlah)");
    $query->bindParam(':transaksi_id', $transaksi_id);
    $query->bindParam(':mobil_id', $mobil_id);
    $query->bindParam(':nama_mobil', $nama_mobil);
    $query->bindParam(':harga', $harga);
    $query->bindParam(':jumlah', $jumlah);
    $query->execute();
    // Redirect ke halaman utama setelah transaksi berhasil disimpan
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dealer Mobil</title>
</head>
<body>
    <h1>Dealer Mobil</h1>

    <h2>Daftar Mobil</h2>
    <table>
        <tr>
            <th>Merk</th>
            <th>Model</th>
            <th>Harga</th>
        </tr>
        <?php foreach ($mobil as $m) : ?>
            <tr>
                <td><?= $m['merk']; ?></td>
                <td><?= $m['model']; ?></td>
                <td><?= $m['harga']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Form Transaksi</h2>
    <form method="post" action="">
        <label for="mobil_id">Pilih Mobil:</label>
        <select id="mobil_id" name="mobil_id">
            <?php foreach ($mobil as $m) : ?>
                <option value="<?= $m['id']; ?>"><?= $m['merk'] . ' ' . $m['model']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="nama_pembeli">Nama Pembeli:</label>
        <input type="text" id="nama_pembeli" name="nama_pembeli" required><br>

        <label for="tanggal_transaksi">Tanggal Transaksi:</label>
        <input type="date" id="tanggal_transaksi" name="tanggal_transaksi" required><br>

        <label for="jumlah_beli">Jumlah Beli:</label>
        <input type="number" id="jumlah_beli" name="jumlah_beli" min="1" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
