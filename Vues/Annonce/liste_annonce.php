<div class="container">
<table class="table">
<thead>
  <h1>Annonces</h1>
</div>
<div class="container">
<div class="row">

<?php foreach($allAnnonce as $annonce):?>
  <div class="col-sm-4">
  <div class="card ">
  <div class="card-body">
  <div class="row">
  <div class="col-sm-6">
  <p class="card-title"><?= $annonce->getAn_libelle()?></p></div>
  <div class="col-sm-6">
  <p class="card-title">Publié par: <?= $annonce->getId_utilisateur()?></p></div>
</div>
  <p class="card-text"> <?= $annonce->getAn_prix()?>€</p> 
  <p class="card-footer"> Publié le:  <?= $annonce->getAn_date()?></p> 
  <a href="?action=singleAnnonce&annonceId='<?php echo $annonce->getId_annonce();?>'">Voir annonce</a>

  </div>
  
</div>
</br>
</div>
<?php endforeach ?>

   </div></div>