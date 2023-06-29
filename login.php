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

// Fungsi untuk melakukan login
function login($username, $password) {
    global $conn;
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        session_start();
        $_SESSION['username'] = $user['username'];
        header('Location: dashboardutama.php');
        exit();
    } else {
        return false;
    }
}

// Proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = login($username, $password);
    if (!$result) {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body background="img/aboutus.jpg">
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="login" value="Login">
    </form>

    <p>Belum punya akun? <a href="signup.php">Daftar di sini</a></p>

    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>

<?php
// Menutup koneksi ke database
mysqli_close($conn);
?>
