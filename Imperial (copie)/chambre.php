<?php
class Chambre extends Batiment{
    private $number;


public function __construct($nom_bat,$number){
    parent::__construct($nom_bat);
    $this->number=$number;
}


public function getNumber(){
    return $this->number;
}

public function setNumber(){
   $this->number;
}

public function infos(){
   return parent::infos().",
   ".$this->number;

}









}
