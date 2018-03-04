<?php
//*******************//
//    cURL example   //
//*******************//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.youtube.com/feeds/videos.xml?channel_id=UCD5WWnRed32y3xGwmrDhUiQ');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_Exec($ch);
//*******************//
//    without cURL   //
//*******************//
$html = '';
$url = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCD5WWnRed32y3xGwmrDhUiQ';
$xml = simplexml_load_file($url); //skips cURL
$channel = $xml->title;
$address = $xml->author->uri;
?>