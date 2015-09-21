<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 21/09/15
 * Time: 09:07
 */

namespace models\adminModel{

    include('superModel.php');

    use models\superModel\superModel;

    class adminModel extends superModel{

        //***********************************************************
        public function AddTaille(){
            $bdd = $this->getDatabase();

            $req = "INSERT INTO";
            $requete = $bdd->prepare($req);
        }
        //***********************************************************

    }
}