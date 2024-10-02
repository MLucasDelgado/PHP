<header class="titulo" style="padding: 10px 0; display: flex; flex-direction: row; justify-content: space-between; align-items: center; background-color: rgb(26, 26, 83); width: 100%">
    <a style="margin-left: 2rem; color:white; text-decoration: none; font-size: 1rem" href="../index.php">Cerrar sesion</a>
    <?php
        if(!empty($_GET['usuario']) && !empty($_GET['foto'])){
            $nombre = $_GET['usuario'];
            $imagen = $_GET['foto'];
            ?>
            <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                <?php
                    echo '<p style="color: white; font-size: 1.1rem; margin-right: 1rem">' . $nombre . '</p>';
                    echo '<img  src="../img/' . $imagen . '" alt="Foto de ' . $imagen . '" style="margin-right: 2rem; width: 45px; height: 45px; border-radius: 50%;">';
                ?>
            </article>
            <?php
        }
    ?>
</header>

<body style="background-image: linear-gradient(to right bottom, #111e74, #004e9c, #0079b2, #00a2bc, #62c9c4);">
    <section style="width: 80%; margin: auto">
        <h2 style="padding-top: 2rem; color: white">Bienvenido/a <?php echo $nombre ?></h2>
    </section>
</body>