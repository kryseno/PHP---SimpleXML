<?php

$url = "https://gateway.marvel.com:443/v1/public/characters?apikey=6e9af333fe9d6fd94c038d17f4bea675";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);

curl_close($ch);

echo $result;
?>