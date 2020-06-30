<?php

if (function_exists('simplexml_load_file')) {     
    echo "simpleXML functions are available.<br />\n"; 
} else {     
    echo "simpleXML functions are not available.<br />\n"; 
}

$test = simplexml_load_file('source.xml');

var_dump($test);

// $website = new SimpleXMLElement($test);

// echo $website->page[0]->content[0];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/styles.css" rel="stylesheet">
    <title>tp php</title>
</head>
<body>
    <h1>titre</h1>
    
</body>
</html>