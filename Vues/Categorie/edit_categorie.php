<?php
foreach($categorieId as $categorie){
?>
            <div class="container">
				<form method="post">
                    <h4>Modifier catégorie</h4>
				  <div class="form-group">
				    <label>Libelle</label>
				    <input type="text" class="form-control" name="libelle" value="<?php echo $categorie->getCa_libelle(); ?>">
				  </div>
				  <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
				</form>
			</div>

<?php
}
?>