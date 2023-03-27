<?php 
session_start();

require 'function.php';

//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) { //mengecek apakah ada cookie?
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  //ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  //cek cookie dan username
  if($key === hash('sha256', $row['username'])) {//mengambil username berdasarkan id lalu diacak menggunakan hash dan di cocokan dengan key
    $_SESSION['login'] = true; //jika username sama maka session login akan menjadi true
  }
}

if (isset($_SESSION["login"])) { //jika sessionnya ada, pindahkan ke index
  header("Location: index.php");
  exit;
}

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  //cek username
  if (mysqli_num_rows($result) === 1) {
    //cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      //set session
      $_SESSION["login"] = true;

      //cek remember me
      if (isset($_POST['remember'])) {
        //buat cookie
        setcookie('id', $row['id'], time()+360); //membuat cookie dengan mengambil id user
        setcookie('key', hash('sha256', $row['username']), time()+360); //membuat cookie dengan mengambil username kemudian di enkripsi untuk mengamankan website
      }
      header("Location: index.php");
      exit;
    } 
  }

  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
  </head>
  <body>
    <section class="log">
      <div class="container py-5">
        <div class="row justify-content-center">
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
              <div class="img" style="background-image: url(img/hero5.jpg)"></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h2 class="mb-4">Log In To Tegal Smart City</h2>
                  </div>
                </div>
                <form action="" method="POST" class="signin-form">
                  <?php if (isset($error)) { ?>
                    <p style="color: red;">Username/Password tidak sesuai!</p>
                  <?php } ?>
                  <div class="form-group mb-3">
                    <label class="label" for="name">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required />
                  </div>
                  <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                  </div>
                  <div class="form-group">
                    <button type="submit" class="form-control btn rounded submit px-3" name="login">Login</button>
                  </div>
                  <div class="form-group d-md-flex">
                  <div class="w-50 text-left">
                      <label class="checkbox-wrap mb-0"
                        >Remember Me
                        <input type="checkbox" class="form-check-input-primary" style="color: #0e3055" name="remember" id="remember" />
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>


                </form>
                <p class="text-center">Not a member? <a data-toggle="tab" href="registrasi.php" style="color: #0e3055">Sign Up</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
