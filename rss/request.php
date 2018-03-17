<?php
//*******************//
//    without cURL   //
//*******************//
// $html = '';
// $url = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCD5WWnRed32y3xGwmrDhUiQ';
// $xml = simplexml_load_file($url); //skips cURL
// $channel = $xml->title;
// $address = $xml->author->uri;

//*******************//
//    cURL example   //
//*******************//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.youtube.com/feeds/videos.xml?channel_id=UCD5WWnRed32y3xGwmrDhUiQ');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$response = curl_exec($ch);
curl_close($ch);

$xml = simplexml_load_string($response);
$channel = $xml->title;
$address = $xml->author->uri;
?>