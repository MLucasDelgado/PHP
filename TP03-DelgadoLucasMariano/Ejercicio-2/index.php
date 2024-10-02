<?php
    require_once("php/header.php");

    $contraseña = mt_rand(8, 16);

    for($i = 1; $i <= $contraseña; $i++){
        $caracteres = mt_rand(48, 122);

        if (($caracteres >= 58 && $caracteres <= 64) || ($caracteres >= 91 && $caracteres <= 96))
        {
            $i--;
        }
        else
        {
            echo chr($caracteres);
        }
    }

    require_once("php/footer.php");
?>