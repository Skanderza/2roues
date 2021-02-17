<?php
require_once 'Model.php';
class Annonce extends Model{

private $id_annonce;
private $an_libelle;
private $an_prix;
private $an_photo;
private $an_date;
private $an_description;
private $an_telephone;
private $an_etat;
private $id_utilisateur;
private $id_categorie;


//getter && setter

public function getId_annonce()
{
return $this->id_annonce;
}

public function getAn_libelle()
{
return $this->an_libelle;
}


public function setAn_libelle($an_libelle)
{
$this->an_libelle = $an_libelle;

return $this;
}


public function getAn_prix()
{
return $this->an_prix;
}

 
public function setAn_prix($an_prix)
{
$this->an_prix = $an_prix;

return $this;
}


public function getAn_photo()
{
return $this->an_photo;
}


public function setAn_photo($an_photo)
{
$this->an_photo = $an_photo;

return $this;
}


public function getAn_date()
{
return $this->an_date;
}
 
public function setAn_date($an_date)
{
$this->an_date = $an_date;

return $this;
}


public function getAn_description()
{
return $this->an_description;
}


public function setAn_description($an_description)
{
$this->an_description = $an_description;

return $this;
}


public function getAn_telephone()
{
return $this->an_telephone;
}

 
public function setAn_telephone($an_telephone)
{
$this->an_telephone = $an_telephone;

return $this;
}


public function getAn_etat()
{
return $this->an_etat;
}


public function setAn_etat($an_etat)
{
$this->an_etat = $an_etat;

return $this;
}

 
public function getId_utilisateur()
{
return $this->id_utilisateur;
}


public function setId_utilisateur($id_utilisateur)
{
$this->id_utilisateur = $id_utilisateur;

return $this;
}


public function getId_categorie()
{
return $this->id_categorie;
}


public function setId_categorie($id_categorie)
{
$this->id_categorie = $id_categorie;

return $this;
}





public function createAnnonce($an_libelle, $an_prix, $an_description, $an_telephone,
    $an_etat, $an_date, $id_categorie, $id_utilisateur){
    
    $bdd = Model::getConnection();
    $requete = $bdd->prepare("INSERT INTO annonce (an_libelle, an_prix, an_date, an_description, an_telephone, an_etat,  id_utilisateur, id_categorie)
     VALUES ('$an_libelle', $an_prix, '$an_date', '$an_description', $an_telephone, '$an_etat', $id_utilisateur, $id_categorie)");
  
    if(!$requete->execute()){
        die("Erreur requête");
    }
    echo'<div class="alert alert-success" role="alert">
    Annonce ajouté!</div>';
}


public function findByidAnnonce($id){
        $bdd = $this->getConnection();
		$sql = $bdd->prepare("SELECT * FROM annonce WHERE id_utilisateur = ".$id);
		$sql->execute();
		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'annonce');
		return $resultat;
}

public function findCategorieById($id){
    $bdd = $this->getConnection();
    $sqlCa = $bdd->prepare("SELECT * FROM categorie c INNER JOIN annonce a ON c.id_categorie = a.id_categorie WHERE a.id_utilisateur = ".$id);
        $sqlCa->execute();
        $resultatCa = $sqlCa->fetchAll(PDO::FETCH_COLUMN, 1);
       return $resultatCa;
}



}
?>