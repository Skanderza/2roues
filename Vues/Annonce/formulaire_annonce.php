<?php
//session_start();
if(isset($_SESSION['ut_nom'])){
  require_once "header.php";
  
  ?>
  
  <!DOCTYPE html>
  <html>
      <head>
          <meta charset="UTF-8">
          <link rel="stylesheet" type="text/css" href="../../Ressources/css/bootstrap.min.css">
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
      </head>
      <body>
  <div class="container">
      <h4>Ajouter Annonce</h4>
        <form method="post" enctype="multipart/form-data">
          <div class="form-group" enctype="multipart/form-data">
            <label for="categorie">Categorie</label>
            <select class="form-control" name="categorie" id="categorie" required>
                <option value=" ">Choisir une catégorie</option>
                <option value="62">Vélo</option>
                <option value="33">Vélo électrique</option>
                <option value="36">Trotinette</option>
                <option value="43">Trotinette électrique</option></select>
          </div>
        
            <div class="form-group">
              <label>Titre</label>
              <input type="text" class="form-control" name="libelle" ><!--required-->
            </div>
            <div class="form-group">
              <label>Prix</label>
              <input type="number" class="form-control" name="prix" ><!--required-->
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea type="text" class="form-control" name="description" > </textarea><!--required-->
            </div>
            <div class="form-group">
              <label>Telephone</label>
              <input type="text" class="form-control" name="telephone" ><!--required-->
            </div>
            <div class="form-group">
              <label for="etat">Etat</label>
              <select class="form-control" name="etat" id="etat" >
                  <option value=" ">Choisir un état</option>
                  <option value="a">État neuf</option>
                  <option value="b">Très bon état</option>
                  <option value="c">Bon état</option>
                  <option value="d">État satisfaisant</option>
                  <option value="e">Défectueux</option>
              </select>
             


<!--<input type="hidden" name="MAX_FILE_SIZE" value="250000" />-->
<!--Empechez les photos de plus de 250000 o-->
        
          </br>
          <button type="submit" class="btn btn-success" name="submit">Enregistrer</button>
          
    </div>
      </body>
  </html>
  <?php  
}