<?php
class Type{
private $libelle;


public function __construct($libelle){
    $this->libelle = $libelle;
}

public function getLibelle(){
    return $this->libelle;
 }
 public function setLibelle($libelle){
     $this->libelle;
 }
 public function infos(){
    return parent::infos().", 
".$this->libelle ;  
}


}



















?>