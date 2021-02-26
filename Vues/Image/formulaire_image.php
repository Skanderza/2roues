

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
  <form method="post" enctype="multipart/form-data">

<div class="form-group">

              <label>Choisissez une photo</label>
              <input type="hidden" name="MAX_FILE_SIZE" value="250000" /><!--Empechez les photos de plus de 250000 o-->
              <input type = "file" class="form-control" name="fic" size=50>
</div>
</br>
          <button type="submit" class="btn btn-success" name="submitImg">Enregistrer</button>
</div>
</body>
</html>

        
          