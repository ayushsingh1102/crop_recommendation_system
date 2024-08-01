<?php
require 'config.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather Forecasting For Farmers</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="CSS/weather.css">
</head>
<body>
<div class="video-background">
        <video autoplay muted loop id="bg-video">
            <source src="weather.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>
<div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6 text-center">
                <div class="search-container">
                    <form class="d-flex">
                        <input id="city" class="form-control me-2" type="search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit" id="submit">Search</button>
                        <a href="home.php" class="btn btn-home">Home</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <h1 class="my-4 text-center weather-heading">Weather For <span id="cityName"></span> <span class="fas fa-cloud"></span></h1>
    <main>
        <div class="row row-cols-1 row-cols-md-1 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Temperatures</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">
                            <span id="temp2"></span><small class="text-body-secondary fw-light">&#8451;</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Temperature: <span id="temp"></span></li>
                            <li>Min Temperature: <span id="min_temp"></span></li>
                            <li>Max Temperature: <span id="max_temp"></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Humidity Information</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">
                            <span id="humidity2"></span><small class="text-body-secondary fw-light">%</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Wind degree: <span id="wind_degrees"></span></li>
                            <li>Feels like: <span id="feels_like"></span></li>
                            <li>Humidity: <span id="humidity"></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Wind Information</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">
                            <span id="wind_speed2"></span><small class="text-body-secondary fw-light">Km/h</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Wind speed: <span id="wind_speed"></span></li>
                            <li>Sunrise: <span id="sunrise"></span></li>
                            <li>Sunset: <span id="sunset"></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>