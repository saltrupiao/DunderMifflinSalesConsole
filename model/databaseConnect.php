<?php
$dsn = 'mysql:host=localhost;dbname=database';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    exit;
}
?>