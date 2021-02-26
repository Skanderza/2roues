<?php
//session_start();
require_once 'Model.php';
class Utilisateur extends Model{


    private $id_utilisateur;
    private $ut_nom;
    private $ut_email;
    private $ut_mdp;

    //getter && setter
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    
    public function getUt_nom()
    {
        return $this->ut_nom;
    }

    public function setUt_nom($ut_nom)
    {
        $this->ut_nom = $ut_nom;

        return $this;
    }

    public function getUt_email()
    {
        return $this->ut_email;
    }

    public function setUt_email($ut_email)
    {
        $this->ut_email = $ut_email;

        return $this;
    }
 
    public function getUt_mdp()
    {
        return $this->ut_mdp;
    }

    public function setUt_mdp($ut_mdp)
    {
        $this->ut_mdp = $ut_mdp;

        return $this;
    }
    //

    public Function createUtilisateur($ut_nom, $ut_email, $ut_role, $hmdp){
            $bdd = Model::getConnection();
            $searchEmail = $bdd->prepare("SELECT * FROM utilisateur WHERE ut_email ='$ut_email'");
          
            $searchEmail->execute();
          
            $resultat = $searchEmail->fetch();
            
            if($resultat > 0 ){
                
                
                echo '<div class="alert alert-danger" role="alert">
                Cet email a déja un compte ! 
                </div>';
                exit;
            }else{  
                $requete = $bdd->prepare("INSERT INTO utilisateur (ut_nom, ut_email,ut_role, ut_mdp) 
                VALUE ('$ut_nom', '$ut_email', '$ut_role', '$hmdp') ");
                if(!$requete->execute()){
                    die("Erreur requête");
                }
                echo '<div class="alert alert-success" role="alert">
                Inscription reussis ! 
                </div>';
            } exit;
          
            
        }

        public function updateUtilisateur($id, $ut_nom, $ut_email){
            $bdd = Model::getConnection();
            $sql = $bdd->prepare("UPDATE utilisateur SET ut_nom ='".$ut_nom."', ut_email ='".$ut_email."' 
            WHERE id_utilisateur=".$id); 
            if(!$sql->execute()){
        		die("Erreur requête");
        	}
        	header("Location: index.php?action=utilisateur");
        }

        public function signIn($email, $hmdp){
            $bdd = Model::getConnection();
            $sql = $bdd->prepare("SELECT id_utilisateur, ut_nom, ut_email, ut_role, ut_mdp
            FROM utilisateur WHERE ut_email = '$email' AND ut_mdp = '$hmdp'");
            if(!$sql->execute()){
        		die("Erreur requête");
            }
            $coord = $sql->FETCHALL();
            if($coord[0]["ut_mdp"] === $hmdp){
                if($coord[0]['ut_role'] == 'ROLE_ADMI'){
                   header("Location: http://localhost:8888/2roues_admin/?action=connexion");
                }else{
                    $_SESSION['id_utilisateur'] = $coord[0][0];
                    $_SESSION['ut_nom'] = $coord[0][1];
                    $_SESSION['ut_email'] = $coord[0][2];
                    $_SESSION['ut_role'] = $coord[0][3];
                    header("Location: index.php");
                }
            }
            echo '<div class="alert alert-danger" role="alert">
            Mot de passe incorrecte!
          </div>';   exit;         
        }
       
        public function findByUtilisateur($id_utilisateur){
            $bdd = Model::getConnection();
            $sql = $bdd->prepare("SELECT id_annonce FROM annonce a
            INNER JOIN utilisateur u ON a.id_utilisateur = u.id_utilisateur WHERE a.id_utilisateur ='.$id_utilisateur'");
            if(!$sql->execute()){
        		die("Erreur requête");
            }
            $coord = $sql->FETCHALL();
        }

        

        

}


?>