<?php

include "service/database.php";
$register_message = "";

if (isset($_POST["button"])) {
  $username = $_POST["nama"];
  $pesan = $_POST["pesan"];
  $nomer_handphone = $_POST["nomer_handpone"];

  $mysqli = "INSERT INTO pesan (username, pesan, nomer_handphone) VALUES ('$username', '$pesan', '$nomer_handphone')";

  if ($db->query($mysqli)) {
    $register_message = "data telah masuk";
  } else {
    $register_message = "data belum masuk";
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=, initial-scale=1.0" />
  <title>Document</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

  <!-- father icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- my fonts -->
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">SIDO<span>JODO</span>.</a>

    <div class="navigation">
      <a href="#">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="navbarex">
      <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="search"><i data-feather="search"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navbar end -->

  <!-- Hero Section Start-->
  <section class="hero" id="home">
    <main class="content">
      <h1>HIDUP SEHAT DENGAN <span>MINUM JAMU</span></h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
        blanditiis.
      </p>
      <a href="#" class="cta">Beli Sekarang</a>
    </main>
  </section>
  <!-- Hero Section end-->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2>TENTANG KAMI</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/about-img.jpg" />
      </div>
      <div class="content">
        <h3>Kenapa Anda Harus Memilih Jamu Kami?</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Dignissimos vitae necessitatibus dolorem rem. Ipsam nesciunt
          placeat, pariatur ab voluptate obcaecati.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
          inventore deserunt, dolores esse animi vero corrupti cupiditate
          mollitia laboriosam quae, suscipit cum error soluta.
        </p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!--menu section start-->

  <section id="menu" class="menu">
    <div>
      <h2>Menu Kami</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, rem.
        Lorem ipsum dolor sit amet.
      </p>
    </div>

    <div class="row">
      <div class="menu-card">
        <img src="img/menu1-kunyit.jpg" alt="KUNIR ASEM" class="menu-card-img" />
        <h3 class="menu-card-tittle">KUNIR ASEM (KUNYIT ASAM)</h3>
        <p class="menu-card-price">- IDR 20.000 -</p>
      </div>
      <div class="menu-card">
        <img src="img/menu1-kunyit.jpg" alt="Espresso" class="menu-card-img" />
        <h3 class="menu-card-tittle">KUNIR ASEM (KUNYIT ASAM)</h3>
        <p class="menu-card-price">- IDR 20.000 -</p>
      </div>
      <div class="menu-card">
        <img src="img/menu1-kunyit.jpg" alt="Espresso" class="menu-card-img" />
        <h3 class="menu-card-tittle">KUNIR ASEM (KUNYIT ASAM)</h3>
        <p class="menu-card-price">- IDR 20.000 -</p>
      </div>
      <div class="menu-card">
        <img src="img/menu1-kunyit.jpg" alt="Espresso" class="menu-card-img" />
        <h3 class="menu-card-tittle">KUNIR ASEM (KUNYIT ASAM)</h3>
        <p class="menu-card-price">- IDR 20.000 -</p>
      </div>
      <div class="menu-card">
        <img src="img/menu1-kunyit.jpg" alt="Espresso" class="menu-card-img" />
        <h3 class="menu-card-tittle">KUNIR ASEM (KUNYIT ASAM)</h3>
        <p class="menu-card-price">- IDR 20.000 -</p>
      </div>
    </div>
  </section>
  <!--menu section end -->

  <!--contact section start-->
  <section id="contact" class="contact">
    <h2>KONTAK KAMI</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium,
      facere.
    </p>

    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d844.4160084497294!2d114.19514619666975!3d-8.444002529112975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1712672259812!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

      <form action="index.php" method="POST">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama" name="nama" />
        </div>
        <div class="input-group">
          <i data-feather="message-square"></i>
          <input type="text" placeholder="pesan" name="pesan" />
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="nomer hp" name="nomer_handpone" />
        </div>
        <button class="button" name="button">kirim pesan</button>
      </form>
    </div>
  </section>
  <!--contact section end-->

  <!-- footer section start-->

  <div class="footer">
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="paragraff">
      <p>Hak Cipta © Muhamad Ariq Naufal 2024</p>
      <hr />
      <p class="footers">
        Seluruh konten, gambar, dan materi lainnya di situs web ini dilindungi
        oleh undang-undang hak cipta. Tidak diperbolehkan untuk menduplikasi,
        menyalin, atau menggunakan konten ini tanpa izin tertulis dari
        pemiliknya.
      </p>
    </div>
  </div>
  <!-- footer section end-->

  <!-- My icons-->
  <script>
    feather.replace();
  </script>

  <!-- My javascript-->
  <script src="js/script.js"></script>
</body>

</html>