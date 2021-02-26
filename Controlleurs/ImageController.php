<?php
require_once './Models/Image.php';
Class ImageController{
 
    private $id_image;
    private $img_nom;
    public $BOUTIQUE = "/Applications/MAMP/htdocs/2rouesImage/";
    private $id_utilisateur;

    public function nouvelleImage(){

        require_once './Vues/Image/formulaire_image.php';
        $image = new Image();
       
        if(isset($_POST['submitImg'])){
            
            $id_utilisateur = $image->setId_utilisateur($_SESSION['id_utilisateur'])->getId_utilisateur();
            $img_nom = $image->setImg_nom(basename($_FILES["fic"]["name"]))->getImg_nom();
            $image->createImage($id_utilisateur, $img_nom );
          
        }
    }
    

  
}

?>