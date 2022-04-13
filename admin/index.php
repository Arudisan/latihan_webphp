<!DOCTYPE html>
<?php
require_once('../config/koneksi_db.php') ;
require_once('../config/config.php') ;
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../asset/bootstrap/style.css" />
  </head>
  <!-- onload="alert('Halloo');" -->
  <body id="loginpage" onload="">
    <div class="container d-flex justify-content-center mt-3 pt-4">
      <form class="bg-light p-4" action="ceklogin.php" method="POST">
        <div class="alert alert-danger" role="alert" id="alert" style="display: none"></div>
        <div class="alert alert-success" role="alert" id="alertok" style="display: none"></div>
        <div id="judul" class="mt-3"> </div>
        <div class="text-center"><h6>PLEASE LOGIN !</h6></div>
        <hr />
        <div class="mb-4">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="username" />
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" />
        </div>
        <div class="row">
          <div class="col-md-3"><button type="submit" name="btnlogin" class="btn btn-primary">Login</button> </div>
          <div class="col-md-4"></div>
          <div class="col-md-3"><a href="../index.php" class="btn btn-primary"> Home </a></div>
        </div>
        <div class="text-center pt-3" style="font-size: x-small">  Created by rudikun </div>
      </form>
    </div>
    <!-- modal untuk tampilkan loading -->
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/javascript/main.js" type="text/javascript"></script>
  </body>
</html>
