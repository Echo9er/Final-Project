<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username= $_POST["Username"];
    $pwd= $_POST["pwd"];

    if(!empty($username)&&!empty($pwd)) {
        include("connect.php");

        $query = $conn->prepare("SELECT * FROM users WHERE username=$username AND pwd=$pwd");
        $query->bind_param("ss",$username, $pwd);
        $query->execute();
        $result = $query->get_result();

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["id"] = $row["id"];
            $_SESSION["username"] = $row["username"];

            header("Location: LandingPage.php");
            exit();


        }else {
            echo "Invalid username or password.";
        }


        $conn->close();

    }   else{
    
        echo"Username and password are required.";
    }
    

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define document metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register</title>
    <!-- Link to external stylesheet -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header section -->
    <header>
        <div class="header-content">
            <!-- Logo -->
            <div class="logo">
                <img src="images/logo.webp" alt="Logo">
            </div>
            <!-- Back to Home link -->
            <div class="login-register">
                <a href="LandingPage.php">Back to Home</a>
            </div>
        </div>
    </header>

    <!-- Main content container -->
    <div class="container">
        <h2>login / register</h2>
        <!-- Login/Register form -->
        <form action="login.php" methods="post">
            <!-- Username field -->
            <div class="form-group">
                <input type="text" id="Username" placeholder="Username">
            </div>
            <!-- Password field -->
            <div class="form-group">
                <input type="password" id="pwd" placeholder="Password">
            </div>
            <!-- Submit button -->
            <div class="form-group action-buttons">
                <button type="submit" class="btn submit">submit</button>
            </div>
        </form>
    </div>

    <!-- Footer section -->
    <div class="footer">
        <!-- Copyright information -->
        <p>Copyright &copy; 2024 Infinity Community. All rights reserved.</p>
    </div>
</body>
</html>
