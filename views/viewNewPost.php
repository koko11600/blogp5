<form method="POST" action="traitement.php">
    <label for="titre">Titre de l'article:</label><br>
    <input type="text" id="titre" name="titre" required><br><br>
    
    <label for="chapo">Châpo de l'article:</label><br>
    <textarea id="chapo" name="chapo" required></textarea><br><br>
    
    <label for="categorie">Choix de catégorie:</label><br>
    <select id="categorie" name="categorie" required>
        <option value="categorie1">PHP</option>
        <option value="categorie2">Symphony</option>
        <option value="categorie3">HTML</option>
    </select><br><br>
    
    <label for="description">Description de l'article:</label><br>
    <textarea id="description" name="description" required></textarea><br><br>
    
    <input type="submit" name="ajouter" value="Ajouter">
</form>