<?php if (isset($_SESSION['usuario'])) : ?>
    <?php require_once 'menu.php'; ?>
    <!-- INICIO DE CUERPO -->
    <div class="principal">
        <h1>Actividad monitoreada por Redis</h1>
        <?php
        $count = $redis_sesion->dbSize();
        echo "<strong>Numero de Sesiones Activas: </strong>  $count";
        $lista = $redis_sesion->keys("*");
        echo '<br>';
        echo '<br>';
        foreach ($lista as $key) {
            echo "<strong>ID de la Sesion: </strong>$key<br>";
            echo '<p>' . $redis_sesion->get($key) . '</p>';
            echo '<br>';
        }
        ?>
        <h1>Paginas visitadas por Usuario</h1>
        <?php
        $usuarios_activos = $redis_cache->keys("*");
        foreach ($usuarios_activos as $user) {
            echo '<br>';
            echo "<strong>Usuario: </strong>$user<br>";
            echo '<br>';
            $paginas = $redis_cache->lrange($user, -1000, 1000);
            foreach ($paginas as $pagina) {
                echo $pagina;
                echo '<br>';
            }
        }
        ?>

    </div>
    <!-- FIN DE CUERPO -->
<?php endif; ?>