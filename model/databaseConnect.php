<?php
$dsn = 'mysql:host=localhost;dbname=dundermifflindb';
$username = 'root';
$password = 'oakland';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    exit;
}
?>