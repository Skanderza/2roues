<?php
require_once 'Model.php';
class Categorie extends Model{

    private $id_categorie;
    private $ca_libelle;

  
    public function getId_categorie()
    {
        return $this->id_categorie;
    }

    public function getCa_libelle()
    {
        return $this->ca_libelle;
    }

    public function setCa_libelle($ca_libelle)
    {
      return  $this->ca_libelle = $ca_libelle;

    }
public function createCategorie($ca_libelle){
    $bdd = Model::getConnection();
    $requete = $bdd->prepare("INSERT INTO categorie (ca_libelle) VALUE ('$ca_libelle') ");
    if(!$requete->execute()){
        die("Erreur requête");
    }
    header("Location: index.php?action=categorie");exit;
}

public function updateCategorie($id, $ca_libelle){
    $bdd = Model::getConnection();
    $requete = $bdd->prepare("UPDATE categorie SET ca_libelle='".$ca_libelle."' WHERE id_categorie=".$id);
    if(!$requete->execute()){
        die("Erreur requête");
    }

    header("Location: index.php?action=categorie");
}




    
}
?>