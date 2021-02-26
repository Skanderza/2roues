<?php
$GLOBALS['PATH'] = "2rouesImage/";
class Image extends Model{


    private $id_image;
    private $img_nom;
    private $id_utilisateur;
   

    
    

    
    public function getId_image()
    {
        return $this->id_image;
    }

    
    public function getImg_nom()
    {
        return $this->img_nom;
    }

   
    public function setImg_nom($img_nom)
    {
        $this->img_nom = $img_nom;

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


    public function createImage($id_utilisateur, $img_nom){
        $bdd = Model::getConnection();
        $requete = $bdd->prepare("INSERT INTO image (img_nom, id_utilisateur)
     VALUES ('$img_nom', $id_utilisateur)");
     //var_dump( $_FILES['fic']["tmp_name"]);die;
     //var_dump($_FILES['fic']["tmp_name"], $GLOBALS['PATH'] . $img_nom);die;
    //creer un dossier temporaire 
     if(!$requete->execute()){
        die("Erreur requête");
    }else{
        
        if (move_uploaded_file($_FILES['fic']["tmp_name"], $GLOBALS['PATH'] . $img_nom)) {
            $sql = $bdd->prepare("SELECT id_image FROM image WHERE id_utilisateur = '$id_utilisateur'");
                if(!$sql->execute()){
                    die("Erreur requête");
                }else{
                    $result = $sql->fetch();
                  //  inserer id Image dans annonce
                      $req = $bdd->prepare("UPDATE  annonce SET id_image = '".$result['id_image']."' WHERE id_utilisateur = '$id_utilisateur' ");
                      //var_dump($req );die;
                      if(!$sql->execute()){
                        die("Erreur requête");
                      }else{
                           echo'<div class="alert alert-success" role="alert">
                               Annonce ajouté!</div>';
                      }
                }
          //  $requete = $bdd->prepare("UPDATE annonce SET id_image = '
          //  VALUES ($id_image) Where id_utilisateur = '$id_utilisateur'");
        } else {
            echo "Erreur de téléchargement de fichier.";
        }
  
    }
}



}
?>