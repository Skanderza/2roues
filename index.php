<?php
session_start();

    require_once "header.php";
    require_once "Controlleurs/UtilisateurController.php";
    require_once "Controlleurs/AnnonceController.php";
    require_once "Controlleurs/CategorieController.php";
    require_once "Controlleurs/AnnonceController.php";
    require_once "Controlleurs/ImageController.php";

    $utilisateur = new UtilisateurController();
    $annonce = new AnnonceController();
    $categorie = new CategorieController();
    $annonce = new AnnonceController();
    $image = new ImageController();
    
    //action null
if(!isset($_GET['action'])){
   $annonce->listeAnnonce();
    //isset action         
     }elseif(isset($_GET['action'])){
        
                //si connecter
                if(isset ($_SESSION['ut_email'])){
                  
                   // annonce
                   if($_GET['action'] == 'ajouterAnnonce'){
                    $annonce->nouvelleAnnonce();
                }
                if($_GET['action'] == 'ajouterImage'){
                    $image->nouvelleImage();
                }
                if($_GET['action'] == 'mesAnnonces'){
                    $annonce->afficherMesAnnonce($_SESSION['id_utilisateur']);
                }
                if($_GET['action'] == 'supprimerAnnonce'){
                    $annonce->supprimerAnnonce($_GET['annonceId']);
                }
                if($_GET['action'] == 'modifierAnnonce'){
                    $annonce->modifAnnonce($_GET['annonceId']);
                }
                if($_GET['action'] == 'singleAnnonce'){
                    $annonce->voirAnnonce($_GET['annonceId']);
                }

                } else{
                    //si pas connecter
                    //annonce
                    if($_GET['action'] == 'ajouterAnnonce'){
                        $utilisateur->connexionUt();
                    }
                    //utilisateur
                    if($_GET['action'] == 'connexion'){
                        
                        $utilisateur->connexionUt();
                    }
                    if($_GET['action'] == 'inscription'){
                        $utilisateur->nouveauUtilisateur();
                    }
                }
                    if($_GET['action'] == 'deconnexion'){
                        header("Location: logout.php");
                    }
                    
}
?>
