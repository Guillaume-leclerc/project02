<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 17/09/15
 * Time: 14:03
 */

namespace controllers\adminController{

    include('superController.php');

    use controllers\superController\superController;
    use models\adminModel\adminModel;

    class adminController extends superController{

        //***************************************************************************************
        public function boutique(){
            $this->start();

            if($this->isAdmin()){

                $tab = array(
                    'directoryView' => 'admin',
                    'fileView' => 'adminBoutiqueView.php'
                );

                $this->render($tab);
                $this->clearMsg();
            }else{
                $msg = "Accès refusé !";
                $this->setMsg($msg, 'alert');
                header('location:' . \controllers\superController\superController::URL . 'routeur.php?c=site&a=index');
            }
        }
        //***************************************************************************************
        public function ajoutTaille(){
            $this->start();
            // Si l'utilisateur authentifié est bien administrateur alors je rentre dans le traitement sinon je renvoi vers l'accueil avec un msg accès refusé
            if($this->isAdmin()){
                // si la variable $_POST['btnValidFormTaille']) existe et quel est egale a Enregistrer c'est que le formulaire a été validé
                if(isset($_POST['btnValidFormTaille']) && $_POST['btnValidFormTaille'] == 'Enregistrer'){
                    // si le nombre caractère est suppérieur ou egale a 1 minimum et 4 maximum alors c'est bon sinon message d'erreur
                    if(strlen($_POST['taille']) >= 1 && strlen($_POST['taille']) <= 4){
                        // Je passe le contenu de ma variable $_POST['taille'] en majuscule
                        $chaine = strtoupper($_POST['taille']);

                        include('..' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'adminModel.php');

                        //Construction de l'objet adminModel
                        $objAdminModel = new adminModel();
                        // Si la taille n'existe pas en base alors je l'enregistre sinon j'affiche un message indiquant que la taille est déjà existante
                        if(!$objAdminModel->selectTailleByName($chaine)){
                            // je protège ma chaine de caractère afin d'éviter toute injection
                            $taille = htmlentities($chaine, ENT_QUOTES);
                            // Enregistrement de la taille en base
                            $objAdminModel->addTaille($taille);

                            // message de success
                            $msg = "La taille à bien été enregister.";
                            $this->setMsg($msg, 'success');
                        }else{
                            // message d'erreur
                            $msg = "Cette taille est déjà existante.";
                            $this->setMsg($msg, 'alert');
                        }
                    }else{
                        $msg = "La taille doit contenir au minimum 1 caractères et au maximum 4 caractères.";
                        $this->setMsg($msg, 'warning');
                    }
                }


                $tab = array(
                    'directoryView' => 'admin',
                    'fileView' => 'adminAjoutTailleView.php'
                );

                $this->render($tab);
                $this->clearMsg();
            }else{
                $msg = "Accès refusé !";
                $this->setMsg($msg, 'alert');
                header('location:' . \controllers\superController\superController::URL . 'routeur.php?c=site&a=index');
            }
        }
        //***************************************************************************************
        public function ajoutMarque(){
            $this->start();

            if($this->isAdmin()){
                // Si le formulaire à été validé
                if(isset($_POST['btnValidFormMarque']) && $_POST['btnValidFormMarque'] == "Enregistrer"){
                    // La Saisie doit au moin contenir 1 caractère sinon message d'erreur
                    if(strlen($_POST['marque']) >= 1){
                        // Je met la chaine en minuscule
                        $chaineMinuscule = strtolower($_POST['marque']);
                        // Je met la première lettre de la chaine en majuscule
                        $chaine = ucfirst($chaineMinuscule);

                        include('..' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'adminModel.php');
                        // création de l'objet adminModel
                        $objAdminModel = new adminModel();
                        // si la marque est inexistante en basde alors on poursuit le traitement
                        if(!$objAdminModel->selectMarqueByName($chaine)){
                            // protection contre les injection
                            $chaine = htmlentities($chaine, ENT_QUOTES);
                            // enregistrement de la marque
                            $objAdminModel->addMarque($chaine);
                            // affichage d'un message de succes
                            $msg = "La marque à bien été enregister.";
                            $this->setMsg($msg, 'success');
                        }else{
                            // message d'erreur
                            $msg = "Cette marque est déjà existante.";
                            $this->setMsg($msg, 'alert');
                        }

                    }else{
                        $msg = "Votre saisie doit contenir au minimum 1 caractères.";
                        $this->setMsg($msg, 'warning');
                    }
                }


                $tab = array(
                    'directoryView' => 'admin',
                    'fileView' => 'adminAjoutMarqueView.php'
                );

                $this->render($tab);
                $this->clearMsg();
            }else{
                $msg = "Accès refusé !";
                $this->setMsg($msg, 'alert');
                header('location:' . \controllers\superController\superController::URL . 'routeur.php?c=site&a=index');
            }
        }
        //***************************************************************************************
        public function ajoutCategorie($categorie){
            $this->start();

            if($this->isAdmin()){
                // Si le formulaire à été validé
                if(isset($_POST['btnValidFormCategorie']) && $_POST['btnValidFormCategorie'] == "Enregistrer"){
                    // La Saisie doit au moin contenir 1 caractère sinon message d'erreur
                    if(strlen($_POST['categorie']) >= 1){
                        // Je met la chaine en minuscule
                        $chaineMinuscule = strtolower($_POST['categorie']);
                        // Je met la première lettre de la chaine en majuscule
                        $chaine = ucfirst($chaineMinuscule);

                        include('..' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'adminModel.php');
                        // création de l'objet adminModel
                        $objAdminModel = new adminModel();
                        // si la categorie est inexistante en basde alors on poursuit le traitement
                        if(!$objAdminModel->selectCategorieByName($chaine)){
                            // protection contre les injection
                            $chaine = htmlentities($chaine, ENT_QUOTES);
                            // enregistrement de la categorie
                            $objAdminModel->addCategorie($chaine);
                            // affichage d'un message de succes
                            $msg = "La catégorie à bien été enregister.";
                            $this->setMsg($msg, 'success');
                        }else{
                            // message d'erreur
                            $msg = "Cette catégorie est déjà existante.";
                            $this->setMsg($msg, 'alert');
                        }

                    }else{
                        $msg = "Votre saisie doit contenir au minimum 1 caractères.";
                        $this->setMsg($msg, 'warning');
                    }
                }


                $tab = array(
                    'directoryView' => 'admin',
                    'fileView' => 'adminAjoutCategorieView.php'
                );

                $this->render($tab);
                $this->clearMsg();
            }else{
                $msg = "Accès refusé !";
                $this->setMsg($msg, 'alert');
                header('location:' . \controllers\superController\superController::URL . 'routeur.php?c=site&a=index');
            }
        }
        //***************************************************************************************
        public function ajoutProduit(){
            $this->start();

            if($this->isAdmin()){

                include('..' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'adminModel.php');

                $objAdminModel = new adminModel();

                // Ici le traitement de mon formulaire
                // Ref, categorie, marque, designation, description, photo
                if(isset($_POST['btnValidFormProduit']) && $_POST['btnValidFormProduit'] == "Enregistrer"){
                    //////////////////////////////////////
                    // Traitement de la photo du produit//
                    //////////////////////////////////////
                    //  Verfication de l'extension de l'image uploader
                    $photo = "";
                    if(isset($_FILES['photo']['name']) && !empty($_FILES['photo']['name'])){
                        $extension = strrchr($_FILES['photo']['name'], '.'); // permet de retourner le texte contenu après le "."
                        // Nous transformons au cas où la chaine en minuscule grace à strtolower()
                        $extension = strtolower(substr($extension, 1));

                        // tableau des extension autorisé
                        $tab_extension_valide = array("jpg", "jpeg", "png");
                        // in array cherche l'extension du fichier dans le tableau
                        $verif_extension = in_array($extension, $tab_extension_valide);

                        //Si l'extension existe dans le tableau alors on passe a l'enregistrement du chemin
                        // du fichier en bdd et du fichier dans le repertoire dans le dossier qui va bien
                        if($verif_extension){
                            // on rajoute la reference sur le nom de la photo dans le cas où deux images auraient le même nom
                            $nom_photo = $_POST['reference'] . '_' . $_FILES['photo']['name'];
                            // chemin src ue l'on va enregistrer en BDD
                            $photo = \controllers\superController\superController::URL_PHOTO . "photo/$nom_photo";
                            $pictureDirectory = $_SERVER['DOCUMENT_ROOT'] . \controllers\superController\superController::URL_ENREGISTREMENT_PHOTO;
                            copy($_FILES['photo']['tmp_name'], "/Applications/MAMP/htdocs/quad/public/photo/" . $nom_photo);

                        }else{
                            $msg = "L'extension de votre fichier n'est pas autorisé. Seul les fichier jpg, jpeg ou png sont autorisé.";
                            $this->setMsg($msg, "alert");
                        }
                    }
                    //////////////////////////////////////
                    // Vérification & enregistrement des donnée en base.

                    // Vérification de l'intégrité des données categorie & marque
                    // Si lest donnés corespondent, je concidère que l'utilisateur ne les as pas modifier donc c'est ok sinon message d'erreur in your face
                    $resultCategorie = $objAdminModel->selectCategorieById($_POST['categorie']);
                    $resultMarque = $objAdminModel->selectMarqueById($_POST['marque']);

                    if($resultCategorie){

                        if($resultMarque){
                            if(strlen($_POST['reference']) >= 3){
                                $reference = htmlentities($_POST['reference'], ENT_QUOTES);

                                $resultRef = $objAdminModel->selectReferenceByName($reference);
                                echo 'toto';
                                // Si la reference existe alors je bloque le traitement et affiche un msg d'erreur
                                if(!$resultRef){
                                    if(strlen($_POST['designation']) >= 3){
                                        $designation = htmlentities($_POST['designation'], ENT_QUOTES);

                                        if($_POST['description'] != ''){

                                            $description = htmlentities($_POST['description']);

                                            $tabData = array(
                                                'reference' => $_POST['reference'],
                                                'designation' => $designation,
                                                'description' => $description,
                                                'marque_id' => $_POST['marque'],
                                                'categorie_id' => $_POST['categorie'],
                                                'photo' => $photo
                                            );

                                            $result = $objAdminModel->insertProduit($tabData);

                                            if($result){
                                                $msg = "Votre produit à bien été enregister.";
                                                $this->setMsg($msg, 'success');
                                            }else{
                                                $msg = "Une erreur est survenur lors de l'enregistrement du produit.";
                                                $this->setMsg($msg, 'alert');
                                            }
                                        }else{
                                            $msg = "la description du produit est maquante.";
                                            $this->setMsg($msg, 'alert');
                                        }
                                    }else{
                                        $msg = "Votre designation doit contenir 3 caractère au minimum.";
                                        $this->setMsg($msg, 'alert');
                                    }
                                }else{
                                    $msg = "Votre référence est déjà existante en base.";
                                    $this->setMsg($msg, 'alert');
                                }
                            }else{
                                $msg = "Votre référence doit contenir 3 caractère au minimum.";
                                $this->setMsg($msg, 'alert');
                            }
                        }else{
                            $msg = "Cette marque n\'existe pas! Vérifier votre choix.";
                            $this->setMsg($msg, 'alert');
                        }
                    }else{
                        $msg = "Cette catégorie n\'existe pas! Vérifier votre choix.";
                        $this->setMsg($msg, 'alert');
                    }



                }


                // J'envoi dans ce tableau les element qui me permettent d'afficher les données stocke dans les table marque et categorie afin de recupéré les id qui vont bien
                $tab = array(
                    'directoryView' => 'admin',
                    'fileView' => 'adminAjoutProduitView.php',
                    'dataForm' => array(
                        'marque' => $objAdminModel->selectAllMarqueOrderByMarque(),
                        'categorie' => $objAdminModel->selectAllCategorieOrderByCategorie()
                    )
                );

                $this->render($tab);
                $this->clearMsg();
            }else{
                $msg = "Accès refusé !";
                $this->setMsg($msg, 'alert');
                header('location:' . \controllers\superController\superController::URL . 'routeur.php?c=site&a=index');
            }
        }
        //***************************************************************************************
        public function AjoutArticle(){
            $this->start();

            if($this->isAdmin()){

                include('..' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'adminModel.php');

                $objAdminModel = new adminModel();

                if(isset($_POST['btnValidFormAjoutArticle']) && $_POST['btnValidFormAjoutArticle'] == "Enregistrer"){

                    $idProduct = htmlentities($_POST['produit']);
                    $verifRef = $objAdminModel->selectProductById($idProduct);

                    //Si la ref entrante existe en base alors il n'y a pas de problème donc on continue sinon on affiche un message d'erreur.
                    if($verifRef){

                        $idTaille = htmlentities($_POST['taille']);
                        $verifTaille = $objAdminModel->selectTailleById($idTaille);
                        //Si la taille entrante existe en base alors il n'y a pas de problème donc on continue sinon on affiche un message d'erreur.
                        if($verifTaille){

                            if(!empty($_POST['quantite'])){
                                $dataProduct = array(
                                    'quantite' => htmlentities($_POST['quantite']),
                                    'produit_id' => $idProduct,
                                    'taille_id' => $idTaille
                                );

                                $result = $objAdminModel->addArticle($dataProduct);

                                if($result){
                                    $msg = "Votre produit à bien été enregistrer.";
                                    $this->setMsg($msg, 'success');
                                }else{
                                    $msg = "Une erreur est survenue lors de l'enregistrement";
                                    $this->setMsg($msg, 'alert');
                                }
                            }else{
                                $msg = "Une quantité est obligatoire afin de procéder a l'enregistrement.";
                                $this->setMsg($msg, 'alert');
                            }
                        }else{
                            $msg = "Cette taille n'existe pas. Veuillez verifier vos produit.";
                            $this->setMsg($msg, 'alert');
                        }
                    }else{
                        $msg = "Cette rérérence n'existe pas. Veuillez verifier vos produit.";
                        $this->setMsg($msg, 'alert');
                    }
                }

                $tab = array(
                    'directoryView' => 'admin',
                    'fileView' => 'adminAjoutArticleView.php',
                    'dataForm' => array(
                        'produit' => $objAdminModel->selectAllProduct(),
                        'taille' => $objAdminModel->selectAllTaille()
                    )
                );

                $this->render($tab);
                $this->clearMsg();
            }else{
                $msg = "Accès refusé !";
                $this->setMsg($msg, 'alert');
                header('location:' . \controllers\superController\superController::URL . 'routeur.php?c=site&a=index');
            }
        }
        //***************************************************************************************

        //***************************************************************************************
    }
}