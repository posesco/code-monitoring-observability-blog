<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Blog Posesco</title>
    <link rel="icon" href="img/icon.svg" type="image/svg+xml">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php
    require_once 'views/header.php';
    require_once 'views/form.php';
    $view = $_SERVER['REQUEST_URI'];
    switch ($view) {
        case '/index.php?crear_entrada':
            require_once 'views/newpost.php';
            break;
        case '/index.php?delEntry':
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

</html>