<?php
require_once './Models/Annonce.php';

class AnnonceController extends Model{

    
public function nouvelleAnnonce(){
    require_once './Vues/Annonce/formulaire_annonce.php';
    if(isset($_POST['submit']) && isset($_POST['libelle'])
    && isset($_POST['prix']) && isset($_POST['description'])
    && isset($_POST['telephone']) && isset($_POST['etat'])
    ){
       
        $annonce = new Annonce();
        $an_libelle = $annonce->setAn_libelle($_POST['libelle'])->getAn_libelle();
        $an_prix = $annonce->setAn_prix($_POST['prix'])->getAn_prix();
        $an_description = $annonce->setAn_description($_POST['description'])->getAn_description();
        $an_telephone = $annonce->setAn_telephone($_POST['telephone'])->getAn_telephone();
        $an_etat = $annonce->setAn_etat($_POST['etat'])->getAn_etat();
        $an_date = $annonce->setAn_date(date("Y-m-d H:i:s"))->getAn_date();
        $id_categorie = $annonce->setId_categorie($_POST['categorie'])->getId_categorie();
        $id_utilisateur =  $_SESSION['id_utilisateur'];
       // var_dump($an_date1);die;

        $annonce->createAnnonce($an_libelle, $an_prix, $an_description, $an_telephone,
        $an_etat, $an_date, $id_categorie, $id_utilisateur);
       exit;
            }
        }

public function listeAnnonce(){
            $listeAnnonce = new Annonce();
            $allAnnonce = $listeAnnonce->findAll('annonce');
            require_once './Vues/Annonce/liste_annonce.php';
        }

public function supprimerAnnonce($id)
        {
        $annonce = new Annonce();
        return $annonce->deleteById($id, 'annonce');
       
        }


public function afficherMesAnnonce($id){
    
    $annonce = new Annonce();
    $monAnnonce = $annonce->findByidAnnonce($id);
    $monAnnonce2 = $annonce->findCategorieById($id);
    //var_dump( $monAnnonce2);die;
    require_once './Vues/Annonce/mes_annonces.php';
}

public function voirAnnonce($id){
    $annonce = new Annonce();
    $monAnnonce= $annonce->findById($id, 'annonce');
    //var_dump($resultat);
    //die;
    require_once './Vues/Annonce/single_annonce.php';

}

public function modifAnnonce($id){
    $annonce = new Annonce();
    $annonceId = $annonce->findById($id, 'annonce');
    require_once './Vues/Annonce/edit_annonce.php';
    

}


/*
$categorie = new Categorie();
$categorieId = $categorie->findById($id, 'categorie');
require_once './Vues/Categorie/edit_categorie.php';
if(isset($_POST['submit'])){
    foreach($categorieId as $value){
        
        $ca_libelle = $value->setCa_libelle($_POST['libelle']);
       // var_dump($ca_libelle);die;
        $value->updateCategorie($id, $ca_libelle);*/
       


}



?>