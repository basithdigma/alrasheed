<?php
// $host = 'srv1065.hstgr.io';
$host = 'localhost';
$db   = 'u279284743_alrasheed';
$user = 'u279284743_alrasheed';
$pass = 'i5=^cq6H';
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
