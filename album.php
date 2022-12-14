<?php require('header.html')?>
<?php require ('curl_init.php') ?>
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
        $stock = $valeur['fields']['Stock'];
        $id = $valeur['id'];
        echo "<div class='albumPage'>

        <div class='card'>
        <img src=$img>
        <h3>Album : $album</h3>
        <h3>Artiste : $artiste</h3>
        <p>Date de sortie : $date</p>
        <a href='updateAlbum.php?id=${id}'>Modifier l'album</a>
        </div>";
    };
}
?>
<?php curl_close($curl); ?>
<?php require ('footer.html')?>