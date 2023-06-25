<?php
// Menghubungkan ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'dealer_mobil';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

// Fungsi untuk menambahkan data pengguna
function tambahDataPengguna($username, $password) {
    global $conn;
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $query);
}

// Proses pendaftaran pengguna
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    tambahDataPengguna($username, $password);

    // Redirect ke halaman login setelah pendaftaran berhasil
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="signup.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="signup" value="Sign Up">
    </form>
</body>
</html>

<?php
// Menutup koneksi ke database
mysqli_close($conn);
?>
