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
				    <input type="text" class="form-control" name="prix" value="<?php echo $annonce->getAn_prix(); ?>" required>
				  </div>
                  <div class="form-group">
				    <label>Contact</label>
				    <input type="text" class="form-control" name="telephone" value="<?php echo $annonce->getAn_telephone (); ?>" required>
				  </div>
				  <div class="form-group">
				    <label>Description</label>
				    <textarea class="form-control" name="description" value="><?php echo $annonce->getAn_description(); ?>" rows="3" required> </textarea>
				  </div>
                  
</br>
				  <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
				</form>
			</div>

<?php
}
?>