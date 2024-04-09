<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustainable Products</title>
    <link rel="stylesheet" href="styles.css">
    <script src="BuyNow.js"></script>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <img src="images/logo.webp" alt="Logo">
            </div>
            <div class="header-text">
                <h1>Sustainable Products</h1>
            </div>
            <div class="login-register">
                <a href="login.php">Login/Register</a>
            </div>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="LandingPage.php">Home</a></li>
            <li><a href="SustainableProducts.php">Sustainable Products</a></li>
            <li><a href="FootPrintCalc.php">Footprint Calculator</a></li>
            <li><a href="Cart.php">Cart</a></li>
        </ul>
    </nav>


    <script src="BuyNow.js"></script>
    <div class="products">
        <table class="product-table">
            <tr>
                <td>
                    <img src="images/CompostableMicrofiber.webp" alt="Product 1 Image">
                </td>
                <td>
                    <h3>Compostable Microfiber Cloths</h3>
                    <p>Our compostable microfiber cloths are made from natural and sustainable materials that break down easily in compost systems. They offer superior cleaning performance while being environmentally friendly, helping you reduce your carbon footprint.</p>
                    <button onclick="addToCartAndNotify('compostable microfiber cloths', 24.99)">Buy Now</button>
                </td>
            </tr>

            <tr>
                <td>
                    <img src="images/RecycleClothe.webp" alt="Product 2 Image">
                </td>
                <td>
                    <h3>Recycled Clothes</h3>
                    <p>Our recycled clothes are made from post-consumer and post-industrial waste materials, such as plastic bottles and textile scraps. By giving new life to discarded materials, we help minimize landfill waste and conserve valuable resources, all while offering stylish and eco-friendly clothing options.</p>
                    <button onclick="addToCartAndNotify('RecycleClothes', 24.99)">Buy Now</button>
                </td>
            </tr>

            <tr>
                <td>
                    <img src="images/BambooToothbrush.webp" alt="Product 3 Image">
                </td>
                <td>
                    <h3>Bamboo Toothbrushes</h3>
                    <p>Say goodbye to plastic toothbrushes and switch to our eco-friendly bamboo toothbrushes. Made from sustainable bamboo, these toothbrushes are biodegradable and compostable, offering a sustainable alternative to traditional plastic toothbrushes. Help reduce plastic pollution and promote oral health with our environmentally conscious toothbrushes.</p>
                    <button onclick="addToCartAndNotify('toothbrushes', 24.99)">Buy Now</button>
                </td>
            </tr>
        </table>
        <script src="Vote.js"></script>
    </div>

    <script src="BuyNow.js"></script>


    <div id="footer">
        <p>&copy; 2024 All rights reserved.</p>
    </div>

</body>
</html>