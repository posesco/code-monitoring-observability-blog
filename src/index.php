<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Infra-PHP</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <?php
    require_once 'views/cabecera.php';
    require_once 'views/formulario.php';
    $vista = $_SERVER['REQUEST_URI'];
    switch ($vista) {
        case '/index.php?crear_entrada':
            require_once 'views/crear_entrada.php';
            break;
        case '/index.php?eliminar_entrada':
            require_once 'views/eliminar_entrada.php';
            break;
        case '/index.php?actividad':
            require_once 'views/actividad.php';
            break;
        default:
            require_once 'views/cuerpo.php';
            break;
    }
    ?>
</body>
<div>Hola</div>
</html>