

<?php
  if(!isset($_SESSION)){

  }?>


</br></br></br></br>
<div class="container bg-light">
<fieldset class="border p-2">
   <legend  class="w-auto"><center><h3><?= $monAnnonce[0]['ut_nom']?></h3></center></legend>

<table class="table">

  <tbody>
  <tr>
      <th scope="row">Catégorie</th>
      <td><?= $monAnnonce[0]['ca_libelle']?></td>
    </tr>
    <tr>
      <th scope="row">Description</th>
      <td><?= $monAnnonce[0]['an_description']?></td>
    </tr>
    <tr>
      <th scope="row">Etat</th>
      <td><?= $monAnnonce[0]['an_etat']?></td>
    </tr>
    <tr>
      <th scope="row">Prix</th>
      <td><?= $monAnnonce[0]['an_prix']." "."€"?></td>
    </tr>
    <tr>
      <th scope="row">Publié par</th>
      <td><?= $monAnnonce[0]['ut_nom']?></td>
    </tr>
    <tr>
      <th scope="row">Contact</th>
      <td><?= $monAnnonce[0]['an_telephone']?></td>
    </tr>
    
    <tr>
      <th scope="row">Publié le</th>
      <td><?= $monAnnonce[0]['an_date']?></td>
    </tr>

    
  </tbody>
</table>
</fieldset>
</div>
