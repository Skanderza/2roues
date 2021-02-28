<?php
//require_once './Models/Utilisateur.php';
require_once './Vues/Utilisateur/mdpOublie.php';
class Mdp{

    public function mdpOublie(){
        
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