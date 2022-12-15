<?php require('../html/header.html')?>
<?php require ('../curl/curl_albums.php') ?>
<?php require ('../curl/curl_artist.php') ?>
<?php require ('../curl/curl_artists.php') ?>

<?php

$artists = [];

foreach($resultart['records'] as $valeur){

    $id= $valeur['id'];
    $artist = $valeur['fields']['Artist'];
    if(!array_key_exists($artist, $artists)){
        $artists[$artist] = $valeur;
        echo "<a href='artist.php?id=$id'><div class='card'>
            <p>$artist</p> </div></a>";
    }
    
}

?>
<?php curl_close($curl); ?>

<?php require('../html/footer.html')?>