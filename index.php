<?php

if (function_exists('simplexml_load_file')) {     
    echo "simpleXML functions are available.<br />\n"; 
} else {     
    echo "simpleXML functions are not available.<br />\n"; 
}

$test = simplexml_load_file('source.xml');

var_dump($test->page[2]);
var_dump($_GET['id']);
echo $_GET['id'];

if (isset($_GET['id']) && isset($test->page[intval($_GET['id'])]->content)) {
    echo $test->page[intval($_GET['id'])]->content;
} else {
    echo $test->page[0]->content;
}

// echo $test->page[1]->content;
// foreach ($test as $page) {
    
//     if ($page['id'] == 1) {
//         echo $page->title . '</br>' . $page->content;
//     }
//     echo $page->menu . chr(10);
//     echo $page->menu . '</br>' . $page->title . '</br>' . $page->content . '</br></br></br></br></br></br></br></br></br></br></br>';
//     var_dump($page);
// }

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