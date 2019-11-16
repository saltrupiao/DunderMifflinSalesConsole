<?php
$dsn = 'mysql:host=localhost;dbname=dundermifflindb';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    exit;
}
?>