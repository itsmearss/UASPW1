<?php 
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
require 'function.php';

//ambil data di url

$id = $_GET["id"];

//query data komentar berdasarkan id
$komen = query("SELECT * FROM komentar WHERE id = $id")[0];

if (isset($_POST["kirim"])) {
    if (ubah($_POST) > 0) {
      echo "<script> 
      alert('Komentar berhasil diedit!');
      document.location.href = 'smart.php';
      </script>";
    } else {
      "<script> 
      alert('komentar gagal diedit!');
      document.location.href = 'smart.php';
      </script>";
    }
  }
?> 
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <title>Edit Komentar</title>
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
              <a class="nav-link" href="tentang.php" style="color: lightskyblue">TENTANG</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Edit Komentar -->
    <section id="komentar">
      <div class="container py-5 justify-content-center text-center">
        <h3>Edit Komentar</h3>
        <div class="row justify-content-center">
          <div class="col-lg-4 mt-3">
            <form action="" method="POST" class="signin-form" enctype="multipart/form-data">
              <input type="hidden" name = "id" value="<?= $komen["id"]; ?>">
              <div class="form-group mb-3">
                <label class="label" for="name">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" required value="<?= $komen["nama"]; ?>"/>
              </div>
              <div class="form-group mb-3">
                <label class="label" for="password">Deskripsi</label> <br />
                <textarea name="desk" id="desk" cols="30" rows="3" class="form-control"  required ><?= $komen["deskripsi"]; ?></textarea>
              </div>
              <button type="submit" class="form-control btn rounded submit px-3" style="background-color: lightskyblue" name="kirim">Edit</button>
              <div class="form-group d-md-flex"></div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Edit Komentar -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</body>
</html>