<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <img src="images/logo.webp" alt="Logo">
            </div>
            <div class="login-register">
                <a href="LandingPage.php">Back to Home</a>
            </div>
        </div>
    </header>    

    <div class="container">
        <h2>login / register</h2>
        <form action="includes/formhandler.inc.php" methods="post">
            <div class="form-group">
                <input type="text" id="Username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" id="pwd" placeholder="Password">
            </div>
            </div>
            <div class="form-group action-buttons">
                <button type="submit" class="btn submit">submit</button>
            </div>
        </form>
    </div>
    <div class="footer">
        <div>2024 copyright reserved</div>
    </div>
</body>
</html>