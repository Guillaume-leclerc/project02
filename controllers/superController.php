<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 22/07/15
 * Time: 10:17
 */

namespace controllers\superController{
    class superController{

        //const URL = 'http://www.equip-quad.gldev.fr/';
        const URL = 'http://localhost/quad/public/';
        const URL_PHOTO = 'htt://localhost/quad/public/photo/';
        const URL_ENREGISTREMENT_PHOTO =  "/quad/public/photo/";
        protected function render($tab){
            extract($tab); // Extraction du tableau
            ob_start(); // Demarage de l'outpout buffering
            include('..' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $directoryView . DIRECTORY_SEPARATOR . $fileView);
            $content = ob_get_contents(); // stockage du contenu de l'outpout buffering dans une variable
            ob_end_clean(); //vidage de la memoire (Reset de l'outpout buffering)
            include('..' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'layout.php');
        }
        //****************************************************
        // Methode qui permet d'initialiser les chose commune a chaque page.
        public function start(){
            session_start();

            if(!isset($_SESSION['msg']) && !isset($_SESSION['user']) && !isset($_SESSION['panier'])){
                $_SESSION = array(
                    'msg' => '',
                    'user' => '',
                    'panier' => ''
                );
            }
        }
        //****************************************************
        // Methode qui permet de stocker le message d'état ainsi que sont type (success, warning, alert)
        public function setMsg($msg, $type){

            if($type == 'success'){
                $_SESSION['msg'] = '<div class="success">' . $msg . '</div>';
            }elseif($type == 'warning'){
                $_SESSION['msg'] = '<div class="warning">' . $msg . '</div>';
            }elseif($type == 'alert'){
                $_SESSION['msg'] = '<div class="alert">' . $msg . '</div>';
            }
        }
        //****************************************************
        public function getMsg(){
            echo $_SESSION['msg'];
        }
        //****************************************************
        // Methode qui test si l'utilisateur est connecter
        public function isConnected(){
            if(isset($_SESSION['user']['email']) && !empty($_SESSION['user']['email'])){
                return true;
            }else {
                return false;
            }
        }
        //****************************************************
        //Méthode qui test si l'utilisateur est Admin
        public function isAdmin(){
            if($this->isConnected() && $_SESSION['user']['statut'] == "1"){
                return true;
            }else{
                return false;
            }
        }
        //****************************************************
        // Si un message venant d'un autre page ou action doit être afficher alors le message est afficher sur cet page puis la variable est vider lorsque que l'ont passe sur une autre page.
        public function clearMsg(){
            if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
                $_SESSION['msg'] = '';
            }
        }
        //****************************************************
    }
}
