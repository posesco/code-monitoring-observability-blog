<?php
class PostController {
    public static function getAllPosts() {
        global $mysqli;
        $result = $mysqli->query('SELECT * FROM entradas');
        $posts = $result->fetch_all(MYSQLI_ASSOC);
        return $posts;
    }

    public static function createPost($userId, $title, $description, $image) {
        global $mysqli;
        $stmt = $mysqli->prepare('INSERT INTO entradas (user_id, title, description, image) VALUES (?, ?, ?, ?)');
        $stmt->bind_param('isss', $userId, $title, $description, $image);
        $stmt->execute();
        $stmt->close();
    }
}
?>
