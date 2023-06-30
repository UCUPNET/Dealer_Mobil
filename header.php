<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title> 
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="dist/output.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
  
</body>
</html>
<header id='header' class="w-full border-b fixed z-20 bg-white ">
    <div class="container mx-auto flex items-center justify-between px-20  h-20 w-10/12">
      <div id="logo" class="pull-left">
        <a class="text-xl font-semibold" href="index.php">
        <img src="img/logo.png" alt="" title="" width="150" height="auto" />
        </a>
      </div>
        <div class="flex items-center justify-between space-x-6">
            <a class="text-base menu-active" href="index.php">Beranda</a>
            <a class="text-base menu-active" href="vehicle.php">Vehicle</a>
            <a class="text-base " href="about.php">Tentang Kami</a>
            <a class="text-base " href="contact.php">Kontak Kami</a>
        </div>

        <div>
          <?php 
            if(!$_SESSION['username']){
          ?>
          <a class = "px-5 py-1 rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="loginpage.php">Login</a>
          <a class = "px-5 py-1 rounded-lg font-bold  text-[#E71D4F]" href="signup.php">Register</a>
          
          <?php } else{?>
              <a class = "px-5 py-1 rounded-lg font-bold bg-[#E71D4F] text-[#FFFFFF]" href="logout.php">Logout</a>
            <?php } ?>
          

        </div>
    </div>
</header>

<script>
  const header = document.querySelector('#header')
    document.addEventListener('scroll',() => {
      if(this.scrollY > 100) {
        header.classList.add("bg-white")
      } 
      if(this.scrollY < 100){
        header.classList.remove('bg-white')
      }
    })
</script>
