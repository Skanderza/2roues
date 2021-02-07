<?php
foreach($utilisateurId as $utilisateur){
?>
            <div class="container">
				<form method="post">
                    <h4>Modifier utilisateur</h4>
				  <div class="form-group">
				    <label>Nom</label>
				    <input type="text" class="form-control" name="nom" value="<?php echo $utilisateur->getUt_nom(); ?>">
                  </div>
                  <div class="form-group">
				    <label>Email</label>
				    <input type="text" class="form-control" name="email" value="<?php echo $utilisateur->getUt_email(); ?>">
                  </div>

				  <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
				</form>
			</div>

<?php
}
?>