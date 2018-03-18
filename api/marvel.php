<?php

$hash = hash('md5', 'marvel');
$url = "https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=6e9af333fe9d6fd94c038d17f4bea675&hash=" . $hash;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);

curl_close($ch);

echo $result;
?>