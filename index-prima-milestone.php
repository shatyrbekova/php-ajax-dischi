<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi. -->

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



<?php
foreach($database as $disc){

    
      $poster = "<img class='poster' src ='{$disc['poster']}'><br/>";
      $title = "{$disc['title']}<br/>";
      $author ="{$disc['author']}<br/>";
      $genre= "{$disc['genre']}<br/>";
      $year =  "{$disc['year']}<br/>";
?>

    <main class="albums">
      <div class="disc-container col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="disc-box">
              <?php echo "$poster"?>
             <div class="title"><?php echo "$title"?></div>
              <div class="box-informations">
                  <?php echo "$author"?>
                  <?php echo "$year"?>
              </div>
          </div>
      </div>
      </main>
            
<?php  

};
?>


</div>
</body>
</html>