<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog with monitoring and observability</title>
    <link rel="icon" href="img/icon.svg" type="image/svg+xml">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php
    include 'views/form.php';
    $view = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $viewMap = [
        '/index.php?newPost' => 'views/newPost.php',
        '/index.php?delPost' => 'views/delPost.php',
        '/index.php?status' => 'views/status.php',
    ];
    $viewToLoad = $viewMap[$view] ?? 'views/body.php';
    include 'views/footer.php';
    ?>
</body>

</html>