<?php require('../html/header.html')?>

<form id="formUpdateAlbum">
    <div id="form">
        <label class="album">Album :
            <input class="Album" type="text" name="Album">
        </label>
        <label class="artist">Artist :
            <input class="Artist" type="text" name="Artist">
        </label>
        <label class="category">Category :
            <input class="Category" type="text" name="Category">
        </label>
        <label class="date">Date :
            <input class="Date" type="text" name="Date" placeholder="12/12/1999">
        </label>
        <label class="price">Price :
            <input class="Price" type="text" name="Price">
        </label>
        <label class="cover">Cover :
            <input class="Cover" type="text" name="Cover">
        </label>
        <label class="linkBuy">Lien vers site de vente :
            <input class="LinkBuy" type="text" name="LinkBuy">
        </label>
       <button class="btnUpdate" type="submit" onclick="window.location.href = 'index.php'">Modifier l'album</button>

    </div>

</form>
<?php require('../html/footer.html')?>