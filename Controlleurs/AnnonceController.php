<?php
require_once './Models/Annonce.php';

class AnnonceController{

    
public function nouvelleAnnonce(){
    require_once './Vues/Annonce/formulaire_annonce.html';
    if(isset($_POST['submit']) && isset($_POST['libelle'])
    && isset($_POST['prix']) && isset($_POST['description'])
    && isset($_POST['telephone']) && isset($_POST['etat'])
    ){
       // WARNING
        $annonce = new Annonce();
        $an_libelle = $annonce->setAn_libelle($_POST['libelle'])->getAn_libelle();
        $an_prix = $annonce->setAn_prix($_POST['prix'])->getAn_prix();
        $an_description = $annonce->setAn_description($_POST['description'])->getAn_description();
        $an_telephone = $annonce->setAn_telephone($_POST['telephone'])->getAn_telephone();
        $an_etat = $annonce->setAn_etat($_POST['etat'])->getAn_etat();
        $an_date = $annonce->setAn_date(date("m.d.y"));
        $id_categorie = $annonce->setId_categorie($_POST['categorie'])->getId_categorie();
        $annonce->createAnnonce($an_libelle, $an_prix, $an_description, $an_telephone,
        $an_etat, $an_date, $id_categorie);
    }else{
        echo"NOK Controller";
    }
}
public function listeAnnonce(){
    $listeAnnonce = new Annonce();
    $allAnnonce = $listeAnnonce->findAll('annonce');
    require_once './Vues/Annonce/liste_annonce.php';
}



}


?>