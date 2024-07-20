<?php
$host = getenv('SERVER_MARIA');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
$db = getenv('MYSQL_DATABASE');
$db = mysqli_connect($host, $user, $pass, $db);
if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
if (!isset($_SESSION)){
    session_start();
}
?>