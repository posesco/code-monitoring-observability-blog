    <nav id="menu">
        <ul>
            <li>
                <?php echo 'Bienvenido: ' . $_SESSION['user']['user'] ?>
            </li>
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="index.php?crear_entrada">Crear</a>
            </li>
            <li>
                <a href="index.php?delEntry">Borrar</a>
            </li>
            <?php if ($_SESSION['user']['user']=='admin'): ?>
            <li>
                <a href="index.php?actividad">Registro de Sesiones (Redis)</a>
            </li>
            <li>
                <a href="views/info.php" target="_blank">Info PHP</a>
            </li>
            <li>
                <a href="http://localhost:8080" target="_blank">Jenkins</a>
            </li>
            <?php endif ?>
            <li>
                <a href="controllers/cerrar_sesion.php">Cerrar Sesion</a>
            </li
        </ul>
    </nav>