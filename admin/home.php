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
        $menu = array (
            array ( "id"=>"01","nm_menu"=>"dashboard","link"=>""),
            array ( "id"=>"02","nm_menu"=>"Blog","link"=>""),
            array ( "id"=>"03","nm_menu"=>"Berita","link"=>"mod_berita")
        );
        foreach ($menu as $mn){
       ?>
       <a href="<?php echo $mn['link'] ?>">
           <li class="list-group-item"><?php echo $mn['nm_menu'];?></li>
        </a>  
            <?php } ?>
        </div>
       </div>  
       <div class="col-md-10"> </div>
   </div>
</body>
</html>