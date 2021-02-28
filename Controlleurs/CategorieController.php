<?php

require_once './Models/Categorie.php';
class CategorieController{

    

    public function listeCategorie(){
        $listeCategorie = new Categorie();
        $allCategorie = $listeCategorie->findAll('categorie');
        require_once './Vues/Categorie/liste_categorie.php';
    }


    

}
?>