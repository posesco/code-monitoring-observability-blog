<?php if (isset($_GET['signUp'])) : ?>
    <div class="form">
        <h1>Formulario de Registro</h1>
        <?php if (isset($_SESSION['completed'])) : ?>
            <div class='alerta-exito'>
                <?= $_SESSION['completed'] ?>
            </div>
        <?php elseif (isset($_SESSION['errors']['general'])) : ?>
            <div class='alerta-fallo'>
                <?= $_SESSION['errors']['general'] ?>
            </div>
        <?php endif; ?>
        <form action="controllers/signUp.php" method="POST">
            <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'user') : ''; ?>
            <label for="user">Usuario</label>
            <input type="text" name="user" id="user">
            <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'email') : ''; ?>
            <label for="email">Correo</label>
            <input type="email" name="email" id="email">
            <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'password') : ''; ?>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Registrar">
            <a href="controllers/signOff.php">Iniciar Sesion</a>
        </form>
    </div>
<?php elseif (!isset($_SESSION['user'])) : ?>
    <div class="form">
        <h1>Inicio de Sesion</h1>
        <?php if (isset($_SESSION['errors'])) : ?>
            <div class='alerta-fallo'>
                <?= $_SESSION['errors'] ?>
            </div>
        <?php endif; ?>
        <form action="controllers/inicio.php" method="POST">
            <label for="user">Usuario</label>
            <input type="text" name="user" id="user">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Iniciar Session">
            <a href="index.php?signUp">Crear cuenta </a>
        </form>
    </div>
<?php endif; ?>