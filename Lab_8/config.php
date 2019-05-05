<?php
$host = "localhost";
$db = "lab8";
$user = "root";
$pass = "";
$charset = "utf8mb4";

$connect = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES=> false];

try {
    $pdo = new PDO($connect, $user, $pass, $options);
    echo "Database connected successfully";
    echo "<br>";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

?>