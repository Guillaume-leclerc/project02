<div class="container">
    <h1 class="titreH1">Administration de la boutique en ligne</h1>
    <div class="trait2px"></div>
    <h3 class="titreH3">Ajout d'élements</h3>
    <table class="tableauAdminBoutique">
        <tr>
            <td class="tableauAdminBoutiqueLien"><a href="<?php  \controllers\superController\superController::URL ?>routeur.php?c=admin&a=ajout-taille">Ajout de taille</a></td>
            <td class="tableauAdminBoutiqueDescriptif">Ajout de taille pour les vêtements, chaussures, bottes, casque, …</td>
        </tr>
        <tr>
            <td class="tableauAdminBoutiqueLien"><a href="<?php \controllers\superController\superController::URL ?>routeur.php?c=admin&a=ajout-marque">Ajout d'une marque</a></td>
            <td class="tableauAdminBoutiqueDescriptif">Ajouter une nouvelle marque au listing.</td>
        </tr>
        <tr>
            <td class="tableauAdminBoutiqueLien"><a href="<?php \controllers\superController\superController::URL ?>routeur.php?c=admin&a=ajout-categorie">Ajout d'une catégorie</a></td>
            <td class="tableauAdminBoutiqueDescriptif">Ajout de catégorie, exemple: casque, vêtement, …</td>
        </tr>
        <tr>
            <td class="tableauAdminBoutiqueLien"><a href="<?php controllers\superController\superController::URL ?>routeur.php?c=admin&a=ajout-produit">Ajout d'un produit</a></td>
            <td class="tableauAdminBoutiqueDescriptif">Ajout d'un produit en base. <br /> ATTENTION: Un produit n'est pas un article.</td>
        </tr>
        <tr>
            <td class="tableauAdminBoutiqueLien"><a href="">Ajout d'un article</a></td>
            <td class="tableauAdminBoutiqueDescriptif">Ajout d'un produit en base.<br /> ATTENTION: Un article est un produit avec une taille et un stock.</td>
        </tr>
    </table>
    <div class="trait2px marginTop20"></div>
    <h3 class="titreH3">Suppression / modification d'élements</h3>
    <table class="tableauAdminBoutique">
        <tr>
            <td class="tableauAdminBoutiqueLien"><a href="">Taille</a></td>
            <td class="tableauAdminBoutiqueDescriptif">Suppression ou modification d'une taille.</td>
        </tr>
        <tr>
            <td class="tableauAdminBoutiqueLien"><a href="">Marque</a></td>
            <td class="tableauAdminBoutiqueDescriptif">Suppression ou modification d'une marque.</td>
        </tr>
        <tr>
            <td class="tableauAdminBoutiqueLien"><a href="">Catégorie</a></td>
            <td class="tableauAdminBoutiqueDescriptif">Suppression ou modification d'une catégorie.</td>
        </tr>
        <tr>
            <td class="tableauAdminBoutiqueLien"><a href="">Produit</a></td>
            <td class="tableauAdminBoutiqueDescriptif">Suppression ou modification d'un produit.<br /> ATTENTION: Un produit n'est pas un article</td>
        </tr>
        <tr>
            <td class="tableauAdminBoutiqueLien"><a href="">Article</a></td>
            <td class="tableauAdminBoutiqueDescriptif">Suppression ou modification d'un article.<br /> ATTENTION: Un article est un produit avec une taille et un stock</td>
        </tr>

    </table>
</div>