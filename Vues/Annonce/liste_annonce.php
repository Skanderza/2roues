<div class="container">
  <h1>Annonces</h1>
</div>
<div class="container">
 <div class="row">
 <?php foreach($allAnnonce as $annonce):?>
  <div class="col-sm-4 ">
  <div class="card bg-light">
  <div class="card-body">
  <div class="row">
  <div class="col-sm-6">
  <p class="card-title bg-success text-white"><?= $annonce['an_libelle'] ?></p></div>
  <div class="col-sm-6">
  <p class="card-title bg-success text-white" ><i style="color:black">Publié par: </br></i><?= $annonce['ut_nom']?></p></div>
</div>
<?php// echo $GLOBALS['PATH']?>
</br>

<?php //echo "<img src=".$GLOBALS['PATH'].$annonce['img_nom'].">"; ?>
<?php echo "<img src='2rouesImage/{$annonce['img_nom']}' style='width:350px'>"; ?>


<p class="card-text"> <?= $annonce['img_nom']?></p> 
  <p class="card-text"> <?= $annonce['an_prix']?>€</p> 
  <p class="card-footer bg-success text-white"><i style="color:black">Publié le: </i> <?= $annonce['an_date']?></p> 
  <?php
   if(isset( $_SESSION['ut_email'])){
  ?>
  <a class="link-success" href="?action=singleAnnonce&annonceId='<?= $annonce['id_annonce']?>'">Voir annonce</a>
  <?php } 
  else{
    echo' <div class="col-sm-8"> ';
    echo'<a href="index.php?action=connexion" class="btn btn-success "><FONT size="3pt">Pour voir l\'annonce veuillez vous connecter</FONT></a>';
    echo '</div>';
  }
  ?>
  </div>
</div>
</br>
</div>
<?php endforeach ?>

   </div>
  </div>


  