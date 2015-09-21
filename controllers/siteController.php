<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 22/07/15
 * Time: 16:38
 */

namespace controllers\siteController{
    include('superController.php');
    use controllers\superController\superController;

    class siteController extends superController{

        public function plan(){


        }

        public function index(){
            $this->start();

            $tab = array(
                'directoryView' => 'site',
                'fileView' => 'indexView.php'
            );

            $this->render($tab);
            $this->clearMsg();
        }

    }
}