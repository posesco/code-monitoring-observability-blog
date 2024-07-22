<?php if (isset($_SESSION['usuario'])) : ?>
    <?php require_once 'menu.php'; ?>
    <!-- INICIO DE CUERPO -->
    <div class="entradas">
        <h1>Borrar Entradas</h1>
        <p>
        <?php if (isset($_SESSION['completed'])) : ?>
                <div class='alerta-exito'>
                    <?= $_SESSION['completed'] ?>
                </div>
            <?php elseif (isset($_SESSION['errors']['general'])) : ?>
                <div class='alerta-fallo'>
                    <?= $_SESSION['errors']['general'] ?>
                </div>
            <?php endif; ?>
            <h2>Seccion borrar entradas</h2>
        </p>
        <!-- Muestra error de registro -->
        <form action="controllers/borrar_entradas.php" method="POST" enctype="multipart/form-data">
            <label for="borrar">La entrada seleccionada se borrara para siempre</label>
            <br>
            <select name="borrar">
                <option value=""></option>
                <?php
                $listados = ListEntries($db);
                while ($listado = mysqli_fetch_assoc($listados)) :
                ?>
                    <option value="<?= $listado['id'] ?>"><?= $listado['titulo'] ?></option>
                <?php endwhile; ?>
            </select>
            <br>
            <input type="submit" value="Borrar entrada">
        </form>
        <?php delErrors(); ?>
    </div>
    <!-- FIN DE CUERPO -->
<?php endif; ?>