<?php

$dsn = "mysql:host=localhost;dbname=infinity_community";
$dbusername = "root";
$dbpwd = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpwd);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}