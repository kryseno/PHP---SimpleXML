<?php
$html = '';
$url = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCD5WWnRed32y3xGwmrDhUiQ';
$xml = simplexml_load_file($url);
$channel = $xml->title;
$address = $xml->author->uri;
$header = "<h1>YouTube Channel: <a href='$address'>$channel</a></h1>";

for($i=0; $i<10; $i++){
    $title = $xml->entry[$i]->title;
    $videoId = $xml->entry[$i]->id;
    $videoId = str_replace('yt:video:', '', $videoId);
    $media = $xml->entry[$i]->children('http://search.yahoo.com/mrss/');
    $description = $media->group->description;
    $description = substr($description, 0, strrpos($description, 'SUBSCRIBE'));
    $html .= "<h3>$title</h3>
    <br><iframe width='560' height='315' src='https://www.youtube.com/embed/$videoId' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
    <br>$description<hr>";
}
echo $header.$html
?>