<?php
require_once("class_patisserie.php");
//attributs
class Eclairs extends Patisserie
{
    protected $saveurCreme = "tiramitsu";
    protected $saveurGlacage = "café";
    protected $longueur = 15;

    // methodes
    public function __construct($poids,$note,$prix,$saveurCreme,$saveurGlacage,$longueur){
parent:: __construct($poids,$note,$prix);
    $this->saveurCreme=$saveurCreme;
    $this->saveurGlacage=$saveurglacage;
    $this->longueur=$longueur;
    }
public function afficherEclair(){

    return "Eclair -Poids:"
}

        
        
    

    
