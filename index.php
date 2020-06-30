<?php
include 'source.php';

$website = new SimpleXMLElement($xmlstr);

echo $website->page[0]->content[0];

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