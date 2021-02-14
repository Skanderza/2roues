<?php
require_once './Models/Annonce.php';

class AnnonceController extends Model{

    
public function nouvelleAnnonce(){
    require_once './Vues/Annonce/formulaire_annonce.php';
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
    }
}
public function listeAnnonce(){
    $listeAnnonce = new Annonce();
    $allAnnonce = $listeAnnonce->findAll('annonce');
    require_once './Vues/Annonce/liste_annonce.php';
}


public function ejbedGet($id){
    $bdd = $this->getConnection();
    $sql = $bdd->prepare("SELECT * From annonce WHERE id_annonce = ".$id);
    $sql->bindParam(':id', $_GET['id']);
    if(!$requete->execute()){
        die("Erreur requête");
    }


}


public function offreAnnonce($id){
$annonce = new Annonce();
$annonce_single = $annonce->findById($id, 'annonce');
//var_dump($annonce_single);die;
//require_once './Vues/Annonce/liste_annonce.php';
if(isset($_POST['submit'])){
    var_dump('nokkkkk');die;
    $annonce_single->ejbedGet($id);

    var_dump($annonce_single);die;
    require_once '../Vues/Annonce/single_annonce.php';
   // var_dump($annonce_single);die;
    foreach($annonce_single as $value){
       $value-> setId_annonce($_GET['id']) ;
       require_once '../Vues/Annonce/single_annonce.php';
      }
    }
  }

public function supprimerAnnonce($id)
{
$annonce = new Annonce();
return $annonce->deleteById($id, 'annonce');
header('Location: index.php');
}

}


?>