<?php
$servername ="localhost";
$database ="dblatihan";
$userdb ="root";
$pass_db ="" ;

$connect_db = mysqli_connect($servername,$userdb,$pass_db,$database);
if(!$connect_db){
    echo "<h3>koneksi gagal</h3>" ;
    exit ;
}else{
    echo "<h3>koneksi berhasil</h3>" ;
}
?>