<?php

namespace models\membreModel{
    include('superModel.php');
    use models\superModel\superModel;

    class membreModel extends superModel{

        public function selectMembreByMail($email){
            $bdd = $this->getDatabase();
            $req = "SELECT id_membre , civilite, nom, prenom, email, password, adresse, cp, ville, date_naissance, statut FROM membre WHERE email = :email";
            $requete = $bdd->prepare($req);
            $requete->bindValue(':email', $email);
            $requete->execute();

            $result = $requete->fetchAll();

            if($result){
                return $result;
            }else{
                return $result;
            }
        }
        //*********************************************************
        public function addMembre($tab){
            $bdd = $this->getDatabase();
            $req = "INSERT INTO membre(civilite, nom, prenom, email, password, adresse, cp, ville, date_naissance, statut) VALUES (:civilite, :nom, :prenom, :email, :password, :adresse, :cp, :ville, :date_naissance, 0)";
            $requete = $bdd->prepare($req);
            $requete->bindValue(':civilite', $tab['civilite']);
            $requete->bindValue(':nom', $tab['nom']);
            $requete->bindValue(':prenom', $tab['prenom']);
            $requete->bindValue(':email', $tab['email']);
            $requete->bindValue(':password', $tab['password']);
            $requete->bindValue(':adresse', $tab['adresse']);
            $requete->bindValue(':cp', $tab['cp']);
            $requete->bindValue(':ville', $tab['ville']);
            $requete->bindValue(':date_naissance', $tab['date_naissance']);
            $result = $requete->execute();

            return $result;
        }
        //*********************************************************
    }
}



