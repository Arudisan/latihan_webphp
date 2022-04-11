<?php
$userdb = "ardi";
$passdb = md5("12345");
$txt_user = $_POST['username'];
$txt_pass = md5($_POST['password']);

if ( $txt_user === $userdb && $txt_pass===$passdb){
    echo "login anda berhasil";
    header("location: http://localhost/latihan_webphp/admin/home.php");
}else{
    echo "Username dan password anda salah";
    header("location: http://localhost/latihan_webphp/admin/index.php");
}
/*echo $txt_user;
echo $txt_pass;*/
?>
