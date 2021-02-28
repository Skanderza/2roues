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
private $id_image;


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


public function getId_image()
{
return $this->id_image;
}


public function setId_image($id_image)
{
$this->id_image = $id_image;

return $this;
}





public function createAnnonce($an_libelle, $an_prix, $an_description, $an_telephone,
    $an_etat, $an_date, $id_categorie, $id_utilisateur){
    
    $bdd = Model::connection();
    $requete = $bdd->prepare("INSERT INTO annonce (an_libelle, an_prix, an_date, an_description, an_telephone, an_etat,  id_utilisateur, id_categorie)
     VALUES ('$an_libelle', $an_prix, '$an_date', '$an_description', $an_telephone, '$an_etat', $id_utilisateur, $id_categorie)");
//var_dump($requete);die;
    if(!$requete->execute()){
        die("Erreur requête");
    }else{
      
        echo '<script language="javascript">';
                echo 'alert("Ajoutez maintenant une photo.");';
                echo 'window.location.href="http://localhost:8888/2roues/index.php?action=ajouterImage";';
                echo '</script>';
        
       
        
    }    
}


public function findByidAnnonce($id){
        $bdd = $this->connection();
		$sql = $bdd->prepare("SELECT * FROM annonce WHERE id_utilisateur = ".$id);
		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'annonce');
		return $resultat;
}

public function findCategorieById($id){
    $bdd = $this->connection();
    $sqlCa = $bdd->prepare("SELECT * FROM categorie c INNER JOIN annonce a 
    ON c.id_categorie = a.id_categorie WHERE a.id_utilisateur = ".$id);
        $sqlCa->execute();
        $resultatCa = $sqlCa->fetchAll(PDO::FETCH_COLUMN, 1);
       return $resultatCa;
}




public function updateAnnonce($id, $an_libelle, $an_prix, $an_telephone, $an_description){
    $bdd = Model::connection();
    $sql = $bdd->prepare("UPDATE annonce SET an_libelle ='".$an_libelle."', an_prix ='".$an_prix."', an_telephone ='".$an_telephone."',  an_description ='".$an_description."' WHERE id_annonce =".$id);
    //var_dump($sql);die;
    if(!$sql->execute()){
        die("Erreur requête");
    }
    
    header("Location: index.php?action=mesAnnonces");
    
}

public function nomUtilisateurParId($id_utilisateur){
    $bdd = Model::connection();
    $sql = $bdd->prepare("SELECT ut_nom FROM utilisateur u INNER JOIN annonce a ON u.id_utilisateur = a.id_utilisateur WHERE a.id_utilisateur =".$id_utilisateur);
    $sql->execute();
   return $resultat = $sql->fetch(PDO::FETCH_COLUMN, 0);
   //var_dump($resultat);echo'</br>';
}
///////////////////////
public function annonceNomUtilsateur(){
    $bdd = Model::connection();
    //$sql = $bdd->prepare(" SELECT id_annonce, u.ut_nom, an_prix, an_libelle, an_date, a.id_utilisateur FROM utilisateur u INNER JOIN annonce a ON u.id_utilisateur = a.id_utilisateur ");
    $sql = $bdd->prepare(" SELECT DISTINCT a.id_annonce, u.ut_nom, a.an_prix, a.an_libelle, a.an_date, a.id_utilisateur, i.img_nom FROM utilisateur u 
    INNER JOIN annonce a ON u.id_utilisateur = a.id_utilisateur 
    INNER JOIN image i ON u.id_utilisateur = i.id_utilisateur GROUP BY a.id_annonce
");
    $sql->execute();
    return $resultat =$sql->fetchAll();
    var_dump($resultat);die;
}

public function findByIfSingleAnnonce($id){
    $bdd = Model::connection();
    $sql = $bdd->prepare(" SELECT a.id_annonce, u.ut_nom, a.an_telephone, a.an_etat, a.an_prix, 
    a.an_libelle,a.an_description, a.an_date, a.id_utilisateur, c.ca_libelle 
    FROM utilisateur u INNER JOIN annonce a ON u.id_utilisateur = a.id_utilisateur 
    INNER JOIN categorie c on a.id_categorie = c.id_categorie WHERE a.id_annonce =".$id);
    
    $sql->execute();
    return $resultat =$sql->fetchAll();
    var_dump($resultat);
    var_dump('resultat');die;
    echo'</br>';
    echo'</br>';
    echo'</br>';
    echo'</br>';
    
}






}
?>