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
    $judul = "Form Input Data" ;
}else if (isset($_GET['act']) && ($_GET['act']== "edit")){
    $judul = "Form Edit Data" ;
    $idkey = $_GET['id'];
    $qdata = mysqli_query($connect_db,"select * from mst_blog where id_blog=$idkey") or die(mysqli_error($connect_db));
    $data = mysqli_fetch_array($qdata);
}else if (isset($_GET['act']) && ($_GET['act']== "save")){
    /*echo "Proses berhasil" ;*/
    $judul = $_POST['judul'];
    $idkategori = $_POST['id_kategori'];
    $konten = $_POST['konten'];
    $autor = $_POST ['author'];
    $dateinput = $_POST['inputdate'];
    $foto = $_POST['Photo_profil'];
    echo $judul ; 
    mysqli_query($connect_db,"insert into mst_blog (judul,id_kategori,konten,author,dateinput,Photo_profil)
    values ('$judul','$idkategori','$konten','$autor','$dateinput','$foto')") or die(mysqli_error($connect_db))
    ; 
}else if(isset($_GET['act']) && ($_GET['act']== "update")){
    $idblok = $_POST['id_blog'];
    $judul = $_POST['judul'];
    $idkategori = $_POST['id_kategori'];
    $konten = $_POST['konten'];
    $autor = $_POST ['author'];
    $dateinput = $_POST['inputdate'];
    $foto = $_POST['Photo_profil'];
        $qinsert = mysqli_query($connect_db, 
        "UPDATE mst_blog SET judul='$judul', id_kategori='$idkategori',konten='$konten',author='$autor',dateinput='$dateinput',Photo_profil='$foto' WHERE id_blog='$idblok'")
        or die (mysqli_error($connect_db));
        if($qinsert){
            header("Location: http://localhost/latihan_webphp/admin/home.php?modul=mod_blog");
        }
    }else if(isset($_GET['act']) && ($_GET['act']== "delete")){
        //jika ada send variabel act=edit, tampil form edit/ubah data
        $idkey = $_GET['id']; //dapat dari URL
        $qdelete = mysqli_query($connect_db,"DELETE from mst_blog where id_blog=$idkey")or die(mysqli_error($connect_db));
        if($qdelete){
            header("Location: http://localhost/latihan_webphp/admin/home.php?modul=mod_blog");
        }
    }
    ?>
