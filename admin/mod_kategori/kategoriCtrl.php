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
    $qdata = mysqli_query($connect_db,"select * from mst_kategoriblog where id_kategori=$idkey") or die(mysqli_error($connect_db));
    $data = mysqli_fetch_array($qdata);
}else if (isset($_GET['act']) && ($_GET['act']== "save")){
    /*echo "Proses berhasil" ;*/
    $namakategori = $_POST['nm_kategori'];
    /*$aktif = $_POST['ck_aktif'];*/
    echo $namakategori ; 
    mysqli_query($connect_db,"insert into mst_kategoriblog (nm_kategori)
    values ('$namakategori')") or die(mysqli_error($connect_db))
    ; 
}else if(isset($_GET['act']) && ($_GET['act']== "update")){
        $idkatgr = $_POST['id_kategori'];
        $nm_kategori = $_POST['nm_kategori'];
        $qinsert = mysqli_query($connect_db,"UPDATE mst_kategoriblog SET nm_kategori='$nm_kategori' WHERE id_kategori='$idkatgr'")
        or die (mysqli_error($connect_db));
        if($qinsert){
            //ketik proses simpan update berhasil
            header("Location: http://localhost/latihan_webphp/admin/home.php?modul=mod_kategori");
        }
    }else if(isset($_GET['act']) && ($_GET['act']== "delete")){
        //jika ada send variabel act=edit, tampil form edit/ubah data
        $idkey = $_GET['id']; //dapat dari URL
        $qdelete = mysqli_query($connect_db,"DELETE from mst_kategoriblog where id_kategori=$idkey")or die(mysqli_error($connect_db));
        if($qdelete){
            header("Location: http://localhost/latihan_webphp/admin/home.php?modul=mod_kategori");
        }
    }
    ?>
