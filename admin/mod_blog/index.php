        <?php
        include_once ('blogCtrl.php');
        ?>
        <?php
        if(!isset($_GET['act'])){
        ?>
        <a href="?modul=mod_blog&act=add" class="btn btn-primary btn-xs mb-1"> <i class="bi bi-folder-plus "> </i> Tambah Data </a>
        <table class="table table-bordered "> 
            <tr> 
                <th> Id Blog</th>
                <th> Judul </th>
                <th> Id_kategori</th>
                <th> Konten </th>
                <th> Author</th>
                <th> Dateinput </th>
                <th> foto </th>
                <th> Action </th>
            <?php
            $qry_listmenu= mysqli_query($connect_db,"select * from mst_blog order by id_blog DESC")or die("gagal akses tabel mst_blog".mysqli_error($connect_db));
            while($row = mysqli_fetch_array($qry_listmenu)){
            ?>
            <tr>
                <td><?php echo $row['id_blog'];?></td>
                <td><?= $row['judul']; ?></td>
                <td><?php echo $row['id_kategori']; ?></td>
                <td><?php echo $row['konten'];?></td>
                <td><?= $row['author']; ?></td>
                <td><?php echo $row['dateinput']; ?></td>
                <td><?php echo $row['gambar']; ?></td>
                <td>
                    <div class="d-grid gap-1 d-md-block">
                    <a href="?modul=mod_blog&act=edit&id=<?= $row['id_blog']; ?>" class="btn btn-xs btn-primary"> <i class="bi bi-pencil-square" > </i> edit </a>
                    <a href="?modul=mod_blog&act=delete&id=<?= $row['id_blog']; ?>" class="btn btn-xs btn-danger "> <i class="bi bi-x-lg"></i> Delete</a>
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
            <form action="mod_blog/blogCtrl.php?modul=mod_blog&act=save" method="post" enctype="multipart/form-data">
            <div class="row pt-2">
                <div class="col-md-2"> 
            </div>  
            <div class="col-md-5"> 
                <input type="hidden"name="id_blog" class="form-control">  
                </div>
                <div class="col-md-1"></div>
                </div>
            <div class="row pt-2">
            <div class="col-md-2"> 
            <label for="username" class="form-label" name="judul" >Judul </label>
        </div>  
        <div class="col-md-5"> 
            <input type="text "name="judul" class="form-control">  
            </div>
            <div class="col-md-1"></div>
            </div>
            <div class="row pt-2">
            <div class="col-md-2"> 
            <label for="username" class="form-label"> ID Kategori </label>
        </div>  
        <div class="col-md-5"> 
        <select id="id kategori" name="id_kategori">
        <?php
            $qry_listidkat= mysqli_query($connect_db,"select * from mst_kategoriblog")or die("gagal akses tabel mst_kategoriblog".mysqli_error($connect_db));
            while($row = mysqli_fetch_array($qry_listidkat)){
            ?>
            <option value="<?php echo $row['id_kategori'];?>"><?php echo $row['id_kategori'];?></option>
            <?php
            }
            ?>
        </select>
            </div>
            <div class="col-md-1"></div>
            </div>
            <div class="row pt-2">
            <div class="col-md-2"> 
            <label for="username" class="form-label" name="konten" >Konten </label>
        </div>  
        <div class="col-md-5"> 
            <textarea type="text" name="konten" id="editor" cols="59" rows="5" class="form-control" > Masukkan Isi Berita </textarea>
            </div>
            <div class="col-md-1"></div>
            </div>
            <div class="row pt-2">
            <div class="col-md-2"> 
        </div>  
        <div class="col-md-5"> 
        <input type="hidden" name="author" class="form-control" value="<?php echo $_SESSION['userlogin'] ;?>">
            </div>
            <div class="col-md-1"></div>
            </div>
            <div class="row pt-2">
            <div class="col-md-2"> 
            <label for="username" class="form-label" name="inputdate" > Inputdate </label>
        </div>  
        <div class="col-md-5"> 
        <input type="date" name="inputdate"> </div>
            <div class="col-md-1"></div>
            </div>
            <div class="row pt-2">
            <div class="col-md-2"> 
            <label for="myfile" name="gambar" >Upload Gambar/Foto </label>
        </div>  
        <div class="col-md-5"> 
        <input type="file" id="myfile" name="gambar" class="form-control">
            <div class="col-md-1"></div>
            </div>
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
                <form action="mod_blog/blogCtrl.php?modul=mod_blog&act=update" method="post">
                <div class="row pt-2">
                <div class="col-md-2"> 
            </div>  
            <div class="col-md-5"> 
                <input type="hidden"name="id_blog" class="form-control" value="<?php echo $data['id_blog'];?>">  
                </div>
                <div class="col-md-1"></div>
                </div>
                <div class="row pt-2">
                <div class="col-md-2"> 
                <label for="username" class="form-label" name="judul" >Judul </label>
            </div>  
            <div class="col-md-5"> 
                <input type="text" name="judul" class="form-control" value="<?php echo $data['judul'];?>">  
                </div>
                <div class="col-md-1"></div>
                </div>
                <div class="row pt-2">
                <div class="col-md-2"> 
                <label for="id_kategori" class="form-label" name="id_kategori "> ID Kategori </label>
            </div>  
            <div class="col-md-5"> 
            <select name="id_kategori" value="<?php echo $data['id_kategori'];?>">
            <?php
                $qry_listidkat= mysqli_query($connect_db,"select * from mst_kategoriblog")or die("gagal akses tabel mst_kategoriblog".mysqli_error($connect_db));
                while($row = mysqli_fetch_array($qry_listidkat)){
                ?>
                <option value="<?php echo $row['id_kategori'];?>"><?php echo $row['id_kategori'];?></option>
                <?php
                }
                ?>
            </select>
                </div>
                <div class="col-md-1"></div>
                </div>
                <div class="row pt-2">
                <div class="col-md-2"> 
                <label for="username" class="form-label" name="konten" >Konten </label>
            </div>  
            <div class="col-md-5"> 
                <textarea name="konten" value="<?php echo $data['konten'];?>"><?php echo $data['konten'];?> </textarea>
                </div>
                <div class="col-md-1"></div>
                </div>
                <div class="row pt-2">
            <div class="col-md-2"> 
        </div>  
        <div class="col-md-5"> 
        <input type="hidden" name="author" class="form-control" value="<?php echo $data['author'];?>">
            </div>
            <div class="col-md-1"></div>
            </div>
                <div class="row pt-2">
                <div class="col-md-2"> 
                <label for="username" class="form-label" name="inputdate"  > Inputdate </label>
            </div>  
            <div class="col-md-5"> 
            <input type="date" id="start" name="inputdate" value="<?php echo $data['dateinput'];?>"> </div>
                <div class="col-md-1"></div>
                </div>
                <div class="row pt-2">
            <div class="col-md-2"> 
            <label for="myfile" >Upload Gambar/foto</label>
        </div>  
        <div class="col-md-5"> 
        <input type="file" id="myfile" name="gambar">
            <div class="col-md-1"></div>
            </div>
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