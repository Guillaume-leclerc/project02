<div class="container">
    <div class="monCompteHorizontal">
        <div class="monCompteVertical">
            <h3>Identité</h3>
            <table>
                <tr>
                    <td>Nom :</td>
                    <td>
                        <?php
                            if(isset($tab['user']['nom'])){
                                echo $tab['user']['nom'];
                            }else{
                                echo 'none';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Prénom :</td>
                    <td>
                        <?php
                            if($tab['user']['prenom']){
                                echo $tab['user']['prenom'];
                            }else{
                                echo 'none';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Date de naissance :</td>
                    <td>
                        <?php
                            if(isset($tab['user']['date_naissance'])){
                                $date = explode('-', $tab['user']['date_naissance']);
                                echo $date[2] . '/' . $date[1] . '/' . $date[0];
                            }else{
                                echo 'none';
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="monCompteVertical">
            <h3>Adresse</h3>
            <table>
                <tr>
                    <td>Rue :</td>
                    <td>
                        <?php
                            if(isset($tab['user']['adresse'])){
                                echo $tab['user']['adresse'];
                            }else{
                                echo 'none';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Code Postal :</td>
                    <td>
                        <?php
                            if(isset($tab['user']['cp'])){
                                echo $tab['user']['cp'];
                            }else{
                                echo 'none';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Ville :</td>
                    <td>
                        <?php
                            if($tab['user']['ville']){
                                echo $tab['user']['ville'];
                            }else{
                                echo 'none';
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="trait2px" style="width: 80% !important; margin-left: auto; margin-right: auto;">

    </div>
    <div class="monCompteHorizontal">
        <div class="monCompteBlocBas">
            <h3>Email</h3>
            <table>
                <tr>
                    <td>
                        <?php
                            if(isset($tab['user']['email'])){
                                echo $tab['user']['email'];
                            }else{
                                echo 'none';
                            }
                        ?>
                    </td>
                    <td><a href="" class="modifMail">Modifier</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>