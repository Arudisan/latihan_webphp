<?php
include_once ('respondenctrl.php');
?>
        <?php
        if(!isset($_GET['act'])){
        ?>
        <table class="table table-bordered "> 
            <tr> 
                <th> Id Responden</th>
                <th> Email </th>
                <th> Nama lengkap</th>
                <th> Informasi </th>
                <th> keterangan </th>
            <?php
            $qry_listmenu= mysqli_query($connect_db,"select * from tabel_responden order by no_responden DESC")or die("gagal akses tabel tabel_responden order".mysqli_error($connect_db));
            while($row = mysqli_fetch_array($qry_listmenu)){
            ?>
            <tr>
                <td><?php echo $row['no_responden'];?></td>
                <td><?= $row['email']; ?></td>
                <td><?php echo $row['nama_lengkap']; ?></td>
                <td><?php echo $row['informasi'];?></td>
                <td><?= $row['keterangan']; ?></td>
            </tr>
            <?php
            }
            ?>
    <?php
     }
   ?>