<?php

class Patisserie {

    //attributs

protected $poids = "500";
protected $note = 0;
protected $prix= 0;

//methodes
public function __construct($poids,$note,$prix){
    $this->poids=$poids;
    $this->note=$note;
    $this->prix=$prix;
}

public function presenterPatisserie(){
return "<br> Présentation de la patisserie" . $this->poids . "g" . $this->note . 5 ."/5" . $this->prix . "€";
}

public function setPoids ($poids) {
    $this->poids=$poids;
}
public function setPrix ($prix) {
    $this->prix=$prix;
}
public function setNote ($note) {
    $this->prix=$note;
    
}
}
?>