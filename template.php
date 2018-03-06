<?php

    //*******************//
    //    without cURL   //
    //*******************//
    // $title = $xml->entry[$i]->title;
    // $videoId = $xml->entry[$i]->id;
    // $videoId = str_replace('yt:video:', '', $videoId);
    // $media = $xml->entry[$i]->children('http://search.yahoo.com/mrss/');
    // $description = $media->group->description;
    // $description = substr($description, 0, strrpos($description, 'SUBSCRIBE'));

    // if(!$description){
    //     $description = 'No Description Found';
    // }

    //*******************//
    //    cURL example   //
    //*******************//
    $title = $xml->entry[$i]->title;
    $videoId = $xml->entry[$i]->id;
    $videoId = str_replace('yt:video:', '', $videoId);
    $media = $xml->entry[$i]->children('http://search.yahoo.com/mrss/');
    $description = $media->group->description;
    $description = substr($description, 0, strrpos($description, 'SUBSCRIBE'));

    if(!$description){
        $description = 'No Description Found';
    }
?>