<?php

require_once '../src/vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

// Render Header HTML
function headerHTML()
{
    include_once '../src/layouts/header.html';
}

// Render Footer HTML
function footerHTML()
{
    include_once '../src/layouts/footer.html';
}

// Render new components to main app
function addComponents($filename, $data = [])
{
    extract($data);
    include_once '../src/components/' . $filename . '.php';
}

// Check if input data does exist in ph.json
function isValidCity($inpData) 
{
    $string = file_get_contents("../public/data/ph.json");
    $json_data = json_decode($string, true);

    foreach ($json_data as $data){
        if($inpData === $data['city']) {
            return true;
        }
    }
    return false;
}

// Return the coordinates of that specific city
function getCoordinates($cityname) {
    $string = file_get_contents("./data/ph.json");
    $json_data = json_decode($string, true);

    foreach ($json_data as $data){
        if($cityname === $data['city']) {
            return $data;
        }
    }
}

// Sending request to the Weatherbit API and return data
function currentWeather($data = ['city'=> 'Caloocan', 'province' => '', 'lat' => '14.6571', 'lon' => '120.9841']) {

    $reqMethod = 'GET';
    $reqURL = 'https://weatherbit-v1-mashape.p.rapidapi.com/current';

    $reqHeaders = [
        'x-rapidapi-key' => 'MY_API_KEY',
        'x-rapidapi-host' => 'weatherbit-v1-mashape.p.rapidapi.com'
    ];

    $reqQuery = [
        'lat' => $data['lat'],
        'lon' => $data['lon'],
        'lang' => 'en',
        'units' => 'metric'
    ];

    $client = HttpClient::create();
    $response = $client->request($reqMethod, $reqURL, ['headers' => $reqHeaders, 'query' => $reqQuery]);

    $weatherData = json_decode($response->getContent(), true);
    $weatherData = $weatherData['data'][0];
    $weatherData['city'] = $data['city'];
    $weatherData['province'] = $data['province'];

    return $weatherData;
}