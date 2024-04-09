<?php

if ($_SERVER["Request_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd) VALUES (?, ?)";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $pwd]);

        $pdo = NULL;
        $stmt = NULL;

        header("Location: ../LandingPage.php");

    } catch (PDOException $e){
        die("Query failed: " . $e->getMessage());
    }


}else {
    header("Location: ../LandingPage.php");
}