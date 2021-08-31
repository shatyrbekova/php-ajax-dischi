<?php


//stampiamo il json dell'array database

require_once __DIR__ . "/../database/database.php";
header('Content-Type: application/json');
echo json_encode($database);

$getAlbumForGenre = array_filter($database, function($album)  use ($genre) ){
    return $album['genre'] === $genre;
};
var_dump($getAlbumForGenre);
?>