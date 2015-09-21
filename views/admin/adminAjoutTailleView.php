<div class="container">
    <h1 class="titreH1">Ajout d'une taille</h1>
    <div class="trait2px"></div>
    <form action="<?php \controllers\superController\superController::URL ?>routeur.php?c=admin&a=ajout-taille" method="post" class="formAjout">
        <label for="taille" class="labelAjout">Saisissez la taille à ajouter</label>
        <input type="text" id="taille" name="taille" placeholder="Exemple: 52 ou XL…" class="inputAjoutTaille"/>
        <input type="submit" name="btnValidFormTaille" value="Enregistrer" class="btnValidFormTaille"/>
    </form>
    <div class="trait2px marginTop20"></div>
    <h3 class="titreH3">Liste des taille existante</h3>
</div>