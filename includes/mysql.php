<?php
$servidor_maria = getenv('SERVER_MARIA');
$usuario_maria  = getenv('MYSQL_USER');
$password_maria = getenv('MYSQL_PASSWORD');
$basededatos    = getenv('MYSQL_DATABASE');
$db             = mysqli_connect($servidor_maria, $usuario_maria, $password_maria, $basededatos);
if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
// Incluye la session
// Se crea sesion para evitar enviar parametros GET y verificar los datos de registro
if (!isset($_SESSION)){
    session_start();
}
?>