<?php
class Model{

    public function connection()
	{
		try{
			$db =new PDO('mysql:host=localhost;dbname=deux_roues', "root", "root");
		}
		catch(PDOException $e){
			print "Erreur";
			die;
		}
		return $db;
		
	}

	public function findById($id, $table){
		$bdd = $this->connection();
		$sql = $bdd->prepare("SELECT * FROM $table WHERE id_".$table." = ".$id);
		if(!$sql->execute()){
			die('Erreur requête');
		}
		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, $table);
		return $resultat;
		
	}
	
	public function deleteById($id, $table)
	{
		$bdd = $this->connection();
		$sql = $bdd->prepare(" DELETE FROM $table WHERE id_".$table." = ".$id);
		if(!$sql->execute()){
			die('Erreur requête');
		}
		if($table = 'categorie'){
			header("Location: index.php?action=categorie");
		}else if($table = 'utilisateur'){
			header("Location: index.php?action=utilisateur");
		}
		header('Location: index.php?action=mesAnnonces');
		
		
	}
	
	public function findAll($table)
	{
		$bdd = $this->connection();

		$sql = $bdd->prepare("SELECT * FROM $table");

		$sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, $table);

		return $resultat;
	}

	public function stock($table){
		$bdd = $this->connection();
		$sql = $bdd->prepare("SELECT count(*) FROM $table");
		$sql->execute();
		$resultat = $sql->fetchColumn();
		return $resultat;
	}
	



}
?>