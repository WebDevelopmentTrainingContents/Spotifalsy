<?php require ('header.html') ?>

<form id="form">
    <div id="createAlbum">
        <label class="album">Album
            <input class="Album" type="text" name="Album">
        </label>
        <label class="artiste">Artiste
            <input class="Artiste" type="text" name="Artiste">
        </label>
       <button class="btnSubmit" type="submit">Ajouter un album</button>

    </div>

</form>
//fermeture de la session la session
<?php curl_close($curl); ?>
<?php require ('footer.html')?>