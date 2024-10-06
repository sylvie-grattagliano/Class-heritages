<?php

class Smartphone {
    private $marque = "";
    private $tailleEcran = 0;
    private $prix = 0;
    private $etat = "";
    private $version = 0;

    public function initialiserSmartphone($marque, $tailleEcran, $prix, $version) {
        $this -> marque = $marque;
        $this -> tailleEcran = $tailleEcran;
        $this -> prix = $prix;
        $this -> version = $version;
        $this -> etat = "neuf";
    }

    public function getMarque() {
        return $this -> marque;
    }
    public function getTailleEcran() {
        return $this -> tailleEcran;
    }
    public function getPrix() {
        return $this -> prix;
    }
    public function getEtat() {
        return $this -> etat;
    }
    public function getVersion() {
        return $this -> version;
    }

    public function presenterSmartphone() {
        echo "Marque: ". $this->getMarque(). "<br/>";
        echo "Taille de l'écran: ".  $this -> getTailleEcran(). " pouces<br/>";
        echo "Prix: ". $this->getPrix(). " €<br/>";
        echo "Etat: ". $this->getEtat(). "<br/>";
        echo "Version: ". $this->getVersion(). "<br/><br/>";
    }

    public function vendre() {
        if ($this->etat == "neuf") {
            $this->etat = "occas";
            $this->prix *= 0.5;
        }
    }

    public function mettreAJour() {
        return $this -> version += 1;
    }
}