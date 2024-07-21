<?php
require_once '../controllers/helpers.php';
session_start();
if (isset($_SESSION['usuario'])){
    session_destroy();
}
delErrors();
header('Location:../index.php');
?>