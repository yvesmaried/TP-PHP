<?php

// if (function_exists('simplexml_load_file')) {     
//     echo "simpleXML functions are available.<br />\n"; 
// } else {     
//     echo "simpleXML functions are not available.<br />\n"; 
// }

$test = simplexml_load_file('source.xml');
$regexId = '/^[1-4]$/';

if (isset($_GET['error'])) {
    echo '<h1>404 Error</h1><p>Page not found...</p>';
}

if (isset($_GET['id'])) {
    if (preg_match($regexId, $_GET['id'])) {
        foreach ($test as $page) {
                echo '<div class="menu"><a href="' . $page['id'] . '.html">' . $page->menu . '</a></div>';
        }
        echo $test->page[intval($_GET['id']) - 1]->content;
    } else {
    echo 'Cette page n\'existe pas';
    }
} else {
    foreach ($test as $page) {
        echo '<div class="menu"><a href="' . $page['id'] . '.html">' . $page->menu . '</a></div>';
    }
    echo $test->page[0]->content;
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
    
    <script src="assets/script.js"></script>
</body>
</html>