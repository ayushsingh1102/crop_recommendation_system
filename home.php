 <?php
require 'config.php';

 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Portal</title>
    <link rel="stylesheet" href="CSS/home.css">
</head>
<body>
<nav>
    <a href="http://127.0.0.1:5000">Crop Recommendation</a>
    <a href="weather.php">Weather Forecasting</a>
    <a href="">About</a>
    <a href="login.php">Logout</a>
</nav>
<div class="video-background">
        <video autoplay muted loop id="bg-video">
            <source src="home.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="content">
            <h1>Welcome to Farmer's Portal</h1>
            <p>This is a platform where you can access crop recommendations, weather forecast.</p>
            <p>This software is very useful for farmers. </p>
            <p>With its help, they can cultivate crops according to the Temperature, Humidity and Rainfall.</p>
        </div>
</div>

<footer class="custom-paragraph">
    <p>&copy; 2024 Farmer's Portal. All rights reserved.</p>
    <p>       Developed By:  Ayush singh, Tanisha paroliya </p>
</footer>
</body>
</html>
