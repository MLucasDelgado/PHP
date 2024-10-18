<?php
    $ruta = '';
    require_once 'html/header.html';
?>
    <form action="php/surtidor.php" method="POST" class="w-50">
            <section class="form-group">
                <label for="dni" class="control-label fw-bold">DNI:</label>
                <input type="text" id="dni" name="dni" class="form-control">
            </section>
            <section class="form-group">
                <label for="combustible" class="control-label fw-bold">Tipo de Combustible:</label>
                <select id="combustible" name="combustible" class="form-control">
                    <option value="">-- Seleccion -- </option>
                    <option value="Super">Súper</option>
                    <option value="Premium">Premium</option>
                    <option value="Gasoil">Gasoil</option>
                    <option value="Euro">Euro</option>
                </select>
            </section>
            <section class="form-group">
                <label for="litros" class="control-label fw-bold">Litros:</label>
                <input type="number" id="litros" name="litros" step="0.01" min="0.01" class="form-control" required>
            </section>
            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>


<?php
    require_once 'html/footer.html';
?>
