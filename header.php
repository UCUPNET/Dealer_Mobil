<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="dist/output.css">
</head>
<body>
  
</body>
</html>
<header id='header' class="w-full border-b fixed z-20">
    <div class="container mx-auto flex items-center justify-between h-20">
      <div id="logo" class="pull-left">
        <a class="text-xl font-semibold" href="index.php">
        <img src="img/logo.png" alt="" title="" width="200" height="auto" />
        </a>
      </div>

        <div class="flex items-center justify-between space-x-6">
            <a class="text-base menu-active" href="index.php">Beranda</a>
            <a class="text-base " href="about.php">Tentang Kami</a>
            <a class="text-base " href="services.php">Layanan</a>
            <a class="text-base " href="contact.php">Kontak</a>
            <a href="login.php" class="text-base">Login</a>
            <a href="signup.php" class="text-base">Sign Up</a>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
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
