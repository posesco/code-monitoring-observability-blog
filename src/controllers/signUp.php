<?php
if (isset($_POST)) {
    require_once '../includes/mysql.php';
    require_once '../controllers/helpers.php';
    $user     = isset ($_POST['user']) ? mysqli_real_escape_string ($sqlDb, $_POST['user']) : false ;
    $mail      = isset ($_POST['email']) ? mysqli_real_escape_string ($sqlDb, $_POST['email']) : false ;
    $password   = isset ($_POST['password']) ? mysqli_real_escape_string ($sqlDb, $_POST['password']) : false ;
    $errors = [];
    if (empty($user)) {
        $errors['user'] = 'Datos no validos para usuario';
    }
    if (empty($mail )) {
        $errors['email'] = 'Datos no validos para correo';
    }
    if (empty($password)) {
        $errors['password'] = 'Datos no validos para password';
    }
    $guardar_usuario = false;
    if (count($errors) == 0 ) {
        $guardar_usuario = true;
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        $sql = "INSERT INTO users(user, email, pass) VALUES ('$user','$mail ','$password_segura')";
        $guardar = mysqli_query($sqlDb, $sql);
        if ($guardar) {
            delErrors();
            $_SESSION['completed'] = 'Registro existoso!';
        }else {
            $_SESSION['errors']['general'] = 'Fallo al guardar';
        }
    }else {
        $_SESSION['errors'] = $errors;
    }
}
header('Location:../index.php?signUp');
?>