<?php
$host = 'localhost';
$dbname = 'BLOG';
$username = 'root';
$password = 'admin';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("No se pudo conectar a $dbname :" . $pe->getMessage());
}
?>
