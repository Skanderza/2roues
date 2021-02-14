<div class="container">
<table class="table">
<thead>
  <h1>Liste annonces</h1>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Prix</th>
      <th scope="col">Categorie</th>
      <th scope="col">Date</th>
      <th scope="col">Modification</th>
      <th scope="col">Suppression</th>
    </tr>
  </thead>
<tbody>
    <?php
    foreach($allAnnonce as $annonce){
        echo "<tr>";
        echo "<td>".$annonce->getId_annonce()."</td>";
        echo "<td>".$annonce->getAn_libelle()."</td>";
        echo "<td>".$annonce->getAn_prix()." €</td>";
        echo "<td>".$annonce->getId_categorie()."</td>";
        echo "<td>".$annonce->getAn_date()."</td>";

        echo "<td><a href='?action=modifierAnnonce&annonceId=".$annonce->getId_annonce()."'><img src='./Ressources/img/edit.png' width='20'></a></td>";
       ?>
       <!-- Button trigger modal -->
<td><img src='./Ressources/img/delete.png' width='20'  data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $annonce->getId_annonce(); ?>">
  
    </td>

<!-- Modal -->
<div class="modal fade" id="exampleModal-<?php echo $annonce->getId_annonce(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer categorie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Voulez vous vraiment supprimer: <b><?php echo $annonce->getAn_libelle(); ?></b> 
    </br><small> Attention cette action est irréversible </small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <a href="?action=supprimerAnnonce&annonceId='<?php echo $annonce->getId_annonce(); ?>'">
        <button type="button" class="btn btn-primary">Supprimer</button>
        </a>
      </div>
    </div>
  </div>
</div>
        <?php
        echo "</tr>";
      }
    ?>
  </tbody>
</table>

</div>

<?php foreach($allAnnonce as $annonce):?>
 <?php $mb = 3;
 $c = 0;
 for($i=0; $i<3; $i++)
{


if($c == 0)


echo'
<div class="card-group  ">';
echo'

  <div class="card "><a href="./Vues/annonce/single_annonce.php?id='. $annonce->getId_annonce().'">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">'.
      $annonce->getId_annonce()
      .'</h5>
      <p class="card-text">'.$annonce->getAn_libelle().'</p>
      <p class="card-text">'.$annonce->getAn_prix().'</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">'.$annonce->getAn_date().'</small>
      </a> </div>
      <a href="./Vues/annonce/single_annonce2.php?id='. $annonce->getId_annonce().'">Lien</a>
  </div>';
  $c++;
  if($c == 3){
    echo'</div>';
    $c = 0;
  }
}
?>
<?php endforeach ?>
