<?php require('../html/header.html')?>
<?php require ('../curl/curl_albums.php') ?>
<main>
<?php
foreach($resultat['records'] as $valeur){
    $album = $valeur['fields']['Album'];
    $artiste = $valeur['fields']['Artist'];
    $prix = $valeur['fields']['Price'];
    $img = $valeur['fields']['Cover'];
    $id = $valeur['id'];
    echo "<a href='album.php?id=$id'><div class='card'>
    <img src=$img>
    <p>$album</p> </div></a>";
}
?>
</main>
<?php require('../html/footer.html')?>