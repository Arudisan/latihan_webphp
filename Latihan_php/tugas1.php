<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../asset/bootstrap/style.css" />
    <title>Tugas 1 PHP</title>
</head>
<body>
    <?php
    echo " isi dari file B <br> " ; 
    include 'includes/../stringfc.php';
    include_once 'includes/../../index.php';
    include 'includes/../latihan_array.php';
    define('Nama','Muhammad Ardiansyah');
    echo Nama ;
    echo "Contoh fungsi explode";
     echo "<br>" ;

     $kalimat = "Saya sedang belajar fungsi explode implode" ;

     //fungsinya untuk memecahkan string menjadi array //
     $kalimat = explode(" ",$kalimat);

     //string nya menjadi array
     print_r($kalimat);
     

     echo "<br>" ;
     echo "<br>" ;
     echo "<br>" ;
     echo "contoh fungsi implode " ;
     echo "<br>" ;
     echo implode(" ",$kalimat) ;
    $kata = "saya sedang berpuasa       " ;
    echo $kata . "<br>" ;
    echo trim($kata);
    echo "ini contoh fungsi strrchr "."<br>" ;
    echo strrchr("hello world! what a beautiful day!","what")."<br>" ;
    echo "<hr/>";
    echo "ini contoh fungsi substr "."<br>" ;
    $notelp ="1234567891011" ;
    echo substr($notelp,3);
    echo "<hr/>";
    echo "ini contoh fungsi str_replace "."<br>" ;
    $nim ="1722 160 43";
    echo str_replace(" ","-",$nim);
    echo "<hr/>";
    echo "ini contoh fungsi strtolower "."<br>" ;
    echo strtolower("SELAMAT MALAM") ;
    echo "<hr/>";
    echo "ini contoh fungsi strtoupper "."<br>" ;
    echo strtoupper("silimit milim") ;
    echo "<hr/>";
    echo "ini contoh fungsi explode "."<br>" ;
    $kalimat = "Saya sedang belajar fungsi explode implode" ;
    $kalimat = explode(" ",$kalimat);
    print_r($kalimat);
    echo "Pembulatan Dengan <b>Round() Pembulatan biasa </b>";
    echo "round(5.7) = ".round(5.7)."<br>";
    echo "<hr/>";
    echo "Pembulatan Dengan <b>ceil() Pembulatan Keatas </b>";
    echo "ceil(8.2345) = ".ceil(8.2345)."<br>";
    echo "<hr/>";
    echo "Pembulatan Dengan <b>floor() Pembulatan kebawah</b>";
    echo "floor(5.7) = ".floor(5.7)." //<b>pembulatan kebawah<br>";
    echo "<hr/>";
    
    
    
    
    
    //menggunakan format number//
    echo "<b>convert menggunakan number_format<b>"."<br>";
    $nilai ="95.821";
    echo number_format($nilai)."<br>";
    echo number_format($nilai, 2)."<br>";
    //menggunakan type casting//
    echo "<b>convert menggunakan typecasting<b>"."<br>";
    echo (int)$nilai, "\n"."<br>";
    // Typecast menggunakan float
    echo (float)$nilai, "\n"."<br>";
    echo "<b>convert menggunakan intval dan floatval<b>"."<br>";
    //menggunakan intval//
    echo intval($nilai), "\n"."<br>";
    //menggunakan floatval//
    echo floatval($nilai)."<br>";
    ?>
</body>
</html>