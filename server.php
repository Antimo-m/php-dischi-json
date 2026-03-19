<?php

//prendiamo il percorso del nostro file json

$json_file = "./dischi.json";

//leggiamo json esistente
$json_text = file_get_contents($json_file);
$dischi = json_decode($json_text, true) ?? [];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $titolo = $_POST["titolo"];
    $artista = $_POST["artista"];
    $cover = $_POST["cover_url"];
    $anno = $_POST["anno"];
    $genere = $_POST["genere"];



    $dischi[] = [
        "titolo" => $titolo,
        "artista" => $artista,
        "cover" => $cover,
        "anno" => $anno,
        "genere" => $genere
    ];

    file_put_contents("dischi.json", json_encode($dischi));


    header("Location: index.php");
}



?>
