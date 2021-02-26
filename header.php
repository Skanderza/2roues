
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./Ressources/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar  navbar-expand-lg  navbar-light bg-light">
            
        <div class="container">

        <div class="row">
           
                <ul class="navbar-nav ">

                
              
                <div class="col-sm"><!--1-->
                <a class="navbar-brand" aria-current="page" href="index.php">2roues</a>
                </div><!--1-->
               
                <div class="col-sm">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
                  </li>
</div>
               
                
<div class="col-sm">
                  <li class="nav-item">
                    <a class="nav-link" href="?action=ajouterAnnonce">Ajouter annonce</a>
                  </li>
</div>
              

              <?php
                  if(isset( $_SESSION['ut_email'])){
                   
              ?>
                <div class="col-sm">
                  <li class="nav-item">
                    <a class="nav-link" href="?action=mesAnnonces">Mes annonces</a>
                  </li>
                  </div>

                  <div class="col-sm-auto">
                   <h2><span class="badge bg-success"><h5>Bienvenue</h5><?php echo $_SESSION['ut_email'] ;?></span></h2>
                  </div>

                 
                  <!--1-->
                  <div class="col-sm">
                  <li class="nav-item">
                    <a class="nav-link" href="?action=deconnexion" ><p class="text-danger">Déconnexion</p></a>
                  </li></div>
                 
                  <!--1-->
                  
              <?php
                  }else{
              ?>
              <div class="col-sm">
                      <li class="nav-item">
                    <a class="btn btn-outline-success" href="index.php?action=inscription">Inscription</a>
                  </li></div>

                  <div class="col-sm">
                    <li class="nav-item">
                    <a class="nav-link" href="?action=connexion">Connexion</a>
                  </li></div>
              <?php
                  }
              ?>
               </div>
                </ul>
                </div>
                </div>
          </nav>
    </body>
</html>
