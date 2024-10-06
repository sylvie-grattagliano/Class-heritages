<?php

    class Voiture {

        public $nom = "Ma Voiture";
        public $couleur = "bleu";
        public $vitesseMax = 260;
        public $vitesseActuelle = 0;
        public $poids = 1000;

        public function demarrer() {
            echo "Demarrage de la voiture<br/> ";
        }

        public function rouler() {
            echo "La voiture roule<br/>";
        }

        public function presenterVoiture() {
            echo "<br/> Presentation de la voiture " . $this->nom;
            echo "<br/> La voiture est : " . $this->couleur;
            echo "<br/> La voiture roule à  " . $this->vitesseActuelle . " avec un maximum de " . $this->vitesseMax;
            echo "<br/> La voiture pèse : " . $this->poids . " kg !";
        }

    }

?>