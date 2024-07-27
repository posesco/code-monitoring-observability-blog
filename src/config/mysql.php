<?php
$hostMariaDB = getenv('SERVER_MARIA');
$userMariaDB  = getenv('MYSQL_USER');
$passMariaDB = getenv('MYSQL_PASSWORD');
$sqlDBMariaDB    = getenv('MYSQL_DATABASE');
try {
    $sqlDB = mysqli_connect($hostMariaDB, $userMariaDB, $passMariaDB, $sqlDBMariaDB);
    if (!$sqlDB) {
        throw new Exception("Error: Could not connect to MySQL.");
    }
} catch (Exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    echo "An error has occurred. Please try again later.";
    exit;
}