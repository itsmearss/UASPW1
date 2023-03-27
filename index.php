<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beranda</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg main-nav">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/Kab.png" alt="kab" /> <img src="img/kota.png" alt="kota" /> <a href="" class="navbar-brand">SMART-CITY</a></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <li class="nav-item px-2">
              <a class="nav-link" href="#" style="color: lightskyblue">BERANDA</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="smart.php">SMART-CITY</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="tentang.php">TENTANG</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Hero -->
    <section id="hero">
      <div class="container py-5 text-center">
        <h2 class="">
          <br />
          <br />
          <br />
          SELAMAT DATANG DI WEBSITE <br />
          TEGAL SMART CITY
        </h2>
        <p>"Smart governance, smart branding, smart economy, smart society, smart living, smart environment"</p>
        <button type="button" class="btn" href="smart.php"><a href="smart.php">GO TO SMART CITY PAGE</a></button>
      </div>
    </section>
    <!-- End Hero -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
