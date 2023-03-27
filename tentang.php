<?php 
session_start();

require 'function.php';

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

if(isset($_POST["kirim"])){
    if (tambah($_POST)>0) {
      echo "<script> 
      alert('Berhasil mengirim pesan');
      </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <title>Tentang</title>
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
              <a class="nav-link" href="index.php">BERANDA</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="smart.php">SMART-CITY</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link active" href="#" style="color: lightskyblue">TENTANG</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- About Me -->
    <section id="tentang">
      <div class="container py-4">
        <!-- Judul Section -->
        <h3 class="text-center py-2">About Me</h3>
        <div class="row py-4">
          <div class="col-lg-2"></div>
          <!-- foto -->
          <div class="col-lg-3 text-center">
            <img class="" src="img/foto.jpg" alt="foto" style="height: 320px" />
          </div>
          <div class="col-lg-6">
            <h4 style="margin-top: 5px; text-decoration: underline; font-weight: bold">Annur Riyadhus Solikhin</h4>
            <h5 style="margin-top: -8px">21090096 | 3D</h5>
            <!-- Link -->
            <ul>
              <li>
                <a href=""> <i class="bi bi-whatsapp"></i> 085642240515</a>
              </li>
              <li>
                <a href=""><i class="bi bi-instagram"></i> annurrs_</a>
              </li>
              <li>
                <a href=""><i class="bi bi-linkedin"></i> Annur Riyadhus Solikhin</a>
              </li>
              <li>
                <a href=""><i class="bi bi-envelope"></i> annurriyadhus17@gmail.com</a>
              </li>
            </ul>
            <!-- Link -->
            <h4 style="margin-top: 30px">
              Sarjana Terapan Teknik Informatika <br />
              POLITEKNIK HARAPAN BERSAMA
            </h4>
            <p style="margin-top: 3px">
              Jl. Dewi Sartika No.71, Pesurungan Kidul, <br />
              Kec. Tegal Barat, Kota Tegal, Jawa Tengah 52117
            </p>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
    </section>
    <!-- End About Me -->

    <!-- Contact Me -->
    <section id="contact">
      <div class="container py-5 elemen">
        <div class="row text-center">
          <div class="col py-4">
            <h3>Contact Me</h3>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <!-- Form -->
            <form method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" required/>
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Message</label>
                <textarea class="form-control" id="Pesan" rows="3" name="pesan" required></textarea>
              </div>
              <button type="submit" class="btn" name="kirim">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Me -->

    <!-- Footer -->
    <footer>
      <div class="container py-5 elemen">
        <div class="row">
          <div class="col-lg-4">
            <p>Tegal Smart City</p>
            <p><b>Kantor: </b></p>
            <p>
              Jl. Ki.Gede Sebayu No.12, Mangkukusuman, <br />
              Kec. Tegal Timur, Kota Tegal, Jawa Tengah 52131
            </p>
            <ul>
              <li><i class="bi bi-telephone"></i> (0283) 351001</li>
              <li><i class="bi bi-envelope"></i> diskominfo@tegalkota.go.id</li>
            </ul>
          </div>
          <div class="col-lg-4"></div>
          <div class="col-lg-4">
            <br />
            <p><b>Social Media:</b></p>
            <div class="row">
              <div class="col-lg-6">
                <a href=""><i class="bi bi-facebook"></i> Facebook</a>
              </div>
              <div class="col-lg-6">
                <a href=""><i class="bi bi-instagram"></i> Instagram</a>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <a href=""><i class="bi bi-linkedin"></i> LinkedIn</a>
              </div>
              <div class="col-lg-6">
                <a href=""><i class="bi bi-youtube"></i> YouTube</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Copyright -->
    <section id="cr">
      <p>Copyright &copy ARSPEDIA 2023</p>
    </section>
    <!-- End Copyright -->
    <script src="js/script.js"></script>
  </body>
</html>
