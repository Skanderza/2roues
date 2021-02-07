<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">Modification</th>
      <th scope="col">Suppression</th>
    </tr>
  </thead>
<tbody>
    <?php
    foreach($allCategorie as $categorie){
        echo "<tr>";
        echo "<td>".$categorie->getId_categorie()."</td>";
        echo "<td>".$categorie->getCa_libelle()."</td>";
        echo "<td><a href='?action=modifierCategorie&categorieId=".$categorie->getId_categorie()."'><img src='./Ressources/img/edit.png' width='20'></a></td>";
       ?>
       <!-- Button trigger modal -->
<td><img src='./Ressources/img/delete.png' width='20'  data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $categorie->getId_categorie(); ?>">
  
    </td>

<!-- Modal -->
<div class="modal fade" id="exampleModal-<?php echo $categorie->getId_categorie(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer categorie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Voulez vous vraiment supprimer: <b><?php echo $categorie->getCa_libelle(); ?></b> 
    </br><small> Attention cette action est irréversible </small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <a href="?action=supprimerCategorie&categorieId='<?php echo $categorie->getId_categorie(); ?>'">
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
