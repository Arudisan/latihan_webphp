<?php
if (isset($_GET['act']) && ($_GET['act']== "update" || $_GET['act']== "save")){
require_once('../../config/koneksi_db.php') ;
require_once('../../config/config.php') ;
}else{
    require_once('../config/koneksi_db.php') ;
    require_once('../config/config.php') ;
}
if (isset($_GET['act']) && ($_GET['act']== "add")){
    $judul = "form input data" ;
}else if (isset($_GET['act']) && ($_GET['act']== "save")){
    $email = $_POST['email'];
    $namalkp = $_POST['namalengkap'];
    $info = $_POST['infor'];
    $keterangan = $_POST['keterangan'];
    mysqli_query($connect_db,"insert into tabel_responden (email,nama_lengkap,informasi,keterangan)
    values ('$email','$namalkp','$info','$keterangan')") or die(mysqli_error($connect_db))
    ; 
}