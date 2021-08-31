<!-- 
Seconda Milestone:
Al caricamento della pagina axios chiederà,
attraverso una chiamata api, i dischi a php e li stamperà attraverso Vue.
Utilizziamo Vue con CDN e axios sempre da CDN. (come visto oggi in live coding => https://github.com/ott-fogliata/boolean-live-php) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The second milestone</title>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="./css/second-milestone.css">
</head>
<body>
    <div id="app">
    <nav>
   <div class="logo">
      <img src="./img/spotify-logo.png" alt="logo">
   </div>
</nav>

        <main class="albums">

            <div class="disc-container col-md-12 col-lg-12" v-for="disc in discs">
                <div class="disc-box">
                   
                    <img :src="disc.poster" alt="">
                    <div class="title"> {{disc.title}} </div>
                    <div class="title-informations">
                        <div class="author"> {{disc.author}} </div>
                        <div class="year"> {{disc.year}} </div>
                    </div>
              
                </div>
             </div> 

       </main>
          

    </div>
    <script src="js/script.js"></script>
</body>
</html>