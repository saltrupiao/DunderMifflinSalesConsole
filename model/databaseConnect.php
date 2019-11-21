<?php
$dsn = 'mysql:host=localhost;dbname=mydb';
$username = 'root';
$password = 'oakland';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    exit;
}
?>