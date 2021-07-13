<?php
   // Url de l'API
    //$url = "http://api.openweathermap.org/data/2.5/weather?q=VILLE&lang=fr&units=metric&appid=TOKEN";
	$urlWeather = "http://api.openweathermap.org/data/2.5/weather?q=Saint-Denis,RE&lang=fr&units=metric&appid=a1683e6a72ef1cd52e8cbe5bd25d5aaf";


    // On get les resultat
    $rawWeather = file_get_contents($urlWeather);
    // Décode la chaine JSON
    $jsonWeather = json_decode($rawWeather);

    // Nom de la ville
    $nameWeather = $jsonWeather->name;
    
    // Météo
    $weather= $jsonWeather->weather[0]->main;
    $descWeather = $jsonWeather->weather[0]->description;

    // Températures
    $temp = $jsonWeather->main->temp;
    $feel_like = $jsonWeather->main->feels_like;

    // Vent
    $speed = $jsonWeather->wind->speed;
    $deg = $jsonWeather->wind->deg;

?> 