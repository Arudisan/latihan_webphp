<?php
session_start() ;
require_once('../config/koneksi_db.php') ;
require_once('../config/config.php') ;
include_once ('../admin/mod_blog/blogCtrl.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-light bg-dark fixed-top">
  <div class="container-fluid d-flex" style="color:white;">
    <b><a class="navbar-brand" style="color:white;" href="#"> LP3I BC SURABAYA </a></b>
    <?php
            $photo= mysqli_query($connect_db,"select * from mst_blog where id_blog = 36")or die("gagal akses tabel mst_blog".mysqli_error($connect_db));
            while($row = mysqli_fetch_array($photo)){
            ?>
            <img src="<?php echo $row['Photo_profil'];?>" width="10px" height="10px">
            <?php
            }
            ?>
    <?php echo "Selamat Datang ".$_SESSION['userlogin'] ;
    ?>
    <a class="nav-link active" aria-current="page" href="logout.php" style="color: white;">  <b> | Sign Out</b></a>
  </div>
</nav>
   <div class="row pt-2">
       <div class="col-md-2"> 
        <div class="row"><h5> Menu kiri</h5></div>
        <div class="col"> 
            <?php
           include_once('menu.php') ;
           ?>
        </div>
       </div>  
       <div class="col-md-10 pt-4"> 
           <?php
           if(isset($_GET['modul'])){
               include "".$_GET['modul']."/index.php";
           }
           ?>
       </div>
       <div class="col-md-1"> 
   </div>
</body>
<footer class="footer bg-dark" style="position:fixed; bottom:0 ; " >
    <div class="row">
      <b><h6 style="color:white;"> <i class="bi bi-code"> </i> Design by Arudi </h6></b> 
    </div>
</footer>
</html>