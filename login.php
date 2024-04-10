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
        <form action="includes/formhandler.inc.php" methods="post">
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
