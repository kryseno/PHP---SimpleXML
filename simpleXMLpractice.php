<?php
$html = '';
$url = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCD5WWnRed32y3xGwmrDhUiQ';
$xml = simplexml_load_file($url);

for($i=0; $i<10; $i++){
    $title = $xml->entry[$i]->title;
    $html .= "<h3>$title</h3><hr>";
}
echo $html
?>