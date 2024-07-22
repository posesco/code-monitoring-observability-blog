<?php if (isset($_SESSION['usuario'])) : ?>
    <?php require_once 'menu.php'; ?>
    <!-- INICIO DE CUERPO -->
    <div class="entradas">
        <h1>Crear Entradas</h1>
        <p>
            <!-- Muestra error de registro -->
            <?php if (isset($_SESSION['completed'])) : ?>
                <div class='alerta-exito'>
                    <?= $_SESSION['completed'] ?>
                </div>
            <?php elseif (isset($_SESSION['errors']['general'])) : ?>
                <div class='alerta-fallo'>
                    <?= $_SESSION['errors']['general'] ?>
                </div>
            <?php endif; ?>
            <h2>Crea tus entradas para el blog</h2>
        </p>
        <!-- Muestra error de registro -->
        <form action="controllers/saveEntries.php" method="POST" enctype="multipart/form-data">
            <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'titulo') : ''; ?>
            <label for="titulo">Titulo de la Entrada</label>
            <input type="text" name="titulo">
            <br>
            <br>
            <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'descripcion') : ''; ?>
            <label for="descripcion">Cuerpo de la entrada</label>
            <textarea name="descripcion" placeholder="Escribe tu entrada" cols="80" rows="15"></textarea>
            <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'archivo') : ''; ?>
            <label for="descripcion">Sube una imagen sobre tu post</label>
            <br>
            <input type="file" name="archivo">
            <br>
            <input type="submit" value="Crear entrada">
        </form>
        <?php delErrors(); ?>
    </div>
    <!-- FIN DE CUERPO -->
<?php endif; ?>