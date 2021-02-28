<?php
require_once './Models/Utilisateur.php';

class UtilisateurController{

public function nouveauUtilisateur(){
    require_once './Vues/Utilisateur/formulaire_utilisateur.html';
    if(isset($_POST['submit'])){ 
        $utilisateur = new Utilisateur();
        $ut_nom = $_POST['nom'];
        $ut_email = $_POST['email'];
        $ut_mdp = $_POST['mdp'];
        $mdp2 = $_POST['mdp2'];
        $ut_role = 'ROLE_USER';
        $hmdp = hash('sha256', $ut_mdp );
        $hmdp2 = hash('sha256', $mdp2 );
        if($hmdp != $hmdp2){
            echo'<div class="alert alert-danger" role="alert">
            Veuillez renseigner un mot de passe identique!
          </div>';exit;
        }
        $utilisateur->createUtilisateur($ut_nom, $ut_email, $ut_role, $hmdp);
        
        header("Location: index.php");
    }
    
}

public function connexionUt(){
        require_once './Vues/Utilisateur/formulaire_connexion.html';
        $utilisateur = new Utilisateur();
        if(!empty($_POST)){
           if(!empty($_POST['email']) && !empty($_POST['mdp'])){
            $ut_email = $_POST['email'];
            $ut_mdp = $_POST['mdp'];
            $hmdp = hash('sha256', $ut_mdp );
            $utilisateur->signIn($ut_email, $hmdp);
            }
    }
}



public function listeUtilisateur(){
    $listeUtilisateur = new Utilisateur();
    $nbUtilisateur = $listeUtilisateur->stock('utilisateur');//Affichage du nombre utilisateur
    $allUtilisateur = $listeUtilisateur->findAll('utilisateur');
    require_once './Vues/Utilisateur/liste_utilisateur.php';
}

public function mdpOublie(){
    require_once './Vues/Utilisateur/mdpOublie.php';
    $utilisateur = new Utilisateur();
    if(!empty($_POST['submit'])){
        var_dump('ok');die;
        if(!empty($_POST['email'])){
            $ut_email = $_POST['email'];
            $utilisateur->mdpModif($ut_email);
        }
    }
}

}?>