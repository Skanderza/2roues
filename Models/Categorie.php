<?php
require_once 'Model.php';
class Categorie extends Model{

    private $id_categorie;
    private $ca_libelle;

  
    public function getId_categorie()
    {
        return $this->id_categorie;
    }

    public function getCa_libelle()
    {
        return $this->ca_libelle;
    }

    public function setCa_libelle($ca_libelle)
    {
      return  $this->ca_libelle = $ca_libelle;

    }

    
}
?>