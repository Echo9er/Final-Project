<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character encoding and viewport configuration -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the webpage -->
    <title>Sustainable Products</title>
    <!-- Link to external stylesheet -->
    <link rel="stylesheet" href="styles.css">
    <!-- Link to external JavaScript file for Buy Now functionality -->
    <script src="js/buynow.js"></script>
    
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
                <h1>Sustainable Products</h1>
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
            <!-- Home link -->
            <li><a href="LandingPage.php">Home</a></li>
            <!-- Sustainable Products link -->
            <li><a href="SustainableProducts.php">Sustainable Products</a></li>
            <!-- Footprint Calculator link -->
            <li><a href="FootPrintCalc.php">Footprint Calculator</a></li>
            <!-- Cart link -->
            <li><a href="Cart.php">Cart</a></li>
        </ul>
    </nav>

    <!-- Product section -->
    <div class="products">
        <!-- Table to display products -->
        <table class="product-table">
            <tr>
                <td>
                    <!-- Image for Product 1 -->
                    <img src="images/CompostableMicrofiber.webp" alt="Product 1 Image">
                </td>
                <td>
                    <!-- Product 1 details -->
                    <h3>Compostable Microfiber Cloths</h3>
                    <p>Our compostable microfiber cloths are made from natural and sustainable materials that break down easily in compost systems. They offer superior cleaning performance while being environmentally friendly, helping you reduce your carbon footprint.</p>
                    <!-- Button to add Product 1 to cart -->
                    <button onclick="addToCartAndNotify('compostable microfiber cloths', 24.99)">Buy Now</button>
                    <div class="notification">Item added to cart</div>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- Image for Product 2 -->
                    <img src="images/RecycleClothe.webp" alt="Product 2 Image">
                </td>
                <td>
                    <!-- Product 2 details -->
                    <h3>Recycled Clothes</h3>
                    <p>Our recycled clothes are made from post-consumer and post-industrial waste materials, such as plastic bottles and textile scraps. By giving new life to discarded materials, we help minimize landfill waste and conserve valuable resources, all while offering stylish and eco-friendly clothing options.</p>
                    <!-- Button to add Product 2 to cart -->
                    <button onclick="addToCartAndNotify('RecycleClothes', 24.99)">Buy Now</button>
                    <div class="notification">Item added to cart</div>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- Image for Product 3 -->
                    <img src="images/BambooToothbrush.webp" alt="Product 3 Image">
                </td>
                <td>
                    <!-- Product 3 details -->
                    <h3>Bamboo Toothbrushes</h3>
                    <p>Say goodbye to plastic toothbrushes and switch to our eco-friendly bamboo toothbrushes. Made from sustainable bamboo, these toothbrushes are biodegradable and compostable, offering a sustainable alternative to traditional plastic toothbrushes. Help reduce plastic pollution and promote oral health with our environmentally conscious toothbrushes.</p>
                    <!-- Button to add Product 3 to cart -->
                    <button onclick="addToCartAndNotify('toothbrushes', 24.99)">Buy Now</button>
                    <div class="notification">Item added to cart</div>
                </td>
            </tr>
        </table>
    </div>

    <!-- Footer section -->
    <div class="footer">
        <!-- Copyright information -->
        <p>Copyright &copy; 2024 Infinity Community. All rights reserved.</p>
    <div>

</body>
</html>
