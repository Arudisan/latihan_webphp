<?php
if (isset($_GET['act']) && ($_GET['act']== "update" || $_GET['act']== "save")){
require_once('../../config/koneksi_db.php') ;
require_once('../../config/config.php') ;
}else{
    require_once('../config/koneksi_db.php') ;
    require_once('../config/config.php') ;
}
security_login() ;
if (isset($_GET['act']) && ($_GET['act']== "add")){
    $judul = "form input data" ;
}else if (isset($_GET['act']) && ($_GET['act']== "edit")){
    $judul = "form edit data" ;
    $idkey = $_GET['id'];
    $qdata = mysqli_query($connect_db,"select * from mst_menu where id_menu=$idkey") or die(mysqli_error($connect_db));
    $data = mysqli_fetch_array($qdata);
    $aktif = $data['is_active'];
    if($aktif == 1){
        $check = "checked";
    }else{
        $check = "";
    }
}else if (isset($_GET['act']) && ($_GET['act']== "save")){
    /*echo "Proses berhasil" ;*/
    $namamenu = $_POST['txt_nmmenu'];
    $ling = $_POST['txt_link'];
    /*$aktif = $_POST['ck_aktif'];*/
    if(isset($_POST['ck_aktif'])){
        $aktif = 1 ;
    }else{
        $aktif = 0 ;
    }
    echo $namamenu ; 
    mysqli_query($connect_db,"insert into mst_menu(nama_menu,link,is_active)
    values ('$namamenu','$ling',$aktif)") or die(mysqli_error($connect_db))
    ; 
}else if(isset($_GET['act']) && ($_GET['act']== "update")){

}   
?>
