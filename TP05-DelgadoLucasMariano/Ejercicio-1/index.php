<?php
    $ruta = 'css';
    $rutaBootstrap = 'bootstrap-5.3.3-dist';
    require_once("php/header.php");
?>

<form action="php/cuenta.php" method="post" class="formulario">
    <fieldset>
        <legend class="text-center titulo">Iniciar sesión</legend>
        <section class="seccion-articulos">

            <article class="articulo">
                <label for="mail">Email</label>
                <input type="text" name="cuenta" id="mail">
            </article>
            
            <article class="articulo">
                <label for="contra">Contraseña</label>
                <input type="password" name="contraseña" id="contra">
            </article>
        </section>

        <article class="boton-articulo">
            <input type="submit" value="Sign In" class="boton">
        </article>
    </fieldset>
</form>

<?php
    require_once("php/footer.php");
?>