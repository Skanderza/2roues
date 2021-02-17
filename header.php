
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./Ressources/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="navbar-brand" aria-current="page" href="index.php">2roues</a>
                
                 
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?action=ajouterAnnonce">Ajouter annonce</a>
                  </li>
              <?php
                  if(isset( $_SESSION['ut_email'])){
                    echo  '<h2><span class="badge bg-success">'.$_SESSION['ut_email'].'</span></h2>';
              ?>
                  <li class="nav-item">
                    <a class="nav-link" href="?action=mesAnnonces">Mes annonces</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?action=deconnexion" ><p class="text-danger">Déconnexion</p></a>
                  </li>
              <?php
                  }else{
              ?>
                      <li class="nav-item">
                    <a class="btn btn-outline-success" href="index.php?action=inscription">Inscription</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?action=connexion">Connexion</a>
                  </li>
              <?php
                  }
                 
              ?>
                </ul>
              </div>
          </nav>
    </body>
</html>
