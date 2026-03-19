<?php

$json_text = file_get_contents("./dischi.json");

$disco = json_decode($json_text);
var_dump($disco);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>