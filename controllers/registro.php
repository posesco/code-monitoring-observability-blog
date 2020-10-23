<?php
if (isset($_POST)) {
    // Cargar conexion a DB
    require_once '../includes/mysql.php';
    require_once '../controllers/helpers.php';
    // Inicio de Sesion
    $user     = isset ($_POST['user']) ? mysqli_real_escape_string ($db, $_POST['user']) : false ;
    $correo     = isset ($_POST['email']) ? mysqli_real_escape_string ($db, $_POST['email']) : false ;
    $password   = isset ($_POST['password']) ? mysqli_real_escape_string ($db, $_POST['password']) : false ;
    // Array de errores
    $errores = [];
    // Verificacion de datos antes de enviar a la base de datos
    if (empty($user)) {
        $errores['user'] = 'Datos no validos para usuario';
    }
    if (empty($correo)) {
        $errores['email'] = 'Datos no validos para correo';
    }
    if (empty($password)) {
        $errores['password'] = 'Datos no validos para password';
    }
    // Se verifica si existio alguno error almacenado en el array errores
    $guardar_usuario = false;
    if (count($errores) == 0 ) {
        $guardar_usuario = true;
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        $sql = "INSERT INTO usuarios(usuario, email, pass) VALUES ('$user','$correo','$password_segura')";
        $guardar = mysqli_query($db, $sql);
        if ($guardar) {
            borrarErrores();
            $_SESSION['completado'] = 'Registro existoso!';
        }else {
            $_SESSION['errores']['general'] = 'Fallo al guardar';
        }
    }else {
        // Devolvemos al formulario para corregir los datos 
        $_SESSION['errores'] = $errores;
    }
}
header('Location:../index.php?registro');
?>