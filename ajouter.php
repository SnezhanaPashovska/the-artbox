<?php require ("header.php"); ?>

<form action="traitement.php" method="POST">
    <div class="champ-formulaire">
        <label for="nom_oeuvre">Titre de l'œuvre</label>
        <input type="text" name="nom_oeuvre" id="nom_oeuvre">
    </div>
    <div class="champ-formulaire">
        <label for="author">Auteur de l'œuvre</label>
        <input type="text" name="author" id="author">
    </div>
    <div class="champ-formulaire">
        <label for="image">URL de l'image</label>
        <input type="url" name="image" id="image">
    </div>
    <div class="champ-formulaire">
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <input type="submit" value="Valider" name="submit">
</form>

<?php require ("footer.php"); ?>