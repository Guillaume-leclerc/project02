<div class="container">
    <h1 class="titreH1">Ajout d'un produit</h1>
    <div class="trait2px"></div>
    <form action="<?php controllers\superController\superController::URL ?>routeur?php?c=admin&a=ajout-produit" method="post" enctype="multipart/form-data">
        <label for="reference" class="labelAjout marginTop10">Référence:</label>
        <input type="text" name="reference" id="reference" placeholder="Exemple: NS603-C" class="inputAjoutTaille marginTop10">
        <label for="categorie" class="labelAjout marginTop10">Catégorie:</label>
        <select id="categorie" name="categorie" class="selectAjoutForm">
        <?php
            for($i = 0; $i <= count($dataForm['categorie']); $i++){
                echo "<option value='" . $dataForm['categorie'][$i]['id_categorie'] . "'>" . $dataForm['categorie'][$i]['categorie'] . "</option>";
            }
        ?>
        </select>
        <label for="marque" class="labelAjout marginTop10">Marque:</label>
        <select name="marque" id="marque" class="selectAjoutForm">
            <?php
                for($i = 0; $i <= count($dataForm['marque']); $i++){
                    echo "<option value='" . $dataForm['marque'][$i]['id_marque'] . "'>" . $dataForm['marque'][$i]['marque'] . "</option>";
                }
            ?>
        </select>
        <label for="designation" class="labelAjout marginTop10">Désignation:</label>
        <input type="text" name="designation" id="designation" placeholder="Exemple: Bottes à crampons serie CROSS-NX" class="inputAjoutTaille marginTop10"/>
        <label for="description" class="labelAjout marginTop10">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10" class="textareaFormAjout"></textarea>
        <label for="photo" class="labelAjout marginTop10">Photo</label>
        <input type="file" name="photo" id="photo" class="marginTop10"/>
        <input type="submit" name="btnValidFormProduit" class="btnValidFormTaille" value="Enregistrer"/>
    </form>
</div>