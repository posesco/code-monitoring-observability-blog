<?php

function mostrarError($errores, $campo)
{
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta-fallo'>" . $errores[$campo] . "</div>";
    }
    return $alerta;
}

// Limpia la variable errores para permitir el ingreso de nuevos datos
function borrarErrores()
{
    $borrado = false;
    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        $borrado = true;
    }
    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        $borrado = true;;
    }
    return $borrado;
}

function conseguirEntradas($conexion, $limit = null)
{
    $sql = "SELECT e.*, u.usuario AS 'autor' 
            FROM entradas e 
            INNER JOIN usuarios u ON e.usuario_id = u.id
            ORDER BY e.id DESC";
    if ($limit) {
        // Concatenamiento para un limite de 4 entradas
        $sql .= " LIMIT 2";
    }
    $entradas = mysqli_query($conexion, $sql);
    $resultado = array();
    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $resultado = $entradas;
    }
    return $resultado;
}

// Listar Entradas
function ListarEntradas($conexion)
{
    $sql = "SELECT * FROM entradas ORDER BY fecha ASC";
    $post = mysqli_query($conexion, $sql);
    $result = array();
    if ($post && mysqli_num_rows($post) >= 1) {
        $result = $post;
    }
    return $result;
}
