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
    header('Location: loginpage.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="icon" href="img/iconlogo.png">
</head>
<body>
<section style="background : url('./img/Background_belakang.jpg') no-repeat fixed center; background-size: cover;" class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-18 h-8 mr-2" src="img/logo.png" alt="logo">    
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Create and account
              </h1>
              <form class="space-y-4 md:space-y-6" action="" method="post">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input type="email" name="username" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div>
                      <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                      <input type="password" name="password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                      </div>
                  </div>
                  <button type="submit" class="w-full text-black bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" name="signup" value="Sign Up">Create an account</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      Already have an account? <a href="loginPage.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
</body>
</html>

<?php
// Menutup koneksi ke database
mysqli_close($conn);
?>
