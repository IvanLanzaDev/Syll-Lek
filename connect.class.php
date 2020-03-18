<?php
    $link = mysqli_connect("localhost","u578177980_syll","S?B>g|@o~u4");
        if($link){
            mysqli_select_db($link,"u578177980_syll");
        }else{
            echo "Erro Ao conectar com o banco";
        }
?>