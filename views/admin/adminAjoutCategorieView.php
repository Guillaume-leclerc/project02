<div class="container">
    <h1 class="titreH1">Ajout d'une catégorie</h1>
    <div class="trait2px"></div>
    <form action="<?php controllers\superController\superController::URL ?>routeur.php?c=admin&a=ajout-categorie" method="post" class="formAjout">
        <label for="categorie" class="labelAjout">Saisissez le nom de la catégorie à ajouter</label>
        <input type="text" id="categorie" name="categorie" placeholder="Exemple: Casque, Pantallon…" class="inputAjoutTaille"/>
        <input type="submit" name="btnValidFormCategorie" value="Enregistrer" class="btnValidFormTaille"/>
    </form>
    <div class="trait2px marginTop20"></div>
    <h3 class="titreH3">Liste des marques catégorie</h3>
</div>
