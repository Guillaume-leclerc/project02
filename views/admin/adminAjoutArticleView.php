<div class="container">
    <h1 class="titreH1">Ajout d'article</h1>
    <div class="trait2px"></div>
    <form action="<?php controllers\superController\superController::URL ?>routeur.php?c=admin&a=ajout-article" method="post" class="formAjout">
        <label for="produit" class="labelAjout">Produit:</label>
        <select name="produit" id="produit" class="selectAjoutForm">
            <?php
                for($i = 0; $i <= count($dataForm['produit']); $i++){
                    echo "<option value='" . $dataForm['produit'][$i]['id_produit'] . "'>" . $dataForm['produit'][$i]['reference'] .  " - " . $dataForm['produit'][$i]['designation'] . "</option>";
                    print_r($dataForm['produit'][$i]['reference'] .  " - " . $dataForm['produit'][$i]['designation']);
                }
            ?>
        </select>
        <label for="taille" class="labelAjout marginTop10">Taille:</label>
        <select name="taille" id="taille" class="selectAjoutForm">
            <?php
                for($i = 0; $i <= count($dataForm['taille']); $i++){
                    echo "<option value='" . $dataForm['taille'][$i]['id_taille'] . "'>" . $dataForm['taille'][$i]['taille'] . "</option>";
                }
            ?>
        </select>
        <label for="quantite" class="labelAjout marginTop10">Quantité:</label>
        <input type="number" name="quantite" id="quatite" placeholder="Exemple: 12" required class="inputAjoutTaille"/>
        <input type="submit" name="btnValidFormAjoutArticle" class="btnValidFormTaille marginTop20" value="Enregistrer"/>
    </form>
</div>