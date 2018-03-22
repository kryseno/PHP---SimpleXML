<?php

//Create XML Data
$xml = <<<XML
<content>
    <title>The Office Characters</title>
    <characters>
        <name>Michael Scott</name>
            <title>Regional Manager</title>
        <name>Dwight Shrute</name>
            <title>Assistant to the Regional Manager</title>
        <name>Toby Flenderson</name>
            <title>HR Rep</title>
    </characters>
</content>
XML;

$xml_object = new SimpleXMLElement($xml);
$xmlFile = $xml_object->asXML('createdXML.xml');

$character = $xml_object->xpath('/content/characters/name');
$count = count($character);

for($i=0; $i<$count; $i++) {
    echo 'Character Name: ' . $character[$i] ?><br><?php;
}


//cURL
// $url = "";

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlFile);
// $result = curl_exec($ch);
// curl_close($ch);
?>