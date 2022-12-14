<?php require ('header.html') ?>

<form id="formAddAlbum">
    <div id="form">
        <h3>Ajouter mon album</h3>
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
            <input class="Date" type="text" name="Date" placeholder="dd/mm/yyyy">
        </label>
        <label class="price">Price :
            <input class="Price" type="text" name="Price" placeholder="99.99$">
        </label>
        <label class="cover">Cover :
            <input class="Cover" type="text" name="Cover" placeholder="http://lien-vers-une-img.com">
        </label>
        <label class="linkBuy">Lien vers site de vente :
            <input class="LinkBuy" type="text" name="LinkBuy" placeholder="http://lien-vers-le-site.com">
        </label>
       <button class="btnSubmit">Ajouter un album</button>

    </div>

</form>
<?php require ('footer.html')?>