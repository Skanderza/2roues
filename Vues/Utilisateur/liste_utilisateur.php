<button type="button" class="btn btn-primary">
Nombre utilisateurs <span class="badge bg-warning">
  <?php
    echo $nbUtilisateur;
  ?>
  </span>
</button>
<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">MDP</th>
      <th scope="col">Modification</th>
      <th scope="col">Suppression</th>
    </tr>
  </thead>
  <tbody>
<?php
 foreach($allUtilisateur as $utilisateur){

    echo "<tr>";
    echo "<td>".$utilisateur->getId_utilisateur()."</td>";
    echo "<td>".$utilisateur->getUT_nom()."</td>";
    echo "<td>".$utilisateur->getUt_email()."</td>";
    echo "<td>".$utilisateur->getUt_mdp()."</td>";
    echo "<td><a href='?action=modifierUtilisateur&utilisateurId=".$utilisateur->getId_utilisateur()."'><img src='./Ressources/img/edit.png' width='30'></a>
        </td>";
?>
        <!-- Button trigger modal -->
    
        <td><img src='./Ressources/img/delete.png' width='20'  data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $utilisateur->getId_utilisateur(); ?>"></td>
        <!-- Modal -->
<div class="modal fade" id="exampleModal-<?php echo $utilisateur->getId_utilisateur(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer utilisateur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Voulez vous vraiment supprimer: <b><?php echo $utilisateur->getUt_nom(); ?></b> 
    </br><small> Attention cette action est irréversible </small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <a href="?action=supprimerUtilisateur&utilisateurId='<?php echo $utilisateur->getId_utilisateur(); ?>'">
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
        
       
 

 
  </tbody>
</table>