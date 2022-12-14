<?php require('header.html')?>
<?php require ('curl_init.php') ?>
<div class="albumPage">
<?php


$albumId = $_GET['id'];
foreach($resultat['records'] as $valeur){
    $id = $valeur['id'];
    if($id == $albumId){
        $album = $valeur['fields']['Album'];
        $artiste = $valeur['fields']['Artiste'];
        $prix = $valeur['fields']['Prix'];
        $img = $valeur['fields']['img'];
        $date = $valeur['fields']['Date'];
        $stock = $valeur['fields']['Stock'];
        $id = $valeur['id'];
        echo "<div class='card'>
        <img src=$img>
        <h3>Album : $album</h3>
        <h3>Artiste : $artiste</h3>
        <p>Date de sortie : $date</p>
        <h4>Stock : $stock produits restant</h4>";
    };
}

?>
</div>