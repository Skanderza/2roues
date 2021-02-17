<?php
foreach($annonceId as $annonce){
?>
            <div class="container">
				<form method="post">
                    <h4>Modifier annonce</h4>
				  <div class="form-group">
				    <label>Titre</label>
				    <input type="text" class="form-control" name="libelle" value="<?php echo $annonce->getAn_libelle(); ?>" required>
				  </div>
                  <div class="form-group">
				    <label>Prix</label>
				    <input type="text" class="form-control" name="libelle" value="<?php echo $annonce->getAn_prix(); ?>" required>
				  </div>
                  <div class="form-group">
				    <label>Contact</label>
				    <input type="text" class="form-control" name="libelle" value="<?php echo $annonce->getAn_telephone (); ?>" required>
				  </div>
                  
                  <div class="form-group">
            <label for="categorie">Categorie</label>
            <select class="form-control" name="categorie" id="categorie" required>
                <option value=" ">Choisir une catégorie</option>
                <option value="62">Vélo</option>
                <option value="33">Vélo électrique</option>
                <option value="36">Trotinette</option>
                <option value="43">Trotinette électrique</option></select>
          </div>
				  <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
				</form>
			</div>

<?php
}
?>