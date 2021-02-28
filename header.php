
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
                 <ul class="navbar-nav">
                 <!--1-->
                    <div class="col-sm-6 ">
                        <a class="navbar-brand " aria-current="page" href="index.php">GreenRide</a>
                    </div>
                    <!--1-->
                     <div class="col-sm-4">
                       <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                      </li>
                      <!--1-->
                    </div>
                    <div class="col-sm-6">
                        <li class="nav-item">
                            <a class="nav-link text-success" href="?action=ajouterAnnonce"><img src='./Ressources/img/add.png' width='20'>ajouter annonce</a>
                        </li>
                   </div>
              <?php
                  if(isset( $_SESSION['ut_email'])){
              ?>
              <!--1-->
                    <div class="col-sm-4">
                        <li class="nav-item">
                             <a class="nav-link text-success" href="?action=mesAnnonces">Mes annonces</a>
                        </li>
                    </div>
                    <!--1-->
                   <div class="col-sm">
                   <div class="position-absolute top-40 start-40">

                         <h2><span class="badge bg-success"><h5>Bienvenue</h5><?php echo $_SESSION['ut_nom'] ;?></span></h2>
                         </div>
                  </div>
                  <!--1-->
                  <div class="col-sm">
                  
                        <li class="nav-item">
                             <a class="nav-link position-absolute  end-0" href="?action=deconnexion" ><p class="text-danger">Déconnexion</p></a>
                         </li>
                  </div>
              <?php
                  }else{
              ?>
              <!--1-->
                 <div class="col-sm">
                      <li class="nav-item">
                      <div class="position-absolute  end-0">
                          <a class="btn btn-outline-success" href="index.php?action=inscription">Inscription</a>
                      </div>
                      </li>
                  </div>
                <!--1-->
                 <div class="col-sm">
                    <li class="nav-item">
                    <div class="position-absolute  end-50">
                         <a class="btn btn-outline-dark" href="?action=connexion">Connexion</a>
                    </div>
                    </li>
                 </div>
              <?php
                  }
              ?>
               
              </ul>
          </div><!--div row-->
           </div><!--div container-->
          </nav>




          



          
    </body>
</html>
