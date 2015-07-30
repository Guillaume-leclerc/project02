<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 23/07/15
 * Time: 09:30
 */

namespace models\superModel{
    class superModel{

        protected function getDatabase(){
            include('..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'host.php');
            try{
                $bdd = new \PDO('mysql:host='. $host .';dbname='. $dbname .';charset=utf8', $login, $password);
            } catch (Exeception $e){
                die('Une erreur est survenue: ' . $e->getMessage());
            }
            return $bdd;
        }

    }
}