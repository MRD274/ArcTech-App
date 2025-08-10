<?php
$host = 'localhost';
$port = 3306;
$user = 'rivasde_arctech';
$pass = 'mgPCexPQZzvA9yQHU6e4';
$dbname = 'rivasde_arctech';

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
