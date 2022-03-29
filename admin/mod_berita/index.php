<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../asset/bootstrap/css/bootstrap.min.css">
    <title>Tampil Data</title>
</head>
<body>
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kontenModel">Tambah</button>
    <table border="3" cellpadding="10" cellspacing="3" > 
        <tr>
            <th >ID</th>
            <th> Judul</th>
            <th> Konten </th>
            <th> action </th>
        </tr>
        <?php
        //tulis array disini
        $konten = array (
            array ( "ID"=>"1","Judul"=>"Spidemarman","konten"=>"Filmacc"),
            array ( "ID"=>"2","Judul"=>"Batman","konten"=>"romance"),
            array ( "ID"=>"3","Judul"=>"Superman","konten"=>"fight")
        );
        foreach ($konten as $k){
        //
        ?>
        <tr>
            <td><?php echo $k["ID"] ; ?></td>
            <td><?php echo $k["Judul"] ; ?></td>
            <td><?php echo $k["konten"] ; ?></td>
            <td><a href="#"> edit  </a>  <a href=" "> delete </a></td>
        </tr>
        <?php 
         }
        ?>
    </table>
    <div class="modal fade" id="kontenModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah konten</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
               <div class="modal-body">
              <hr>  
              <div class="alert alert-danger" role="alert" id="alert" style="display: none"></div>
              <div class="alert alert-success" role="alert" id="alertok" style="display: none"></div>
              <div class="form-group">
                <h6> Judul </h6>
                <input type="text" id="loguser" class="form-control">
              </div>
              <div class="form-group">
                 <h6> Konten </h6> 
                 <input type="password" id="logpass" class="form-control">
              </div>
              <br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Batal </button>
              <button type="button" class="btn btn-primary" onclick="">login</button>
            </div>
          </div>
        </div>
      </div>
      <script src="../../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../asset/javascript/main.js" type="text/javascript"></script>
</body>
</html>