<div class="container">
    <h1 class="titreH1">Ajout d'une marque</h1>
    <div class="trait2px"></div>
    <form action="<?php controllers\superController\superController::URL ?>routeur.php?c=admin&a=ajout-marque" method="post" class="formAjout">
        <label for="marque" class="labelAjout">Saisissez le nom de la marque à ajouter</label>
        <input type="text" id="marque" name="marque" placeholder="Exemple: Fox, HJC…" class="inputAjoutTaille"/>
        <input type="submit" name="btnValidFormMarque" value="Enregistrer" class="btnValidFormTaille"/>
    </form>
    <div class="trait2px marginTop20"></div>
    <h3 class="titreH3">Liste des marques existante</h3>
</div>
