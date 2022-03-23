<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition PHP</title>
</head>
<body>
    <H1> hallloooo </H1>
    <?php
    $pembeli = "Ana";
    $uang =1000;
    switch ($uang){
    case $uang>=9500000 :
        $hasil= $pembeli.""." membeli laptop asus";
        break;
    case $uang>=15000000 :
        $hasil= $pembeli.""." membeli laptop Hp";
        break;
        default:
        $hasil= $pembeli.""."Tidak punya uang";
        break;
    }
    echo $hasil;
    ?>
    <hr>
    <hr>
    <?php 
    $pembeli ="Ana" ;
    $toko="ASE ";
    $kodebrg ="B01";
    $jml_beli="4"; 
    if ($kodebrg ="B01"){
        $namabarang="buku";
        $harga = 50000;
        //conditional diskon
        if($jml_beli >= 3){
            $diskon =$jml_beli*3000 ;   
        }
        $total = ($harga*$jml_beli )- $diskon;
        $hasil = $toko."<br>".$kodebrg." ".$namabarang." beli sebanyak ".$jml_beli."<br> Jumlah dibayar :".$total ; 
       }else if ($kodebrg==="B02"){
          $namabarang="Pulpen";
           $harga = 10000; 
           if($jml_beli >= 6){
           $diskon=$jml_beli*2000;
           }
       }  else if ($kodebrg=="B03"){
        $namabarang= "penghapus";
        $harga= 5000;  
       }
    echo $hasil;
    ?>
</body>
</html>