<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discs /the 1th Milestone</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">

<?php
require_once __DIR__ ."/database/database.php";
?>
<nav>
   <div class="logo">
      <img src="./img/spotify-logo.png" alt="logo">
   </div>
</nav>

<main class="albums">


<?php
foreach($database as $disc){

    
      $poster = "<img class='poster' src ='{$disc['poster']}'><br/>";
      $title = "{$disc['title']}<br/>";
      $author ="{$disc['author']}<br/>";
      $genre= "{$disc['genre']}<br/>";
      $year =  "{$disc['year']}<br/>";
?>
      <div class="disc-container">
          <div class="disc-box">
              <?php echo "$poster"?>
              <?php echo "$title"?>
              <div class="title-informations">
                  <?php echo "$author"?>
                  <?php echo "$year"?>
              </div>
          </div>
      </div>
   
            
<?php  

};
?>

</main>
</div>
</body>
</html>