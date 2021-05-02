<?php 
require_once '../src/helper/functions.php';

/*
*   initializing current weather data
*   default location: Caloocan
*   lat: 14.6571
*   lon: 120.9841
*/

$feedback = [];
$weatherData = [];

// if search button is clicked
if(isset($_POST['search'])) {

    // if the value in the search input is not a valid city
    if(!isValidCity($_POST['search'])) {
         
        // return default weather data
        $feedback['searchErr'] = 'is-invalid';
        $weatherData = currentWeather();
    }

    // if a valid city return the weather data of that city
    if(empty($feedback['searchErr'])) {
        $cityData = getCoordinates($_POST['search']);
        $weatherData = currentWeather($cityData);
    }
} else {

    /*
    *   responsible for when search button is not click
    *   return weather data of the default location
    */
    $weatherData = currentWeather();
}

/*
*   rendering the main app
*/

headerHTML();
addComponents('navigation', $feedback);
addComponents('pst');
addComponents('weather-info', $weatherData); 
addComponents('scripts');
footerHTML(); 