<?php
require_once '../includes/mysql.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}   

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['user']);
    $password = trim($_POST['password']);
    $statement = $sqlDb->prepare("SELECT * FROM users WHERE user = ?");
    $statement->bind_param('s', $user);
    $statement->execute();
    $result = $statement->get_result();
    if ($result && $result->num_rows === 1) {
        $userFound = $result->fetch_assoc();
        if (password_verify($password, $userFound['pass'])) {
            $_SESSION['user'] = $userFound;
            unset($_SESSION['errors']);
        } else {
            $_SESSION['errors'] = '¡Password incorrecto!';
        }
    } else {
        $_SESSION['errors'] = '¡Usuario no existe!';
    }
    $statement->close();
}
header('Location:../views/body.php');
exit;