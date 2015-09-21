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
            }else{
                $msg = "Accès refusé !";
                $this->setMsg($msg, 'alert');
                header('location:' . \controllers\superController\superController::URL . 'routeur.php?c=site&a=index');
            }
        }
        //***************************************************************************************
        public function ajoutTaille(){
            $this->start();

            if($this->isAdmin()){
                $tab = array(
                    'directoryView' => 'admin',
                    'fileView' => 'adminAjoutTailleView.php'
                );

                $this->render($tab);
            }else{
                $msg = "Accès refusé !";
                $this->setMsg($msg, 'alert');
                header('location:' . \controllers\superController\superController::URL . 'routeur.php?c=site&a=index');
            }
        }
        //***************************************************************************************
    }
}