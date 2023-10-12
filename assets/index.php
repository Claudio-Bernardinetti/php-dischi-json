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
    <link rel="stylesheet" href="./style.css">
    <!-- Link CSS -->
</head>
<body>
    <div id="app">

        <div v-for="disco in dischi">
            <h2>{{ disco.title }}</h2>
            <img :src="disco.poster" alt="Poster">
            <p>{{ disco.author }}</p>
            <p>{{ disco.year }}</p>
            <p>{{ disco.genre }}</p>
        </div>
        
    </div>

    <!-- Vue.js -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JS -->
    <script src='./main.js'></script>
</body>
</html>