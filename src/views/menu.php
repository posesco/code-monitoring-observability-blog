    <!-- INICIO DE BARRA HORIZONTAL -->
    <nav id="menu">
        <ul>
            <li>
                <?php echo 'Bienvenido Usuario: ' . $_SESSION['usuario']['usuario'] ?>
            </li>
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="index.php?crear_entrada">Crear</a>
            </li>
            <li>
                <a href="index.php?eliminar_entrada">Borrar</a>
            </li>
            <?php if ($_SESSION['usuario']['usuario']=='admin'): ?>
            <li>
                <a href="index.php?actividad">Registro de Sesiones (Redis)</a>
            </li>
            <li>
                <a href="views/info.php" target="_blank">Info PHP</a>
            </li>
            <li>
                <a href="stats" target="_blank">Info Haproxy</a>
            </li>
            <li>
                <a href="http://localhost:8080" target="_blank">Jenkins</a>
            </li>
            <li>
                <a href="https://jesusvpn.duckdns.org:943/admin" target="_blank">VPN</a>
            </li>
            <?php endif ?>
            <li>
                <a href="controllers/cerrar_sesion.php">Cerrar Sesion</a>
            </li
        </ul>
    </nav>
    <!-- FIN DE BARRA HORIZONTAL -->