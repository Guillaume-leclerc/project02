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
        public function addTaille($taille){
            $bdd = $this->getDatabase();

            $req = "INSERT INTO taille(taille) VALUES(:taille)";
            $requete = $bdd->prepare($req);

            $requete->bindValue(':taille', $taille);

            $result = $requete->execute();

            return $result;
        }
        //***********************************************************
        public function selectTailleByName($taille){
            $bdd = $this->getDatabase();

            $req = "SELECT taille FROM Taille WHERE taille = :taille";
            $requete = $bdd->prepare($req);

            $requete->bindValue(':taille', $taille);
            $requete->execute();

            $result = $requete->fetchAll();

            return $result;
        }
        //***********************************************************
        public function selectAllTaille(){
            $bdd = $this->getDatabase();

            $req = "SELECT id_taille, taille FROM taille";
            $query = $bdd->prepare($req);
            $query->execute();
            $result = $query->fetchAll();

            return $result;
        }
        //***********************************************************
        public function addMarque($marque){
            $bdd = $this->getDatabase();

            $req = "INSERT INTO marque(marque) VALUES(:marque)";
            $requete = $bdd->prepare($req);
            $requete->bindValue(':marque', $marque);
            $result = $requete->execute();

            return $result;
        }
        //***********************************************************
        public function selectMarqueByName($marque){
            $bdd = $this->getDatabase();

            $req = "SELECT marque FROM marque WHERE marque = :marque";
            $requete = $bdd->prepare($req);
            $requete->bindValue(':marque', $marque);
            $requete->execute();

            $result = $requete->fetchAll();

            return $result;
        }
        //***********************************************************
        public function addCategorie($categorie){
            $bdd = $this->getDatabase();

            $req = "INSERT INTO categorie(categorie) VALUES(:categorie)";
            $requete = $bdd->prepare($req);
            $requete->bindValue(':categorie', $categorie);
            $result = $requete->execute();

            return $result;
        }
        //***********************************************************
        public function selectCategorieByName($categorie){
            $bdd = $this->getDatabase();

            $req = "SELECT categorie FROM categorie WHERE categorie = :categorie";
            $requete = $bdd->prepare($req);
            $requete->bindValue(':categorie', $categorie);
            $requete->execute();

            $result = $requete->fetchAll();

            return $result;
        }
        //***********************************************************
        public function selectAllMarqueOrderByMarque(){
            $bdd = $this->getDatabase();

            $req = "SELECT id_marque, marque FROM marque ORDER BY marque";
            $requete = $bdd->prepare($req);
            $requete->execute();
            $result = $requete->fetchAll();

            return $result;
        }
        //***********************************************************
        public function selectAllCategorieOrderByCategorie(){
            $bdd = $this->getDatabase();

            $req = "SELECT id_categorie, categorie FROM categorie ORDER BY categorie";
            $requete = $bdd->prepare($req);
            $requete->execute();
            $result = $requete->fetchAll();

            return $result;
        }
        //***********************************************************
        public function selectCategorieById($id){
            $bdd = $this->getDatabase();

            $req = "SELECT id_categorie, categorie FROM categorie WHERE id_categorie = :id";
            $requete = $bdd->prepare($req);
            $requete->bindValue(':id', $id);
            $requete->execute();

            $result = $requete->fetchAll();

            return $result;
        }
        //***********************************************************
        public function selectMarqueById($id){
            $bdd = $this->getDatabase();

            $req = "SELECT id_marque, marque FROM marque WHERE id_marque = :id";
            $requete = $bdd->prepare($req);
            $requete->bindValue(':id', $id);
            $requete->execute();

            $result = $requete->fetchAll();

            return $result;
        }
        //***********************************************************
        public function insertProduit($tab){
            $bdd = $this->getDatabase();

            extract($tab);
            $req="INSERT INTO produit(reference, designation, description, marque_id, categorie_id, photo) VALUES(:reference, :designation, :description, :marque_id, :categorie_id, :photo)";
            $query = $bdd->prepare($req);
            $query->bindValue(':reference', $reference);
            $query->bindValue(':designation', $designation);
            $query->bindValue(':description', $description);
            $query->bindValue(':marque_id', intval($marque_id));
            $query->bindValue(':categorie_id', intval($categorie_id));
            $query->bindValue(':photo', $photo);
            $result = $query->execute();

            return $result;
        }
        //***********************************************************
        public function selectReferenceByName($ref){
            $bdd = $this->getDatabase();

            $req = "SELECT reference FROM produit WHERE reference = :ref";
            $query = $bdd->prepare($req);
            $query->bindValue(':ref', $ref);
            $query->execute();
            $result = $query->fetchAll();

            return $result;
        }
        //***********************************************************
        public function selectAllProduct(){
            $bdd = $this->getDatabase();

            $req = "SELECT id_produit, reference, designation FROM produit";
            $query = $bdd->prepare($req);
            $query->execute();
            $result = $query->fetchAll();

            return $result;
        }
        //***********************************************************
        public function selectProductById($id){
            $bdd = $this->getDatabase();

            $req = "SELECT id_produit, reference, designation, description, marque_id, categorie_id, photo FROM produit WHERE id_produit = :id";
            $query = $bdd->prepare($req);
            $query->bindValue(':id', $id);
            $query->execute();
            $result = $query->fetchAll();

            return $result;
        }
        //***********************************************************
        public function selectTailleById($id){
            $bdd = $this->getDatabase();

            $req = "SELECT id_taille, taille FROM taille WHERE id_taille = :id";
            $query = $bdd->prepare($req);
            $query->bindValue(':id', $id);
            $query->execute();
            $result = $query->fetchAll();

            return $result;
        }
        //***********************************************************
        public function addArticle($tab){
            $bdd = $this->getDatabase();

            $req = "INSERT INTO article(quantite, produit_id, taille_id) VALUES(:quantite, :produit_id, :taille_id)";
            $query = $bdd->prepare($req);
            $query->bindValue(':quantite', $tab['quantite']);
            $query->bindValue(':produit_id', intval($tab['produit_id']));
            $query->bindValue(':taille_id', intval($tab['taille_id']));
            $result = $query->execute();

            return $result;
        }
        //***********************************************************
    }
}

