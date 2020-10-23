<?php
if (isset($_POST)) {
    // Cargar conexion a DB
    require_once '../includes/mysql.php';
    $entrada_id = $_POST['borrar'];
    $sql = "DELETE FROM entradas WHERE id = $entrada_id";
    $borrar = mysqli_query($db, $sql);
    if ($borrar) {
        $_SESSION['completado'] = "Se borro correctamente la entrada";
    }
    $_SESSION['errores']['general']= "No selecciono ninguna entreda";
}
header('Location:../index.php?eliminar_entrada');