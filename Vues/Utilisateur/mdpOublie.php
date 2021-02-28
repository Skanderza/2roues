
<?php
$db =new PDO('mysql:host=localhost;dbname=deux_roues', "root", "root");
 
    if(isset($_POST['submit'])){
        
        if(!empty($_POST['email'])){
           // var_dump("ligne8");die;
            $ut_email = $_POST['email'];
            $sql = $db->prepare("SELECT COUNT(*) AS nb FROM utilisateur WHERE ut_email = '$ut_email'") ;
            $sql->execute();
            $resultats = $sql->fetch(PDO::FETCH_ASSOC);
            
            if (!empty($resultats) && $resultats['nb'] > 0){

                //Création token
                $string = implode('', array_merge(range('A','Z'), 
                                range('a','z'), range('0','9')));
		     	$token = substr(str_shuffle($string), 0, 20);

                 // On insère la date et le token dans la DB
                $sql = $db->prepare("UPDATE utilisateur SET ut_mdp_date = NOW(),
                            ut_token = '$token' WHERE ut_email = '$ut_email' ");
                $sql->execute();
                 //on prépare l'envoie du courriel
                $link = 'http://localhost:8888/2roues/Vues/Utilisateur/mdpReinit.php?token='.$token.'';
                $to = $ut_email;
                $subject = 'Réinitialisation de votre mot de passe';
                $message = '<h1>Réinitisalition de votre mot de passe</h1>
                            <p>Pour réinitialiser votre mot de passe, veuillez suivre ce lien : 
                            <a href="'.$link.'">'.$link.'</a></p>';
                // On défini les entêtes requis
                $header = [];
                $headers[] = 'MIME-Version: 1.0';//Multipurpose Internet Mail Extensions
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                $headers[] = 'To: '.$to.' <'.$to.'>';
               
            
                //On envoie le mail
                mail($to, $subject, $message, implode("\r\n", $headers));
                echo '<div class="container"><div class="alert alert-success" role="alert">
                Email envoyé.
              </div></div>';
              echo '<div style="color: green;"><a href="'.$link .'">Réinitialisation</a></div>';
                    }
           
          
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
<form method="post">
    <div class="container">
    </br></br></br></br>
    <h1>Réinitialisation du mot de passe</h1>
</br></br>
  <div class="mb-3">
    <label  class="form-label">Veuillez renseigner votre Email</label>
    <input type="email" name='email' class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
</form>
</div>
</body>
</html>