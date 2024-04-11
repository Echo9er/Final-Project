<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define document metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity Community</title>
    <!-- Link to external stylesheet -->
    <link rel="stylesheet" href="styles.css">
    <script src="js/AirQualityIndex.js"></script>
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
                <h1>Home</h1>
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

    <!-- Image section -->
    <div class="image-container">
        <!-- Image -->
        <img src="images/LandingImage.jpg" alt="Image" class="full-width-image">
        <!-- Image text -->
        <div class="image-text">
            <h1>Infinity Community</h1>
        </div>
    </div>
    
    <!-- About us section -->
    <div class="about-us">
        <h2>About Us</h2>
        <!-- Profiles table -->
        <table class="profile">
            <tr>
                <!-- Profile 1 -->
                <td class="profile-item">
                    <img src="images/rodney.jpg" alt="Profile 1">
                    <div class="profile-info">
                        <h3>Rodney Tayebwa</h3>
                        <p>taye0009@algonquinlive.com</p>
                    </div>
                </td>
                <!-- Profile 2 -->
                <td class="profile-item">
                    <img src="images/remipilon.jpg" alt="Profile 2">
                    <div class="profile-info">
                        <h3>Remi Pilon</h3>
                        <p>pilo0199@algonquinlive.com</p>
                    </div>
                </td>
                <!-- Profile 3 -->
                <td class="profile-item">
                    <img src="images/carol.jpg" alt="Profile 3">
                    <div class="profile-info">
                        <h3>Carol Kassabaki</h3>
                        <p>kass0094@algonquinlive.com</p>
                    </div>
                </td>
                <!-- Profile 4 -->
                <td class="profile-item">
                    <img src="images/ikram.jpg" alt="Profile 4">
                    <div class="profile-info">
                        <h3>Ikram Abushaban</h3>
                        <p>abus0059@algonquinlive.com</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <!-- Best practices section -->
    <div class="best-practices">
        <h2>Best Practices</h2>
        <table class="practice-table">
            <tr>
                <td class="practice">
                    <h3>Reduce, Reuse, Recycle</h3>
                    <p>Minimize waste generation by reducing consumption, reusing items whenever possible, and recycling materials.</p>
                </td>
                <td class="practice">
                    <h3>Conserve Energy</h3>
                    <p>Implement energy-saving measures such as using energy-efficient appliances, turning off lights when not in use, and optimizing heating and cooling systems.</p>
                </td>
                <td class="practice">
                    <h3>Promote Sustainable Transportation</h3>
                    <p>Encourage the use of public transportation, cycling, walking, and carpooling to reduce greenhouse gas emissions from vehicles.</p>
                </td>
            </tr>
        </table>
    </div>

    <!-- Air Quality Index -->
    <div class="environment-news">
        <h2>Air Quality Index</h2>
        <div id="aqi-container">
            <!-- AQI will be displayed here -->
        </div>
    </div>

    <div id="clock"></div>

    <script src="js/clock.js"></script>

    <!-- Footer section -->
    <div class="footer">
        <!-- Copyright information -->
        <p>Copyright &copy; 2024 Infinity Community. All rights reserved.</p>
    </div>

</body>
</html>
