<?php

require_once '../../Models/Annonce.php';
require '../../header.php';
?>
<!Doctype html>
<html>
    <head>    
        <link rel="stylesheet" type="text/css" href="../../Ressources/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script></head>
    <body>


<?php



$id =$_GET['id'];
   

 try{
    $bdd =new PDO('mysql:host=localhost;dbname=deux_roues', "root", "root");
}
catch(PDOException $e){
    print "Erreur";
    die;
}
return $bdd;
$id =$_GET['id'];
   var_dump($id);
   
    $sql = $bdd->prepare("SELECT * From annonce WHERE id_annonce = ".$id);
    if(!$requete->execute()){
        die("Erreur requête");
    }
    var_dump('ok');die;


  
   



?>