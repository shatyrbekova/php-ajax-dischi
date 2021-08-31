<?php


//stampiamo il json dell'array database

require_once __DIR__ . "/../database/database.php";
header('Content-Type: application/json');
echo json_encode($database);
   $albumType = 'Pop';
   $getAlbumForGenre = array_filter($database, function($album)  use ($albumType) {
   return $album['genre'] === $albumType;
});
var_dump($getAlbumForGenre);
?>