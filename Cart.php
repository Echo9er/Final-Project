<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Remi Pilon">
    <meta name="date" content="2024-03-30">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="BuyNow.js"></script>
</head>

<body>

    <div id="header">
        <h1>Remi's Performance Automotive Reviews</h1>
        <div id="logo">
            <img src="logo.webp" alt="Logo" class="logo">
        </div>
        <p>Driving Innovation</p>
    </div>

    
    <nav>
        <ul>
            <li><a href="LandingPage.php">Home</a></li>
            <li><a href="SustainableProducts.php">Sustainable Products</a></li>
            <li><a href="FootPrintCalc.php">Footprint Calculator</a></li>
            <li><a href="Cart.php">Cart</a></li>
        </ul>
    </nav>

    <div id="header">
        <h1>Shopping Cart</h1>
    </div>

    <div id="cart-items">
        <!-- Cart items will be displayed here -->
    </div>

    <script src="BuyNow.js"></script>

    <form id="checkout-form">
        <h2>Checkout</h2>

        <label for="postal-code">Postal Code:</label>
        <input type="text" id="postal-code" name="postal-code"  required>

        <button type="submit">Checkout</button>
    </form>

    <script src="BuyNow.js"></script>


    <?PHP include("footer.php"); ?>
    <div id="footer">
        <p>&copy; 2024 Remi's Performance Automotive Reviews. All rights reserved.</p>
    </div>

</body>

</html>
