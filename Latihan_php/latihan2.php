<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $waktu = 111 ;
    $ontime = "Silahkan Masuk kelas dan Belajar";
    $overtime = "Kamu terlambat silahkan Push up";
    if ($waktu <= 8 ){
        echo $ontime ;
    }else {
        echo $overtime ;
    }
    ?>
    <br>
    <br>
    <br>
    <? 
     $agung = "kecelakaan" ;
     $terluka = "iya" ;
     $motor ="rusak" ;
     if($agung= "kecelakaan" ){
         if($terluka ="iya"){
         echo "segera periksa ke dokter ya" ;
     }else{
        echo "Agung Istirahat ya!!" ;
     } 
     }else if ($agung="tidak kecelakaan" ){
        echo "Semoga agung sehat dan hati2 di jalan" ;
     }else{
        if ($motor ="rusak"){
            echo "jangan lupa bawa motor ke bengkel" ;
        }  
     } 

     $nama ="agung" ;
     $kecelakaan = true ;
     $luka = true ;
     $motor = true ;
     if($kecelakaan = 1 ){
        if($luka = 1 ){
            echo "Segera ke dokter !" ;
            if ($motor = 1){
                echo "<br> Service motor !" ;
            }
     }else{
        echo $nama."silahkan istirahat !";
    }
}else {
        echo"Semoga".$nama."sehat dan hati-hati di jalan !" ;
    }
    ?>
</body>
</html>