<?php
require_once('../config/koneksi_db.php') ;
require_once('../config/config.php') ;

/*$userdb = "ardi";
$passdb = md5("12345");
$txt_user = $_POST['username'];
$txt_pass = md5($_POST['password']);*/

/*if ( $txt_user === $userdb && $txt_pass===$passdb){
    echo "login anda berhasil";
    header("location: http://localhost/latihan_webphp/admin/home.php");
}else{
    echo "Username dan password anda salah";
    header("location: http://localhost/latihan_webphp/admin/index.php");
}
/*echo $txt_user;
echo $txt_pass;*/
if(isset($_POST['btnlogin'])){
    $txt_user = $_POST['username'];
    $txt_pass = md5($_POST['password']);
    $result = mysqli_query($connect_db,"select * from mst_userlogin where username ='".$txt_user."' AND password ='".$txt_pass."'");
    if(mysqli_num_rows($result)> 0){
        session_start();
        $_SESSION['userlogin']= $txt_user ;
        echo "hasil =".mysqli_num_rows($result);
        header("Location: ".URL."home.php");
    }else{
        header("Location: ".URL."");
    }
}
?>
