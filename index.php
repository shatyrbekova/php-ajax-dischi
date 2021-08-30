<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// [
//     'title' => 'New Jersey',
//     'author' => 'Bon Jovi',
//     'year' => 1988,
//     'genre'=> "Rock",
//     'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
// ]
require_once __DIR__ ."/database/database.php";

foreach($database as $disc){

    
      // echo "{$disc}<br/>";
      echo  "<img class='poster' src ='{$disc['poster']}'><br/>";
      echo  "{$disc['title']}<br/>";
      echo  "{$disc['author']}<br/>";
      echo  "{$disc['genre']}<br/>";
      echo  "{$disc['year']}<br/>";
 
  
    
}


?>
</body>
</html>
