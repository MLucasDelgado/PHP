<?php
    function conectar () {
        $servidor = 'localhost';
        $usuario = 'root';
        $clave = '';
        $baseDeDatos = 'labo2';

        set_error_handler(function () // Manejador de excepciones
        {
            throw new Exception("Error");
        });

        try{ // conecta a la base de datos
            $conexion = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
        } catch (Exception $e) {
            $conexion = false;
            echo '<p>Error, comuniquese con su administrador.</p>';
        }

        return $conexion;
    }

    function desconectar ($conexion) {
        if ($conexion) {
            mysqli_close($conexion);
        } else {
            echo '<p>No se puede desconectar, porque no hay una conexion.</p>';
        }
    }
?>