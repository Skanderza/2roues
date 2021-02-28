

<?php
$db =new PDO('mysql:host=localhost;dbname=deux_roues', "root", "root");
 
    if(isset($_POST['submit'])){
        
        var_dump($_GET['token']);die;
           echo'<div class="alert alert-danger" role="alert">
           Erreur lien!
         </div>';
           exit;
        }
        $token = $_GET['token'];
        $sql = $db->prepare("SELECT ut_mdp, ut_mdp_date FROM utilisateur WHERE ut_token = '$token'");
        $sql->execute();
        $resultat = $sql->fetch(PDO::FETCH_ASSOC);
        if(empty($resultat)){
            echo'<div class="alert alert-danger" role="alert">
            Erreur token!
         </div>';
            exit;
        }//Verification validité
        $todayDate = time();
        $tokenDate = strtotime('+3 hours' ,strtotime($resultat['ut_mdp_date']));
        
        if($tokenDate>$todayDate){
            echo'<div class="alert alert-danger" role="alert">
            token expiré!
         </div>';exit;
        }
        if (!empty($_POST)) {
            if ($_POST['psw'] === $_POST['psw_confirm']) {
                 $ut_mdp = $_POST['psw'];
            $hmdp = hash('sha256', $ut_mdp );
            $sql = $db->prepare("UPDATE utilisateur SET ut_mdp = '$hmdp', ut_token = '' WHERE ut_token = $token ");
            $sql->execute();
            echo '<div class="container"><div class="alert alert-success" role="alert">
            Le mot de passe a été changé 
          </div>';
        }else{
            echo '<div class="container"><div class="alert alert-danger" role="alert">
            Les deux mots de passes ne sont pas identiques.
            </div>';
        }

        }
        ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href=".../Ressources/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </head>
    <body>
<form method="post" action="mdpReinit.php?token=<?php echo $_GET['token']; ?>">
    <div class="container">
    </br></br></br></br>
    <h1>Réinitialisation du mot de passe</h1>
</br></br>
  <div class="mb-3">
  <label>Mot de passe : <input type="password" name="psw" class="form-control" required  /></label><br />
  <label>Confirmer mot de passe : <input type="password" name="psw_confirm" class="form-control" required  /></label><br />
  </div>
  <button type="submit" class="btn btn-primary">Changer le mot de passe</button>
</form>
</div>
</body>
</html>
