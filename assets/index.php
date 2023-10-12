<?php 

/* Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
Bonus (da fare entro domani prima della correzione)
Al click su un disco, recuperare e mostrare i dati del disco selezionato.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- Title -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fontawesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./style.css">
    <!-- Link CSS -->
</head>
<body>

    <div id="app">
        <header>
            <div class="header">
                <img src="../assets/img/logo-small.svg" alt="">
            </div>
        </header>

        <div class="container_card">
            <div class="row_card">
                
                  <div class="card col-12 col-md-6 col-lg-4" v-for="disco in dischi">
                    <div class="card_img">
                        <img :src="disco.poster" alt="Poster">
                    </div>
                    <div class="card_text text-center">
                        <h4>{{ disco.title }}</h4>
                        <p>{{ disco.author }}</p>
                        <p>{{ disco.year }}</p>
                    </div>
                  </div>
                
            </div>
            <!-- <div class="row">
                <div class="col-sm-4" >
                  <div v-for="disco in dischi">
                    <img :src="disco.poster" alt="Poster">
                    <h2>{{ disco.title }}</h2>
                    <p>{{ disco.author }}</p>
                    <p>{{ disco.year }}</p>
                  </div>
                </div>
            </div> -->
            
        </div>
    </div>

    <!-- <p>{{ disco.genre }}</p> -->
    <!-- Vue.js -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JS -->
    <script src='./main.js'></script>
</body>
</html>