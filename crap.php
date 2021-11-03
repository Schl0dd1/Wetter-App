<?php
$wetterdaten = file_get_contents('https://www.metaweather.com/api/location/638242/');

//Umformung in PHP Array:

    $wetterdaten = json_decode($wetterdaten, true);

$wochenwetter = $wetterdaten['consolidated_weather'];

$time = $wetterdaten['time'];


$heute = $wochenwetter[0];

//zahlen runden auf eine ganze
//$min_temp = $heute['min_temp'];
//$min_temp = round($min_temp);

//in einer zeile:
$min_temp = round($heute['min_temp']);
$max_temp = round($heute['max_temp']);

//in einer zeile wäre es :
//$min_temp = $wetterdaten['consolidated_weather'][0]['min_temp'];

$img = $heute['weather_state_abbr'];


//Funktion für angepassen spruch unter der wolke, angepasst an wetter-bild:

function tagline($x) {
    if ($x == 'c') {
        echo "Raus mit dir du Couch-Potato";
    }
    elseif ($x =='s' or $x=='lc') {
        echo "Nimm ne Jacke mit";
    }

    else {
        echo "Bleib im Bett";
    }

}

$day_one = strtotime('tomorrow');
$day_two = strtotime ('+2 Days');
$day_three = strtotime ('+3 Days');
$day_four = strtotime ('+4 Days');
$day_five = strtotime ('+5 Days');
$day_six = strtotime ('+6 Days');


$tage = array('Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag');


// or ist auch ||
//var_dump($wochenwetter);





