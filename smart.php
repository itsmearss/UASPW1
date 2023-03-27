<?php 
session_start();
require 'function.php';

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

$hasil=mysqli_query($conn, "SELECT * FROM komentar");

if (isset($_POST["kirim"])) {
  if (komentar($_POST) > 0) {
    echo "<script> 
    alert('Komentar berhasil ditambahkan!');
    document.location.href = 'smart.php';
    </script>";
  } else {
    "<script> 
    alert('komentar gagal ditambahkan !');
    document.location.href = 'smart.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tegal Smart City</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
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
              <a class="nav-link" href="index.php">BERANDA</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="#" style="color: lightskyblue">SMART-CITY</a>
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

    <!-- Tegal Smart City -->
    <section id="smartcity">
      <div class="container py-5 mt-5">
        <div class="row mt-5">
          <div class="col-lg-6">
            <h2>
              <br />
              TEGAL SMART CITY
            </h2>
            <p>
              Sebuah konsep tatanan kota yang mampu <br />
              memberikan solusi terhadap permasalahan kota
            </p>
          </div>
          <div class="col-lg-6 zoom">
            <img src="img/ss.PNG" alt="ss" style="width: 600px" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Tegal Smart City -->

    <!-- Master Plan -->
    <section id="master-plan">
      <div class="container py-5 text-center elemen">
        <h3>MASTER PLAN SMART CITY</h3>
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="card" style="width: 18rem">
              <img src="img/mp1.jpg" class="card-img-top" alt="mp1" />
              <div class="card-body">
                <h5 class="card-title">DUKUNGAN INFRASTRUKTUR TEKNOLOGI INFORMASI</h5>
                <p class="desc">Kebutuhan infrastruktur komunikasi untuk penyelenggaraan pemerintah kota harus diperhatikan ketersediaannya diberbaga...</p>
                <a href="https://smartcity.tegalkota.go.id/index.php/master_plan/5" class="btn">LIHAT SELENGKAPNYA</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card" style="width: 18rem">
              <img src="img/mp2.jpg" class="card-img-top" alt="mp2" />
              <div class="card-body">
                <h5 class="card-title">ARSITEKTUR CLOUD TEGAL SMART CITY</h5>
                <p class="desc">Cloud Computing Kota Tegal Layanan Cloud tersedia oleh Kominfo Kota Tegal sehingga Perangkat Daerah akan fokus pad...</p>
                <a href="https://smartcity.tegalkota.go.id/index.php/master_plan/4" class="btn">LIHAT SELENGKAPNYA</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card" style="width: 18rem">
              <img src="img/mp3.jpg" class="card-img-top" alt="mp3" />
              <div class="card-body">
                <h5 class="card-title">
                  OPERATION/SITUATION <br />
                  ROOM
                </h5>
                <p class="desc">Operation Center Smart City menggabungkan 3 aspek pemenuhan platform yaitu People, Process dan Technology dan juga mengi...</p>
                <a href="https://smartcity.tegalkota.go.id/index.php/master_plan/3" class="btn">LIHAT SELENGKAPNYA</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Master Plan -->

    <!-- Dimensi Smart City -->
    <section id="dimensi-sc">
      <div class="container py-5 text-center elemen">
        <h3>DIMENSI SMART CITY</h3>
        <div class="row">
          <div class="col-lg-4">
            <div class="card" style="width: 22rem">
              <div class="card-body">
                <p class="ikon"><i class="bi bi-briefcase"></i></p>
                <h5 class="card-title">SMART GOVERNANCE</h5>
                <p class="card-text">
                  Smart Governance Smart Governance diartikan sebagai tata kelola kota yang pintar serta tata pamong pemerintahan daerah yang secara cerdas mampu mengubah pola-pola tradisional dalam birokrasi sehingga menghasilkan business
                  process yang lebih cepat, efektif, efisien, komunikatif dan selalu melakukan perbaikan. Smart Governance harus dapat diimplementasikan ke dalam tiga unsur antara lain yaitu:1. Pelayanan (service). 2. Birokrasi
                  (bureaucracy). 3. Kebijakan (policy).
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card" style="width: 22rem">
              <div class="card-body">
                <p class="ikon"><i class="bi bi-microsoft"></i></p>
                <h5 class="card-title">SMART BRANDING</h5>
                <p class="card-text">
                  Smart Branding merupakan sebuah inovasi dalam memasarkan daerahnya sehingga mampu meningkatkan daya saing, serta mampu menarik partisipasi masyarakat baik dari dalam maupun luar daerah, pelaku bisnis dan investor untuk
                  mendorong percepatan pembangunan daerahnya. Sasaran dari smart branding yaitu adanya peningkatan daya saing daerah baik dari aspek ekonomi maupun kehidupan sosial. Adapun unsur smart branding meliputi tiga hal yaitu: 1.
                  Tourism branding : membangun dan memasarkan ekosistem pariwisata. 2. Business branding : membangun dan memasarkan ekosistem bisnis daerah. 3. City appearance branding : membangun dan memasarkan wajah kota. .
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card" style="width: 22rem">
              <div class="card-body">
                <p class="ikon"><i class="bi bi-calculator"></i></p>
                <h5 class="card-title">SMART ECONOMY</h5>
                <p class="card-text">
                  Smart Economy dalam Smart City dimaksudkan untuk mewujudkan ekosistem perekonomian di daerah yang mampu memenuhi tantangan di era informasi saat ini. Sasaran dari dimensi smart economy untuk mewujudkan ekosistem yang
                  mendukung aktivitas ekonomi masyarakat yang selaras dengan sektor ekonomi unggulan daerah serta meningkatkan financial literacy masyarakat melalui berbagai program. Tiga unsur dalam smart economy meliputi: 1. Ekosistem
                  industri (Industry), 2. Peningkatan kesejahteraan masyarakat (Welfare), 3. Ekosistem transaksi keuangan (Transaction).
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="card" style="width: 22rem">
                <div class="card-body">
                  <p class="ikon"><i class="bi bi-lightning"></i></p>
                  <h5 class="card-title">SMART LIVING</h5>
                  <p class="card-text">
                    Smart Living merupakan dimensi Smart City yang menjamin kelayakan taraf hidup masyarakat berdasarkan tiga elemen yaitu: kelayakan pola hidup, kelayakan kualitas kesehatan, dan kelayakan moda transportasi untuk mendukung
                    mobilitas. Smart Living terdiri atas tiga indikator unsur yang terdiri atas: 1. Mewujudkan Tata Ruang Wilayah yang selaras dan layak (Harmony), 2. Membangun Prasarana Kesehatan (Health), 3. Menjamin Ketersediaan Sarana.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card" style="width: 22rem">
                <div class="card-body">
                  <p class="ikon"><i class="bi bi-people-fill"></i></p>
                  <h5 class="card-title">SMART SOCIETY</h5>
                  <p class="card-text">
                    Smart society memfokuskan pada manusia sebagai unsur utama sebuah kota, dimana interaksi antar-warga terjalin semakin kuat dan tanpa sekat dengan kemajuan teknologi yang ada. Tiga elemen unsur di dalam smart society,
                    yaitu: 1. Interaksi masyarakat yang efisien (community), 2. Ekosistem edukasi yang efisien (learning), 3. Sistem keamanan masyarakat (security).
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card" style="width: 22rem">
                <div class="card-body">
                  <p class="ikon"><i class="bi bi-globe2"></i></p>
                  <h5 class="card-title">SMART ENVIRONMENT</h5>
                  <p class="card-text">
                    Smart Environment merupakan pengelolaan tata kelola lingkungan dalam pembangunan kota dengan cara cerdas dengan memperhatikan faktor lingkungan hidup guna mewujudkan tata kelola lingkungan yang baik, bertanggung-jawab,
                    dan berkelanjutan. Adapun unsur dalam smart environment meliputi: 1. Program perlindungan terhadap lingkungan (Protection), 2. Pengembangan tata kelola sampah dan limbah (Waste), 3. Pengembangan tata kelola energi yang
                    bertanggungjawab (Energy).
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Dimensi Smart City -->

    <!-- Gallery -->
    <section id="gallery">
      <div class="container py-5 text-center elemen">
        <h3>Galeri</h3>
        <div class="row mt-5">
          <div class="col lg-6 zoom-in">
            <img src="img/tgl1.jpg" alt="tgl1" />
          </div>
          <div class="col lg-6 zoom-in">
            <img src="img/tgl2.jpg" alt="tgl2" />
          </div>
          <div class="col lg-6 zoom-in">
            <img src="img/tgl3.jpg" alt="tgl3" />
          </div>
          <div class="col lg-6 zoom-in">
            <img src="img/tgl4.jpg" alt="tgl4" />
          </div>
        </div>
        <div class="row mt-4">
          <div class="col lg-6 zoom-in">
            <img src="img/tgl5.jpg" alt="tgl5" />
          </div>
          <div class="col lg-6 zoom-in">
            <img src="img/tgl6.jpg" alt="tgl6" />
          </div>
          <div class="col lg-6 zoom-in">
            <img src="img/tgl7.jpg" alt="tgl7" />
          </div>
          <div class="col lg-6 zoom-in">
            <img src="img/tgl8.PNG" alt="tgl8" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Gallery -->

    <!-- Komentar -->
    <section id="komentar">
      <div class="comtainer py-5 justify-content-center text-center elemen">
        <h3>Komentar</h3>
        <p class="mt-3 mb-5">Kirimkan momenmu pada saat di Tegal</p>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <form action="" method="POST" class="signin-form" enctype="multipart/form-data">
              <div class="form-group mb-3">
                <label class="label" for="name">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" required />
              </div>
              <div class="form-group mb-3">
                <label class="label" for="foto">Unggah Foto</label> <br />
                <input type="file" name="foto" id="foto" />
              </div>
              <div class="form-group mb-3">
                <label class="label" for="password">Deskripsi</label> <br />
                <textarea name="desk" id="desk" cols="30" rows="3" class="form-control" placeholder="Deskripsi..." required></textarea>
              </div>
              <button type="submit" class="form-control btn rounded submit px-3" style="background-color: lightskyblue" name="kirim">Kirim</button>
              <div class="form-group d-md-flex"></div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Komentar -->

    <!-- Moment -->
    <section id="moment">
      <div class="container py-5 elemen">
        <div>
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <?php while($komen = mysqli_fetch_array($hasil)) { ?>
              <div class="row mt-3">
                <div class="col-lg-4">
                  <img src="moment/<?php echo $komen['foto'];?>" alt="foto" />
                </div>
                <div class="col-lg-8">
                  <p style="font-weight: bold"><?php echo $komen["nama"];?></p>
                  <p><?php echo $komen["deskripsi"];?></p>
                  <?php echo "
                  <tr>
                  <td><a href=\"ubah.php?id=$komen[id]\">Edit</a> -
                      <a href=\"hapus.php?id=$komen[id]\" onclick=\"return confirm('yakin?');\">Hapus</a>
                  </td>
                  </tr>
                  "?>
                   <p class="mt-4">-------------------------------------------------------</p>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Moment -->

    <!-- Maps -->
    <section id="maps">
      <div class="container py-5 text-center elemen">
        <h3>Maps Tegal</h3>
        <iframe
          class="mt-4"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63378.673884153046!2d109.08221999328403!3d-6.870569428931957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9dfbf3264c3%3A0x3027a76e352bbe0!2sTegal%2C%20Kota%20Tegal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1673634067546!5m2!1sid!2sid"
          width="90%"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>
    <!-- End Maps -->

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
