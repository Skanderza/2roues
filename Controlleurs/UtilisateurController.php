<?php
//require_once './Models/UtilisateurT.php';
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
        if( !empty($_POST)){
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




public function modifUtilisateur($id){
    $utilisateur = new Utilisateur();
    $utilisateurId = $utilisateur->findById($id, 'utilisateur');
    require_once './Vues/Utilisateur/editUtilisateur.php';
    if(isset($_POST['submit']) && $_POST['nom'] && $_POST['email']){
      
              foreach($utilisateurId as $utilisateur){
                 $ut_nom = $utilisateur->setUt_nom($_POST['nom'])->getUt_nom(); 
                 $ut_email = $utilisateur->setUt_email($_POST['email'])->getUt_email();
                 $utilisateur->updateUtilisateur($id, $ut_nom, $ut_email);
 
             } 
        }
}



public function supprimerUtilisateur($id){
        $utilisateur = new Utilisateur();
        return $utilisateur->deleteById($id, 'utilisateur');
}








}?>