<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Montserrat, sans-serif;
        }
    </style>
</head>
<body>
<?php
include('request.php');
?>
    <h1>YouTube Channel: <a href='<?=$address?>'><?=$channel?></a></h1>
<?php
for($i=0; $i<10; $i++){
    include('template.php');
?>
    <h3><?=$title?></h3>
    <br><iframe width='560' height='315' src='https://www.youtube.com/embed/<?=$videoId?>' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
    <br><?=$description?><hr>
<?php
}
?>
    

</body>
</html>