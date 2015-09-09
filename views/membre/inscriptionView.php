<section>
    <div class="container">
        <h1 class="titreH1">Créez votre compte sur equip-quad</h1>
        <div class="trait2px"></div>
        <form action="<?php echo 'http://localhost/quad/public/routeur.php?c=membre&a=inscription';  ?>" method="post" class="formInscription">
            <div class="blocLeftFormInscription">
                <label for="civilite">Civilité</label>
                <select name="civilite" id="civilite" class="formInscriptionCivilite">
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Votre nom…" class="formInscriptionInput" value="<?php if(isset($_POST['nom']) && !empty($_POST['nom'])){ echo $_POST['nom'];} ?>" />
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" placeholder="Votre prénom…" class="formInscriptionInput" value="<?php if(isset($_POST['prenom']) && !empty($_POST['prenom'])){ echo $_POST['prenom'];} ?>"/>
                <label for="email1">Email</label>
                <input type="email" name="email1" id="email1" placeholder="exemple@domaine.fr" class="formInscriptionInput" />
                <label for="email2">Confirmez votre email</label>
                <input type="email" name="email2" id="email2" placeholder="exemple@domaine.fr" class="formInscriptionInput" />
                <div class="formInscriptionBlocLabelDate">
                    <p>Date de naissance</p>
                    <label for="jour_naissance" class="formInscriptionLabelDate">Jour</label>
                    <label for="moi_naissance" class="formInscriptionLabelDate">Mois</label>
                    <label for="annee_naissance" class="formInscriptionLabelDate">Année</label>
                    <div class="clear"></div>
                </div>

                <div class="formInscriptionSelectDate">
                    <select name="jour_naissance" id="jour_naissance">
                        <?php
                            for($i = 1; $i <= 31; $i++){
                                echo '<option value="'. $i .'">' . $i . '</option>';
                            }
                        ?>
                    </select>
                    <select name="moi_naissance" id="moi_naissances">
                        <?php
                            for($i = 1; $i <= 12; $i++){
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                        ?>
                    </select>
                    <select name="annee_naissance" id="annee_naissance">
                        <?php
                            for($i = date('Y'); $i >= 1960; $i--){
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="blocRightFormInscription">
                <label for="password1">Password</label>
                <input type="password" name="password1" id="password1" class="formInscriptionInput"/>
                <label for="password2">Confirmez votre password</label>
                <input type="password" name="password2" id="password2" class="formInscriptionInput"/>
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" placeholder="Votre adresse…" class="formInscriptionInput" value="<?php if(isset($_POST['adresse']) && !empty($_POST['adresse'])){ echo $_POST['adresse']; } ?>"/>
                <label for="cp">Code postal</label>
                <input type="text" name="cp" id="cp" placeholder="Votre code postal…"  class="formInscriptionInput" value="<?php if(isset($_POST['cp']) && !empty($_POST['cp'])){ echo $_POST['cp']; } ?>"/>
                <label for="ville">Ville</label>
                <input type="text" name="ville" id="ville" placeholder="Votre ville…"  class="formInscriptionInput" value="<?php if(isset($_POST['ville']) && !empty($_POST['ville'])){ echo $_POST['ville']; } ?>"/>
            </div>
            <div class="clear"></div>
            <input type="submit" name="btnValidFormInscription" value="Valider" class="btnValidFormInscription"/>
        </form>
    </div>
</section>
