<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan PhP</title>
</head>
<body>
    <?php
    $nilai = array (60,70,80,75,90) ;
    sort($nilai);
    echo '<br>';
    var_dump($nilai);
    echo '<br>'.$nilai[0];
    $namamhs = array("dina"=> 80,"sinta"=> 90,"Nia"=> 85);
    echo '<br>';
    var_dump($namamhs);
    echo'<br>'.$namamhs["sinta"];
    for($i=2; $i <=13; $i++){
       echo$i."," ; 
    }
    echo '<hr>' ;
    $a = 0;
    while( $a <= 13){
        if($a >= 2){
            echo $a."," ;
        }
       $a++; 
    }
    echo "<br>";
    echo "<hr>";
    $b = 0 ;
    do{
      if($b>=2){
          echo $b.",";
      }  
      $b++;
    }while($b <= 13);
    echo "<br>";
    echo "<hr>";
    for($i=1; $i <=30; $i++ ){
        if ( $i%2==0 ){
            echo "<b>".$i.","."</b>" ;
        }else {
            echo "<u>".$i.","."</u>" ;
        }
     }
     echo "<br>";
     echo "<hr>";

     $mhs = array ("putra","ardi","galang","adit","sulthan","agung");
     foreach($mhs as $m){
         echo $m."," ;
     }
     echo "<br>".$mhs[1];
    /*echo $mhs[1] ;*/ 
    echo "<br>";
    echo "<hr>";
    $databrg = array (
        array ("kode"=>"B01","nama"=>"buku","harga"=>"50000"),
        array ("kode"=>"B02","nama"=>"Pulpen","harga"=>"10000"),
        array ("kode"=>"B03","nama"=>"Penghapus","harga"=>"5000")
    );
    foreach ($databrg as $m){
        echo $m["kode"].","."<br>" ;
        /*echo $m["nama"].","."<br>" ;
        echo $m["harga"].","."<br>" ;*/
    }
    echo "<br>";
    echo "<hr>";
    
    ?>  
</body>
</html>