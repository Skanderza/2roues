<?php

require_once './Models/Utilisateur.php';
$bdd = Model::getConnection();
require_once './Vues/Utilisateur/mdpOublie.html';
if(!empty($_POST)){
    if(!empty($_POST['email'])){
        $sql = $bdd->prepare("SELECT COUNT(*) AS nb FROM utilisateur WHERE email = ?");
        $sql->binValue(1, $_POST['email']);
        $sql->execute();
        $resultat = $sql->fetch(PDO::FETCH_ASSOC);
            if(!empty($resultat) && $resultat['nb'] > 0){
                $preToken = implode('', array_merge(range('A','Z'), range('a','z'), range('0','9')));
                $token = $token = substr(str_shuffle($string), 0, 20);
            }
    }
}


?>