

<?php
 //require_once "../../header.html";

?>
<!Doctype html>
<html>
    <head>    
        <link rel="stylesheet" type="text/css" href="../../Ressources/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script></head>
    <body>
    <div class="card col-md-6">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php $annonce->getId_annonce()?></h5>
    <p class="card-text"><?php $annonce->getAn_libelle()?></p>
    <p class="card-text"><small class="text-muted"><?php $annonce->getAn_date()?></small></p>
  </div>
</div>

</div>
    </body>
</html>