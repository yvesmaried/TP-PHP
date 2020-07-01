<?php

// if (function_exists('simplexml_load_file')) {     
//     echo "simpleXML functions are available.<br />\n"; 
// } else {     
//     echo "simpleXML functions are not available.<br />\n"; 
// }

$test = simplexml_load_file('source.xml');
$regexId = '/^[1-4]$/';
 
// var_dump($test->page[2]);
// var_dump($_GET['id']);
// echo $_GET['id'];
// var_dump(isset($test->page[intval($_GET['id']) - 1]->content));
// var_dump(intval('qsdd7'));


if (isset($_GET['id']) && preg_match($regexId, $_GET['id'])) {
    foreach ($test as $page) {
        echo $page->menu . chr(10);
        var_dump($page->menu['id']);
    }
    echo $test->page[intval($_GET['id']) - 1]->content;
} else {
    echo 'Cette page n\'existe pas';
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