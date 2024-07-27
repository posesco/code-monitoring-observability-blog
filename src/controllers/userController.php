<?php
require 'vendor/autoload.php';
use Firebase\JWT\JWT;

class UserController {
    public static function register($username, $email, $password) {
        global $mysqli;
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $mysqli->prepare('INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $username, $email, $hashedPassword);
        $stmt->execute();
        $stmt->close();
    }

    public static function login($email, $password) {
        global $mysqli;
        $stmt = $mysqli->prepare('SELECT * FROM usuarios WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();

        if ($user && password_verify($password, $user['password'])) {
            $token = JWT::encode(['id' => $user['id']], 'secret_key');
            setcookie('auth_token', $token, time() + (86400 * 30), "/");
        }
    }
}
?>
