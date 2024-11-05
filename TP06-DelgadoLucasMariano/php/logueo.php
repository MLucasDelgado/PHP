<?php

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        //hacer cuestiones
        include 'conectar.php';
        $username = $_POST['username'];
        $password = sha1($_POST['password']);

        $conexion = conectar();

        if($conexion){
            $consulta = 'SELECT usuario, pass 
                        FROM usuario 
                        WHERE usuario = ? AND pass = ?';

            $sentencia = mysqli_prepare($conexion, $consulta);
            mysqli_stmt_bind_param($sentencia, 'ss', $username, $password);

            $q = mysqli_stmt_execute($sentencia);
            mysqli_stmt_bind_result($sentencia, $usernameDB, $passwordDB);      

            if ($q) {
                mysqli_stmt_fetch($sentencia);
                if($username === $usernameDB && $password === $passwordDB){
                    header("refresh:0; url=articulo_listado.php?usuario=" .$usernameDB);
                } else {
                    header("refresh:3; url=../index.php");
                    echo '<p>Error, no existe cuenta con estos datos.</p>';
                }
            } 

        } else {
            echo '<p>No se pudo conectar.</p>';
        }   
    }

?>