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
    function pesan($alert){	
        echo '<script language="javascript">';
        echo 'alert("'.$alert.'")';  //not showing an alert box.
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0; url=http://localhost/latihan_webphp/admin/home.php?modul=mod_blog">';	
    }
    /*echo "Proses berhasil" ;*/
    $file = $_FILES['gambar']; 
	var_dump($file);	
	/*tentukan folder lokasi direktori penyimpanan file */
	$target_dir = "../../asset/img/";
	echo $file['name']."<br/>"; //output ini yang disimpan ke database
	/*tujuan penyimpanan file, direktori dan nama file*/
	$target_file = $target_dir.$file['name']; 
	echo $target_file."<br/>";
	/*untuk mendapatkan tipe file yang diupload */
	$type_file = pathinfo($file['name'],PATHINFO_EXTENSION);
	/*buat variabel untuk menampung hasil validasi ,
	apakah file boleh diupload atau tidak, jika 1 maka boleh diupload,
	jika 0 maka tidak dapat diupload*/	
	$is_upload = 1;
	/* cek batas limit file maks.3MB*/
	if($file['size'] > 5000000){
		$is_upload = 0;
		pesan("File lebih dari 1MB!!");		
	}
	/**cek tipe file */
	if($type_file != "jpg"){
		$is_upload = 0;
		pesan("Tipe file bukan file gambar!!");	
	}
	/**buat variabel untuk menampung nama file yang akan disimpan ke database,
	 * dengan nilai awal kosong, akan di beri nilai jika upload berhasil
	 */
	$namafile = "";
	/**proses upload */
	if($is_upload == 1){
		if(move_uploaded_file($file['tmp_name'], $target_file)){
			$namafile = $file['name']; //variabel ini yang di panggil di query
			pesan("Berhasil upload file gambar!!");	
		}
		else{
			pesan("GAGAL upload file gambar!!");	
		}
	}
    $judul = $_POST['judul'];
    $idkategori = $_POST['id_kategori'];
    $konten = $_POST['konten'];
    $autor = $_POST ['author'];
    $dateinput = $_POST['inputdate'];
    echo $judul ; 
    mysqli_query($connect_db,"insert into mst_blog (judul,id_kategori,konten,author,dateinput,gambar)
    values ('$judul','$idkategori','$konten','$autor','$dateinput','$namafile')") or die(mysqli_error($connect_db))
    ; 
}else if(isset($_GET['act']) && ($_GET['act']== "update")){
    $idblok = $_POST['id_blog'];
    $judul = $_POST['judul'];
    $idkategori = $_POST['id_kategori'];
    $konten = $_POST['konten'];
    $autor = $_POST ['author'];
    $dateinput = $_POST['inputdate'];
        $qinsert = mysqli_query($connect_db, 
        "UPDATE mst_blog SET judul='$judul', id_kategori='$idkategori',konten='$konten',author='$autor',dateinput='$dateinput',gambar='$namafile' WHERE id_blog='$idblok'")
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
