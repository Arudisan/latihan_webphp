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
    $nilai1 = 4;
    $nilai2 = 2;
    $hasilplus = $nilai1 + $nilai2;
    $hasilmin = $nilai1 - $nilai2;
    $hasilkali = $nilai1 * $nilai2;
    $hasilbagi = $nilai1 / $nilai2;
    $hasilpangkat = $nilai1 ** $nilai2;
    $hasilbagi = $nilai1 % $nilai2;
    echo "Belajar PHP Mudah";
    echo "<br> <input type='text' placeholder='nilai 1' value =".$nilai1.">
    <br> <input type='text' placeholder='nilai 2' value =".$nilai2.">
    <br> <button type='submit'>Hasil ".$hasilplus."</button>";
    echo "<br>";
    //penjumlahan
    echo "Penjumlahan : ".$nilai1." + ".$nilai2." = ".$hasilplus."<br>";
    //pengurangan
    echo "Pengurangan : ".$nilai1." - ".$nilai2." = ".$hasilmin." <br>";
    //perkalian
    echo "Perkalian : ".$nilai1." x ".$nilai2." = ".$hasilkali." <br> ";
    //pembagian
    echo "Pembagian : ".$nilai1." : ".$nilai2." = ".$hasilbagi." <br> ";
    //eksponen
    echo "Perpangkatan : ".$nilai1." pangkat ".$nilai2." = ".$hasilpangkat." <br> ";
    //modulus
    echo "Hasilbagi : ".$nilai1." % ".$nilai2." = ".$hasilbagi." <br> ";

?>
</body>
</html>