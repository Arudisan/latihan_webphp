<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
   <header> 
       <marquee behavior=" " direction=""scrollamount="20 " > BeLajar Web Programming </marquee>
   </header>
   <div class="row">
       <div class="col-md-2"> 
        <div class="row"><h5> Menu kiri</h5></div>
        <div class="col"> 
            <?php
           include_once('menu.php') ;
           ?>
        </div>
       </div>  
       <div class="col-md-10"> 
           <?php
           if(isset($_GET['modul'])){
               include "".$_GET['modul']."/index.php";
           }
           ?>
       </div>
   </div>
</body>
</html>