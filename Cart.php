<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Define document metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Link to external stylesheet -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Include external JavaScript file -->
    <script src="BuyNow.js"></script>
</head>

<body>

    <!-- Header section -->
    <header>
        <div class="header-content">
            <!-- Logo -->
            <div class="logo">
                <img src="images/logo.webp" alt="Logo">
            </div>
            <!-- Title -->
            <div class="header-text">
                <h1>Shopping Cart</h1>
            </div>
            <!-- Login/Register link -->
            <div class="login-register">
                <a href="login.php">Login/Register</a>
            </div>
        </div>
    </header>

    <!-- Navigation menu -->
    <nav>
        <ul>
            <!-- Navigation links -->
            <li><a href="LandingPage.php">Home</a></li>
            <li><a href="SustainableProducts.php">Sustainable Products</a></li>
            <li><a href="Cart.php">Cart</a></li>
        </ul>
    </nav>

    <!-- Display area for cart items -->
    <div id="cart-items">
        <!-- Cart items will be displayed here -->
    </div>

    <!-- Include JavaScript file -->
    <script src="BuyNow.js"></script>

    <!-- Checkout form -->
    <form id="checkout-form">
        <h2>Checkout</h2>

        <!-- Postal code input field -->
        <label for="postal-code">Postal Code:</label>
        <input type="text" id="postal-code" name="postal-code" required>

        <!-- Checkout button -->
        <button type="submit">Checkout</button>
    </form>

    <!-- Include JavaScript file -->
    <script src="BuyNow.js"></script>

    <!-- Footer section -->
    <div id="footer">
        <!-- Copyright information -->
        <p>&copy; 2024 Remi's Performance Automotive Reviews. All rights reserved.</p>
    </div>

</body>

</html>
