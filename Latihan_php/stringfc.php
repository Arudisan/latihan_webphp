<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StringFC</title>
</head>
<body>
    <?php
    $word="saya sedang belajar php";
    $word= explode(" ",$word);
    var_dump($word);
    echo $word[3];
    echo "<br>" ;
    echo date("l,d-F-Y");
    echo "<br>" ;
    echo "tanggal hari ini".date("d-m-y")."atau".date("Y-m-d");
    echo "<br>" ;
    date_default_timezone_set('Asia/Jakarta');
    echo "waktu sekarang"."=".date("d-m-Y H:i:s")."<br>" ;
    echo "hari ini".date("l,d-F-Y").date("H:i:s");

    $tgllahir= date_create("22-02-1998");
    $tglhariini = date("d-m-Y");
    $umur = date_diff($tgllahir,date_create($tglhariini));
    echo "<br>" ;
    echo "umur = ".$umur->format('%y tahun %m bulan');
    echo "umur = ".$umur->format('%a');

    function datapribadi(){
        $nama = "Muhammad Ardiansyah";
        $alamat = "Pandaan Pasuruan";
        echo "nama".$nama.'<br>'.'alamat'.$alamat;
    }
    "<br>".datapribadi() ;

    function ceksaldo($saldo,$akun,$test="buku"){
    if($saldo >= 3000000 ){
        $thr= $saldo*10/100 ;   
    }else if($saldo>=1000000){
        $thr=$saldo*20/100 ;  
    }else{
        $thr = 0;
    }
    return $thr."dari saldo".$saldo." dari akun".$akun.$test ;
    }
    echo "kamu Mendapatkan:".ceksaldo(4000000,"Ardi","kintil");
    ?>

</body>
</html>