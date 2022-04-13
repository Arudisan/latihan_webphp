<?php 
        $menu = array (
            array ( "id"=>"01","nm_menu"=>"dashboard","link"=>"home.php"),
            array ( "id"=>"02","nm_menu"=>"Blog","link"=>"#"),
            array ( "id"=>"03","nm_menu"=>"Berita","link"=>"mod_berita")
        );
        foreach ($menu as $mn){
       ?>
       <a href="?modul=<?php echo $mn['link']?>">
           <li class="list-group-item"><?php echo $mn['nm_menu'];?></li>
        </a>  
            <?php }?>