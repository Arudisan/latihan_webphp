<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nilai = 100;
        $jumlah = 300;
        $keterangan = "Saya sedang belajar web programming";
    ?>
    <h1>belajar php mudah </h1>
    Nilai <input type="text" name="nilai" value="<?php echo $nilai; ?>">
    <br><br>
    jumlah <input type="text" name="nilai" value="<?= $jumlah; ?>">
    <br>
    <textarea cols="40" name="nilai"><?= $keterangan; ?></textarea>

    <?php 
    
    ?>


</body>

</html>