<?php
session_start();
    require_once "header.html";
    require_once "Controlleurs/UtilisateurController.php";
    require_once "Controlleurs/AnnonceController.php";
    require_once "Controlleurs/CategorieController.php";
    require_once "Controlleurs/AnnonceController.php";

    $utilisateur = new UtilisateurController();
    $annonce = new AnnonceController();
    $categorie = new CategorieController();
    $annonce = new AnnonceController();
    
   
if(isset($_GET['action'])){
   //Annonce
    if($_GET['action'] == 'annonce'){
        $annonce->nouvelleAnnonce();
        $annonce->listeAnnonce();
    }
    
    //Categorie
    if($_GET['action'] == 'categorie'){
        $categorie->nouvelleCategorie();
        echo "</br>";
        $categorie->listeCategorie();

    }
    if($_GET['action'] == 'modifierCategorie'){
        $categorie->modifCategorie($_GET['categorieId']);
    }
    if($_GET['action'] == 'supprimerCategorie'){
        $categorie->supprimerCategorie($_GET['categorieId']);
    }
    //utilisateur
    if($_GET['action'] == 'utilisateur'){
        $utilisateur->listeUtilisateur();
    }
    if($_GET['action'] == 'modifierUtilisateur'){
        $utilisateur->modifUtilisateur($_GET['utilisateurId']);
        
    }
    if($_GET['action'] == 'supprimerUtilisateur'){
        $utilisateur->supprimerUtilisateur($_GET['utilisateurId']);
    }
    if($_GET['action'] == 'connexion'){
        
        $utilisateur->connexionUt();
    }
    if($_GET['action'] == 'inscription'){
        $utilisateur->nouveauUtilisateur();
     }

}$annonce->listeAnnonce();







?>