<?php
$html = '';
$url = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCD5WWnRed32y3xGwmrDhUiQ';
$xml = simplexml_load_file($url);
$channel = $xml->title;
$address = $xml->author->uri;
for($i=0; $i<10; $i++){
    $title = $xml->entry[$i]->title;
    $html .= "<h3>$title</h3><hr>";
}
echo "<h1>YouTube Channel: <a href='$address'>$channel</a></h1>".$html
?>