<?php
require_once 'Model.php';

class UtilisateurT extends Model{


private $id_utilisateur;
private $ut_nom;
private $ut_email;
private $ut_mdp;



 //Getter & Setter
public function getId_utilisateur()
{
return $this->id_utilisateur;
}

public function getUT_nom()
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


public Function createUtilisateur($ut_nom, $ut_email, $ut_mdp){
	$bdd = Model::connection();
	$sql = $bdd->prepare("INSERT INTO utilisateur (ut_nom, ut_email, ut_mdp) 
	VALUES (:ut_nom, :ut_email, :ut_mdp)");
		$sql->bindValue(':ut_nom', $ut_nom, PDO::PARAM_STR );
		$sql->bindValue(':ut_email', $ut_email, PDO::PARAM_STR );
		$sql->bindValue(':ut_mdp', $ut_mdp, PDO::PARAM_STR );
		if(!$sql->execute()){
			die("Erreur requête");
		}
echo "utilisateur ajouté";

}

public function updateUtilisateur($id, $ut_nom, $ut_email){
	$bdd = Model::connection();
	//var_dump($ut_nom);
	echo '=====>update '.$ut_nom;die;
	
	//$sql = $bdd->prepare("UPDATE utilisateur SET ut_nom =:ut_nom, ut_email = :ut_email WHERE id_utilisateur=".$id);
	//$sql->bindValue(':ut_nom', $ut_nom, PDO::PARAM_STR );
	//$sql->bindValue(':ut_email', $ut_email, PDO::PARAM_STR );
//	if(!$sql->execute()){
//		die("Erreur requête");
//	}
//	header("Location: index.php?action=utilisateur");
}



}
?>


