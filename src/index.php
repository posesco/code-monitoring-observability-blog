<?php
require 'config/mysql.php';
require 'controllers/userController.php';
require 'controllers/postController.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        UserController::register($_POST['username'], $_POST['email'], $_POST['password']);
        header('Location: login.php');
    } elseif (isset($_POST['login'])) {
        UserController::login($_POST['email'], $_POST['password']);
        header('Location: home.php');
    }
} else {
    if (isset($_COOKIE['auth_token'])) {
        include 'views/home.php';
    } else {
        include 'views/login.php';
    }
}
?>
