<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Telephone {
    private $marque = "";
    private $tailleEcran = 0;
    private $prix = 0;
    private $etat ="neuf";
    private $version =1;

    public function presentation() {
        echo 'Présentation du téléphone : il est de la marque ' . $this->getMarque() . ".  </br>";
        echo "Il dispose d'un écran de " . $this->getTailleEcran() . " pouces.  </br>";
        echo "Il est au prix de " . $this->getPrix() . " euros. </br>";
        echo "Il dispose de la version " . $this->getVersion() . ". </br> ";
        $this->etat = 'neuf';
        echo "Son état est " . $this->getEtat() . ".</br>";
    }

    public function vendre() {
        // $this->etat = 'occasion';
        $this->setEtat("occasion");
        echo "</br>Le téléphone est maintenant d'" . $this->etat . '.</br>';
        // $this->prix = $this->prix / 2; 
        $this->setPrix($this->prix /2);
        echo "Et le prix est maintenant de " . $this->prix . " euros.";
    }

    public function mettreAJour() {
        $this->version = $this->version + 1;
        echo 'La mise à jour a été faite, votre appareil est en version ' . $this->version;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function getTailleEcran() {
        return $this->tailleEcran;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function getVersion() {
        return $this->version;
    }

    public function setMarque($marque) {
        
        $marque=strval($marque);
        if (strlen($marque)<20)$this->marque = $marque;
    }

    public function setTailleEcran($tailleEcran) {
        
        $tailleEcran = floatval($tailleEcran);
        if ($tailleEcran > 0 && $tailleEcran<40)$this->tailleEcran = $tailleEcran;
    }

    public function setPrix($prix) {
        $prix = intval($prix);

        
    if ($prix > 0 && $prix < 10000)$this->prix = $prix;
    
    }

    public function setEtat($etat) {
        if($etat=="neuf" || $etat =='occasion')$this->etat = $etat;


    }

    public function setVersion($version) {
        
        $version = intval($version);
        if($version>$this->version && $version < 1000)$this->version = $version;
    }
}
?>