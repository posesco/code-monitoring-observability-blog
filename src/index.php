<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Blog Posesco</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <?php
    require_once 'views/header.php';
    require_once 'views/form.php';
    $vista = $_SERVER['REQUEST_URI'];
    switch ($vista) {
        case '/index.php?crear_entrada':
            require_once 'views/newpost.php';
            break;
        case '/index.php?eliminar_entrada':
            require_once 'views/delpost.php';
            break;
        case '/index.php?actividad':
            require_once 'views/monitoring.php';
            break;
        default:
            require_once 'views/body.php';
            break;
    }
    ?>
</body>
<div>Hola</div>
</html>