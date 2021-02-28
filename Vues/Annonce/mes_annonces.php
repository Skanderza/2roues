<?php
if($monAnnonce == null){//Si pas d'annonces
echo'<div class="container"><div class="alert alert-danger" role="alert">
Vous n\'avez pas d\'annonce!
</div></div>';
}else{
?>
<div class="container">
<table class="table">
<thead>
  <h1>Mes annonces</h1>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Prix</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Modification</th>
      <th scope="col">Suppression</th>
    </tr>
  </thead>
<tbody>
    <?php
    
    foreach($monAnnonce as $annonce){
     
     for($i=0; $i<=count($monAnnonce2); $i++)
        echo "<tr>";
        echo "<td></td>";
        echo "<td>".$annonce->getAn_libelle()."</td>";
        echo "<td>".$annonce->getAn_prix()." €</td>";
        echo "<td>".$annonce->getAn_description()."</td>";
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
        <h5 class="modal-title" id="exampleModalLabel">Supprimer annonce</h5>
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
<?php
}
?>