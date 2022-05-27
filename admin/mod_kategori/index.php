<?php
include_once ('kategoriCtrl.php');
?>
<?php
if(!isset($_GET['act'])){
?>
<a href="?modul=mod_kategori&act=add" class="btn btn-primary btn-xs mb-1"> <i class="bi bi-folder-plus "> </i> Tambah Data </a>
<table class="table table-bordered "> 
    <tr> 
        <th> Id Kategori </th>
        <th> Nama Kategori</th>
        <th> Action </th>
    <?php
    $qry_listmenu= mysqli_query($connect_db,"select * from mst_kategoriblog order by id_kategori DESC")or die("gagal akses tabel mst_kategoriblog".mysqli_error($connect_db));
    while($row = mysqli_fetch_array($qry_listmenu)){
    ?>
    <tr>
        <td><?php echo $row['id_kategori'];?></td>
        <td><?= $row['nm_kategori']; ?></td>
        <td>
            <div class="d-grid gap-1 d-md-block">
            <a href="?modul=mod_kategori&act=edit&id=<?= $row['id_kategori']; ?>" class="btn btn-xs btn-primary"> <i class="bi bi-pencil-square" > </i> edit </a>
            <a href="?modul=mod_kategori&act=delete&id=<?= $row['id_kategori']; ?>" class="btn btn-xs btn-warning "> <i class="bi bi-x-lg"></i> Delete</a>
            </div>
      </td>
    </tr>
    <?php
    }
    ?>
   <?php
}else if (isset($_GET['act']) && ($_GET['act']== "add")){
?>
<div class="row">
    <h3><?php echo $judul; ?></h3>
    <form action="mod_kategori/kategoriCtrl.php?modul=mod_kategori&act=save" method="post">
    <div class="row pt-2">
    <div class="col-md-2"> 
  </div>  
  <div class="col-md-5"> 
    <input type="hidden" name="id_kategori" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="nm_kategori" >Nama Kategori </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="nm_kategori" class="form-control">  
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
    <form action="mod_kategori/kategoriCtrl.php?modul=mod_kategori&act=update" method="post">
    <div class="row pt-2">
    <div class="col-md-2"> 
  </div>  
  <div class="col-md-5"> 
    <input type="hidden" name="id_kategori" class="form-control" value="<?php echo $data['id_kategori'];?>">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="nm_kategori" > Nama Kategori </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="nm_kategori" class="form-control" value="<?php echo $data['nm_kategori'];?>">  
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