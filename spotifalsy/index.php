<?php require ('header.html') ?>
<?php require ('curl_init.php') ?>
<main>

<?php

foreach($resultat['records'] as $valeur){
    $album = $valeur['fields']['Album'];
    $artiste = $valeur['fields']['Artiste'];
    $prix = $valeur['fields']['Prix'];
    $img = $valeur['fields']['img'];
    $id = $valeur['id'];
    echo "<a href='album.php?id=$id'><div class='card'>
    <img src=$img>
    <p>$album</p> </div></a>";
}

?>
</main>