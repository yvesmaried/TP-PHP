<?php

if (function_exists('simplexml_load_file')) {     
    echo "simpleXML functions are available.<br />\n"; 
} else {     
    echo "simpleXML functions are not available.<br />\n"; 
}

$test = simplexml_load_file('source.xml');

var_dump($test);

foreach ($test as $page) {
    if ($page['id'] == 1) {
        echo $page->menu . '</br>' . $page->title . '</br>' . $page->content . '</br></br></br></br></br></br></br></br></br></br></br>';
    }
    // echo $page->menu . '</br>' . $page->title . '</br>' . $page->content . '</br></br></br></br></br></br></br></br></br></br></br>';
    var_dump($page);
}

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