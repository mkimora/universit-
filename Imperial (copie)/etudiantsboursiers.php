<?php
class Etudiantsboursiers extends Etudiant{
    private $libelle;
    



    public function __construct($matricule="",$nom="", $prenom="", $email="", $date_de_naissance="",$telephone="",$libelle="")
    {
        parent::__construct($matricule ,$nom, $prenom, $email, $date_de_naissance,$telephone);
        $this->libelle=$libelle;
        
    }
    public function getLibelle(){
        return $this->libelle;
    }
    public function setLibelle($libelle){
         $this->libelle = $libelle;
    }
    public function infos(){
        return parent::infos().", 
".$this->libelle ;  
    }
    





}

























?>