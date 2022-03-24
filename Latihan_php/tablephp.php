<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <table border="3" cellpadding="10" cellspacing="3"> 
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
</body>
</html>