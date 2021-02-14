<?php

require_once './Models/Categorie.php';
class CategorieController{

    public function nouvelleCategorie(){
        require_once './Vues/Categorie/formulaire_categorie.html';
        if(isset($_POST['submit'])&& isset($_POST['libelle'])){
            $categorie = new Categorie();
           // $ca_libelle = $categorie->setCa_libelle($_POST['libelle']);
            $id_categorie = $categorie->setCa_libelle($_POST['libelle']);
            $categorie->createCategorie($id_categorie);
        }
    }

    public function listeCategorie(){
        $listeCategorie = new Categorie();
        $allCategorie = $listeCategorie->findAll('categorie');
        require_once './Vues/Categorie/liste_categorie.php';
    }

    public function modifCategorie($id){
            $categorie = new Categorie();
            $categorieId = $categorie->findById($id, 'categorie');
            require_once './Vues/Categorie/edit_categorie.php';
            if(isset($_POST['submit'])){
                foreach($categorieId as $value){
                    
                    $ca_libelle = $value->setCa_libelle($_POST['libelle']);
                   // var_dump($ca_libelle);die;
                    $value->updateCategorie($id, $ca_libelle);
                }
            }
    }
    public function supprimerCategorie($id){
        $categorie = new Categorie();
        return $categorie->deleteById($id, 'categorie');
        
    }

}
?>