<?php 

$dischi = json_decode(file_get_contents('dischi.json'), true);

foreach ($dischi as $disco) {
    echo 'Titolo: ' . $disco['title'] . '<br>';
    echo 'Autore: ' . $disco['author'] . '<br>';
    echo 'Anno: ' . $disco['year'] . '<br>';
    echo 'Poster: ' . $disco['poster'] . '<br>';
    echo 'Genere: ' . $disco['genre'] . '<br><br>';
}

var_dump($dischi);

?>