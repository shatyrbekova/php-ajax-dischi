<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discs</title>
</head>
<body>
<div class="container">
<?php

require_once __DIR__ ."/database/database.php";


foreach($database as $disc){

    
      $poster = "<img class='poster' src ='{$disc['poster']}'><br/>";
      $title = "{$disc['title']}<br/>";
      $author ="{$disc['author']}<br/>";
      $genre= "{$disc['genre']}<br/>";
      $year =  "{$disc['year']}<br/>";

     echo " <main class='albums'> 
            $poster
            $title
            $author
            $genre
            $year
     </main>";
  
?>
};
</div>
</body>
</html>