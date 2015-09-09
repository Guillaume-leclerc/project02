<div class="container">
    <h1 class="titreH1">Identification</h1>
    <div class="trait2px"></div>
    <div class="marginTop20">
        <div class="blocLeft510x300_border">
            <h3 class="titreH3">Connectez-vous !</h3>
            <form action="http://localhost/quad/public/routeur.php?c=membre&a=connexion" method="post" class="formConnexion">
                <label for="email" class="formConnexionLabel">Email</label>
                <input type="email" name="email" id="email" required placeholder="exemple@mail.fr" class="formConnexionInput" />
                <label for="password" class="formConnexionLabel">Password</label>
                <input type="password" name="password" id="password" required class="formConnexionInput" />

                <input type="submit" name="bntFormConnexion" value="Connexion" class="formConnexionBtnValid" />
            </form>
        </div>
        <div class="blocLeft510x300">
            <h3 class="titreH3">Vous êtes nouveau !</h3>
            <p class="text01">Bienvenue ! Créer votre compte equip-quad.gldev.fr via le formulaire d'inscription afin de pouvoir acheter des produit et bénéficier de nombreux avantages</p>
            <a href="<?php echo \controllers\superController\superController::URL . 'membre/inscription'; ?>" class="btnLienInscription">Formulaire d'inscription</a>
        </div>
        <div class="clear"></div>
    </div>

</div>