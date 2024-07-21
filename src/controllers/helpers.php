<?php

function showError($errors, $field)
{
    $alert = '';
    if (isset($errors[$field]) && !empty($field)) {
        $alert = "<div class='alerta-fallo'>" . $errors[$field] . "</div>";
    }
    return $alert;
}

function delErrors()
{
    $deleted = false;
    if (isset($_SESSION['errors'])) {
        $_SESSION['errors'] = null;
        $deleted = true;
    }
    if (isset($_SESSION['completed'])) {
        $_SESSION['completed'] = null;
        $deleted = true;;
    }
    return $deleted;
}

function getEntries($sqlDb, $limit = null)
{
    $sql = "SELECT e.*, u.user AS 'autor' 
            FROM entries e 
            INNER JOIN users u ON e.user_id = u.id
            ORDER BY e.id DESC";
    if ($limit) {
        $sql .= " LIMIT 2";
    }
    $entries = mysqli_query($sqlDb, $sql);
    $result = array();
    if ($entries && mysqli_num_rows($entries) >= 1) {
        $result = $entries;
    }
    return $result;
}

function ListEntries($sqlDb)
{
    $sql = "SELECT * FROM entries ORDER BY date ASC";
    $post = mysqli_query($sqlDb, $sql);
    $result = array();
    if ($post && mysqli_num_rows($post) >= 1) {
        $result = $post;
    }
    return $result;
}
