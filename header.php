
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
              <a class="navbar-brand" href="#">2roues</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?action=ajouterAnnonce">Ajouter annonce</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?action=inscription">Inscription</a>
                  </li>
                 
                  <?php
                  if(isset( $_SESSION['ut_email'])){
                    echo  '<h2><span class="badge bg-success">'.$_SESSION['ut_email'].'</span></h2>';

                    ?>
                  <li class="nav-item">
                    <a class="nav-link" href="?action=deconnexion">Déconnexion</a>
                  </li>
                     <?php
                  }else{
                    ?>
                    <li class="nav-item">
                    <a class="nav-link" href="?action=connexion">Connexion</a>
                  </li>
<?php
                  }
                 
                  ?>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="?action=deconnexion">Déconnexion</a>
                  </li>

                
                  
                </ul>
                
              </div>
            </div>
          </nav>

    </body>
</html>
