<?php session_start(); ?>
<?php if (isset($_SESSION['user'])) : ?>
    <?php require_once 'menu.php'; ?>
    <div class="main">
        <h1>Ultimas Entradas</h1>
        <?php
        if ($_SERVER['REQUEST_URI'] == '/index.php?all') {
            $entries = getEntries($sqlDb);
        } else {
            $entries = getEntries($sqlDb, true);
        }
        if (!empty($entries)) :
            while ($entry = mysqli_fetch_assoc($entries)) :
        ?>
                <article class="entrada">
                    <a href="">
                        <h2><?= $entry['title'] ?></h2>
                    </a>
                    <span class="fecha"><?= 'Autor: ' . $entry['autor'] . ' | ' . $entry['fecha'] ?></span>
                    <p>
                    <p>
                        <img src='<?= $entry['imagen'] ?>' width='150px' align="bottom">

                    </p>
                    <?= $entry['descripcion'] ?>
                    </p>
                </article>
        <?php
            endwhile;
        endif;
        ?>
        <?php if ($_SERVER['REQUEST_URI'] == '/index.php') : ?>
            <div id="see-all">
                <a href="index.php?all">
                    <h2>Ver todas las entradas</h2>
                </a>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>