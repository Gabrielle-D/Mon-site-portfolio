<?php
$host     = 'localhost';
$port     = 3306;
$dbname   = 'wmi_2025_dewevre';
$username = 'root';
$password = '';
$charset  = 'utf8mb4';
$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    return $pdo;
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données.');
}