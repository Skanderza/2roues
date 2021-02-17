


  
<center><h2>Mes annonces</h2></center>


<div class="container">



<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Titre</th>
      <th scope="col">Prix</th>
      <th scope="col">Publié le</th>
      <th scope="col">description</th>
      <th scope="col">Contact</th>
      <th scope="col">etat</th>
      <th scope="col">Catégorie</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><?php echo $monAnnonce[0]->getAn_libelle();?></td>
      <td><?php echo $monAnnonce[0]->getAn_prix();?> €</td>
      <td><?php echo $monAnnonce[0]->getAn_date();?></td>
      <td><?php echo $monAnnonce[0]->getAn_description();?></td>
      <td><?php echo $monAnnonce[0]->getAn_telephone();?></td>
      <td><?php echo $monAnnonce[0]->getAn_etat();?></td>
      <td><?php echo $monAnnonce[0]->getId_categorie();?></td>
    </tr>
    
  </tbody>
</table>

</div>