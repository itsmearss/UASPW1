<?php 
require 'function.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('Berhasil membuat user baru, silahkan login');
          </script>";
  } else {
    echo mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
  </head>
  <body>
    <section class="">
      <div class="container py-5">
        
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
              <div class="img" style="background-image: url(img/hero5.jpg)"></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h4 class="mb-4">Register To Tegal Smart City</h4>
                  </div>
                  
                </div>
                <form action="" class="signin-form" method="POST">
                  <div class="form-group mb-3">
                    <label class="label" for="longname">Long Name</label>
                    <input type="text" name="longname" class="form-control" placeholder="Long Name" required />
                  </div>
                  <div class="form-group mb-3">
                    <label class="label" for="name">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required />
                  </div>
                  <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                  </div>
                  <div class="form-group mb-3">
                    <label class="label" for="confirmpassword">Confirm Password</label>
                    <input type="password" name="confirm" class="form-control" placeholder="Confirm Password" required />
                  </div>
                  <div class="form-group">
                    <button type="submit" class="form-control btn rounded submit px-3" name="register">Register</button>
                  </div>
                 
                </form>
                <p class="text-center">Already a member? <a data-toggle="tab" href="login.php" style="color: #0e3055">Log In</a></p>
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
