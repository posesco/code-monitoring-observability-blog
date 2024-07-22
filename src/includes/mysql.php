<?php
$mysqlHost = getenv('SERVER_MARIA');
$mysqlUser = getenv('MYSQL_USER');
$mysqlpass = getenv('MYSQL_PASSWORD');
$sqlDb = getenv('MYSQL_DATABASE');
$sqlDb = mysqli_connect($mysqlHost, $mysqlUser, $mysqlpass, $sqlDb);
if (!$sqlDb) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
?>