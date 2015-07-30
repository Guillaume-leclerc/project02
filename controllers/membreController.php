<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 23/07/15
 * Time: 14:08
 */

namespace controllers\membreController{
    include('superController.php');
    use controllers\superController\superController;
    use models\membreModel\membreModel;

    class membreController extends superController{

        public function connexion(){
            $this->start();

            if(isset($_POST['btnFormConnexion']) && $_POST['btnFormConnexion'] == 'Connexion'){
                // faire le test id + Mdp
            }

            $tab = array(
                'directoryView' => 'membre',
                'fileView' => 'connexionView.php'
            );

            $this->render($tab);
        }

        public function compte(){
            $this->start();

            $tab = array(
                'directoryView' => 'membre',
                'fileView' => 'compteView.php'
            );

            $this->render($tab);
        }

        public function inscription(){
            $this->start();

            if(isset($_POST['btnValidFormInscription']) && !empty($_POST['btnValidFormInscription'])){
                if($_POST['civilite'] === 'Monsieur' || $_POST['civilite'] === 'Madame'){

                    $civilite = htmlentities($_POST['civilite'], ENT_QUOTES);

                    // Si tous le champs sont bien remplie alors on commence les test sinon on retourne un message
                    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email1']) && !empty($_POST['email2']) && !empty($_POST['password1']) &&
                        !empty($_POST['password2']) && !empty($_POST['adresse']) && !empty($_POST['cp']) && !empty($_POST['ville'])){

                            // Si les 2 adresse email saisie sont identique alors c'est bon on rentre sinon message de non correspondance
                            if($_POST['email1'] == $_POST['email2']){
                                include('..' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'membreModel.php');

                                $objMembre = new membreModel();
                                $resultMembre = $objMembre->selectMembreByMail($_POST['email1']);
                                // Si l'adresse email est inexistante en bdd
                                if(!$resultMembre){

                                    $email = htmlentities($_POST['email1'], ENT_QUOTES);

                                    //Si les mot de passe correspondent je concatène un grain de sel au password que je hash
                                    if($_POST['password1'] == $_POST['password2']){
                                        $salt = "92831bca88ed1e80b8e3ac8f76bdaa9309e6f089";
                                        $chaine = $salt . $_POST['password1'];

                                        $hash = sha1($chaine);

                                        if(is_string($_POST['adresse']) && is_string($_POST['ville'])){

                                            if(strlen($_POST['cp']) == 5){

                                                $nom = htmlentities($_POST['nom'], ENT_QUOTES);
                                                $prenom = htmlentities($_POST['prenom'], ENT_QUOTES);
                                                $adresse = htmlentities($_POST['adresse'], ENT_QUOTES);
                                                $ville = htmlentities($_POST['ville'], ENT_QUOTES);
                                                $cp = intval($_POST['cp']);
                                                $date = intval($_POST['annee_naissance']) . '-' . intval($_POST['moi_naissance']) . '-' . intval($_POST['jour_naissance']);

                                                echo 'Is goos beacch !';

                                                $membre = array(
                                                    'civilite' => $civilite,
                                                    'nom' => $nom,
                                                    'prenom' => $prenom,
                                                    'email'=> $email,
                                                    'password' => $hash,
                                                    'adresse' => $adresse,
                                                    'cp' => $cp,
                                                    'ville' => $ville,
                                                    'date_naissance' => $date
                                                );

                                                $result = $objMembre->addMembre($membre);

                                                if($result == 1){
                                                    $msg = "Votre inscription à bien été prise en compte !";
                                                    $this->setMsg($msg, 'success');
                                                }else{
                                                    $msg = "Une erreur est survenue à l'inscription !";
                                                    $this->setMsg($msg, 'alert');
                                                }

                                            }else{
                                                $msg = "Le code postal doit être un nombre entier à 5 chiffres";
                                                $this->setMsg($msg, 'alert');
                                                echo strlen($_POST['cp']);
                                            }
                                        }else{
                                            $msg = "Les champs adresse et ville doivent être du texte";
                                            $this->setMsg($msg, 'alert');
                                        }

                                    }else{
                                        $msg = "Les mots de passe ne correspondent pas !";
                                        $this->setMsg($msg, 'alert');
                                    }

                                }else{
                                    $msg = "Cette adresse email est déjà attribuer!";
                                    $this->setMsg($msg, 'alert');
                                }

                            } else{
                                $msg = "Verifiez la saisie de votre adresse email car la coresspondance n'est pas bonne";
                                $this->setMsg($msg, 'warning');
                            }

                    }else{
                        $msg = 'Votre saisie est incomplete !';
                        $this->setMsg($msg, 'alert');
                    }
                }else{
                    $msg = 'Votre civilité est obligatoirement Monsieur ou Madame';
                    $this->setMsg($msg, 'alert');
                }
            }

            $tab = array(
                'directoryView' => 'membre',
                'fileView' => 'inscriptionView.php'
            );

            $this->render($tab);

        }
    }
}