<?php require('../html/header.html')?>
<?php require ('../curl/curl_albums.php') ?>
<?php
$albumId = $_GET['id'];
foreach($resultat['records'] as $valeur){
    $id = $valeur['id'];
    if($id == $albumId){
        $album = $valeur['fields']['Album'];
        $artiste = $valeur['fields']['Artist'];
        $prix = $valeur['fields']['Price'];
        $img = $valeur['fields']['Cover'];
        $date = $valeur['fields']['Date'];
        $genre = $valeur['fields']['Category'];
        $id = $valeur['id'];
        echo "<div class='albumPage'>

        <div class='card'>
        <img src=$img>
        <h3>Album : $album</h3>
        <h3>Artiste : $artiste</h3>
        <h3>Genre : $genre</h3>
        <p>Date de sortie : $date</p>
        <a href='updateAlbum.php?id=${id}'>Modifier l'album</a>
        </div>";
    };
}
?>
<?php require('../html/footer.html')?>