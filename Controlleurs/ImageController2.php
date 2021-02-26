<?php
require_once './Models/Image.php';

Class ImageController{

    public function nouvelleImage(){
        require_once './Vues/Annonce/formulaire_annonce.php';
      
        if(isset($_POST['submit'])){
          
            $ret        = false;
            $img_blob   = '';
            $img_taille = 0;
            $img_type   = '';
            $img_nom    = '';
            $taille_max = 250000;
            $ret        = is_uploaded_file($_FILES['fic']['tmp_name']);
            //var_dump($ret);die;
            if (!$ret) {
                echo "Problème de transfert";
                return false;
            } else {
               
                if ($img_taille > $taille_max) {
                    echo "Trop gros !";
                    return false;
                }
                 
                $image = new Image();
                $img_taille = $image->setImg_taille($_FILES['fic']['size'])->getImg_taille();
                $img_type = $image->setImg_type($_FILES['fic']['type'])->getImg_type();
                $img_nom = $image->setImg_nom($_FILES['fic']['name'])->getImg_nom();
                $img_blob =  $image->setImg_blob(file_get_contents ($_FILES['fic']['tmp_name']))->getImg_blob();
//var_dump($image);die;
                $image->createImage($img_nom, $img_taille, $img_type, $img_blob);
            }
        }
    }







}

/*
//photo
        $ret        = false;
        $img_blob   = '';
        $img_taille = 0;
        $img_type   = '';
        $img_nom    = '';
        $taille_max = 250000;
        $ret        = is_uploaded_file($_FILES['fic']['tmp_name']);
        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            // Le fichier a bien été reçu
            $img_taille = $_FILES['fic']['size'];
            
            if ($img_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }

            $img_type = $_FILES['fic']['type'];
            $img_nom  = $_FILES['fic']['name'];
        }
*/

?>