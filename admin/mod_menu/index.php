<?php
include_once ('menuCtrl.php');
if(!isset($_GET['act'])){
?>
<a href="?modul=mod_menu&act=add" class="btn btn-primary btn-xs mb-1"> <i class="bi bi-folder-plus "> </i> Tambah Data </a>
<table class="table table-bordered "> 
    <tr> 
        <th> ID Menu</th>
        <th> Nama Menu</th>
        <th>link </th>
        <th>Action </th>
    </tr>
    <?php
    $qry_listmenu= mysqli_query($connect_db,"select * from mst_menu order by id_menu DESC")or die("gagal akses tabel mst_menu".mysqli_error($connect_db));
    while($row = mysqli_fetch_array($qry_listmenu)){
    ?>
    <tr>
        <td><?php echo $row['id_menu'];?></td>
        <td><?= $row['nama_menu']; ?></td>
        <td><?php echo $row['link']; ?></td>
        <td>
            <div class="d-grid gap-1 d-md-block">
            <a href="?modul=mod_menu&act=edit&id=<?= $row['id_menu']; ?>" class="btn btn-xs btn-primary"> <i class="bi bi-pencil-square" > </i> edit </a>
            <a href="" class="btn btn-xs btn-primary"> <i class="bi bi-trash-3"> </i> Hapus </a>
            </div>
      </td>
    </tr>
    <?php
    }
    ?>
</table>
<?php
}else if (isset($_GET['act']) && ($_GET['act']== "add")){
?>
<div class="row">
    <h3><?php echo $judul; ?></h3>
    <form action="mod_menu/menuCtrl.php?modul=mod_menu&act=save" method="post">
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label"> Nama Menu </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="txt_nmmenu" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="txt_link" > link </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="txt_link" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
  </div>  
  <div class="col-md-5"> 
   <input type="checkbox" name="ck_aktif"/> active
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
   </div>  
    <div class="col-md-5"> 
    <div class="d-grid gap-2 d-md-block">
    <button class="btn btn-secondary" type="reset" ><i class="bi bi-x" name="reset" > </i> Batal </button>
    <button class="btn btn-primary" type="submit"><i class="bi bi-download" name="simpan" > </i> Simpan </button>
    </div>
    <div class="col-md-1"></div>
    </div>

    </form> 
  </div>  
</div>
<?php
}
else if (isset($_GET['act']) && ($_GET['act']== "edit")){

?>
<div class="row">
    <h3><?php echo $judul; ?></h3>
    <form action="mod_menu/menuCtrl.php?modul=mod_menu&act=save" method="post">
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label"> Nama Menu </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="txt_nmmenu" class="form-control" value="<?php echo $data['nama_menu'];?>">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="txt_link" > link </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="txt_link" class="form-control" value="<?php echo $data['link'];?>">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
  </div>  
  <div class="col-md-5"> 
   <input type="checkbox" name="ck_aktif" <?php echo $check; ?>/> active
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
   </div>  
    <div class="col-md-5"> 
    <div class="d-grid gap-2 d-md-block">
    <button class="btn btn-secondary" type="reset" ><i class="bi bi-x" name="reset" > </i> Batal </button>
    <button class="btn btn-primary" type="submit"><i class="bi bi-download" name="simpan" > </i> Simpan </button>
    </div>
    <div class="col-md-1"></div>
    </div>

    </form> 
  </div>  
</div>
<?php
}
?>

