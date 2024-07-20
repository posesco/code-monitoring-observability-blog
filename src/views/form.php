<!-- INICIO FORMULARIO DE REGISTRO -->
<?php if (isset($_GET['registro'])) : ?>
    <div class="formulario">
        <h1>Formulario de Registro</h1>
        <!-- Muestra error de registro -->
        <?php if (isset($_SESSION['completado'])) : ?>
            <div class='alerta-exito'>
                <?= $_SESSION['completado'] ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])) : ?>
            <div class='alerta-fallo'>
                <?= $_SESSION['errores']['general'] ?>
            </div>
        <?php endif; ?>
        <form action="controllers/registro.php" method="POST">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'user') : ''; ?>
            <label for="user">Usuario</label>
            <input type="text" name="user">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
            <label for="email">Correo</label>
            <input type="email" name="email">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <input type="submit" value="Registrar">
            <a href="controllers/cerrar_sesion.php">Iniciar Sesion</a>
        </form>
    </div>
    <!-- FIN FORMULARIO DE REGISTRO -->
<?php elseif (!isset($_SESSION['usuario'])) : ?>
    <!-- INICIO FORMULARIO LOGIN -->
    <div class="formulario">
        <h1>Inicio de Sesion</h1>
        <?php if (isset($_SESSION['errores'])) : ?>
            <div class='alerta-fallo'>
                <?= $_SESSION['errores'] ?>
            </div>
        <?php endif; ?>
        <form action="controllers/inicio.php" method="POST">
            <label for="user">Usuario</label>
            <input type="text" name="user">
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <input type="submit" value="Iniciar Session">
            <a href="index.php?registro">Crear cuenta </a>
        </form>
    </div>
    <!-- FIN FORMULARIO LOGIN -->
<?php endif; ?>