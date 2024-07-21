<?php
require_once '../includes/mysql.php';

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_POST)) {
    $user = ($_POST['user']);
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE user = '$user'";
    $match = mysqli_query($sqlDb, $query);
    if ($match && mysqli_num_rows($match) == 1) {
        $userFound = mysqli_fetch_assoc($match);
        $verify = password_verify($password, $userFound['pass']);
        if ($verify) {
            $_SESSION['user'] = $userFound;
            if (isset($_SESSION['errors'])) {
                session_unset();
            }
        } else {
            $_SESSION['errors'] = '¡Password incorrecto!';
        }
    } else {
        $_SESSION['errors'] = '¡Usuario no exite!';
    }
}
header('Location:../index.php');
