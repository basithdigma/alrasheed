<?php
// $host = 'srv1065.hstgr.io';
$host = 'localhost';
$db   = 'ar-aviation';
$user = 'aviationdbadmin';
$pass = 'L=@h}WGi8L5m][@x';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     $pdo = null;
     error_log("Database connection failed: " . $e->getMessage());
}
?>
