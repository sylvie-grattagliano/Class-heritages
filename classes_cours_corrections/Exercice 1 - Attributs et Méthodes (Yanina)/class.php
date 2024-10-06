<?php

class Outfit{
    //premiers habits
    public $type = "robe";
    public $couleur = "rose";
    public $taille = "M";
    public $prix = 50;
    public $etat = "Neuf";

 
    
    public function presenterOutfit() {
        echo "<br/> Presentation de la tenue: " . $this->type;
        echo "<br/> La tenue est : " . $this->couleur;
        echo "<br/> La tenue coute  " . $this->prix . "$ et est d'" . $this->etat;
        echo "<br/> Elle est disponible en taille  : " . $this->taille . " ^_^ <br>"; 
    }


    // public function outfit (){
    //     echo " <br/> Pas mal, pas mal </br>";
    // }
    
    public function modifOutfit($NouveauType, $NouveauCouleur, $NouveauTaille, $NouveauPrix, $NouveauEtat){
        $this->type = $NouveauType;
        $this->couleur = $NouveauCouleur;
        $this->taille =$NouveauTaille;
        $this->prix =$NouveauPrix;
        $this->etat =$NouveauEtat;

    }   
}







class Tea{
    public $quantite_actuelle =1;
    public $quantite_max =2;
    public $estChaud = true; // par defaut 

    public function presenterTea (){
        echo "<br/> Il y a " . $this->quantite_actuelle . " L actuellement.";
        echo "<br/> Il est possible d'avoir un max de " . $this->quantite_max ."L";
        echo "<br/> Le thé est il chaud? " . ($this->estChaud ? "Oui" : "Non");// en sessous je dis sil est chaud ou froid
    }

    public function boire() {
        if ($this->estChaud ) { //==true
            echo "<br/> Vous buvez du thé chaud.";
        } else {
            echo "<br/> Vous buvez thé froid.";
        }
        $this->quantite_actuelle = 0; 
        echo "<br/> Mais où est il passé ?!"; //tu as tout bu est maintenent y a r
}

    public function remplir(){
        if($this->quantite_actuelle == 0){ // la tasse est vraiment a 0 
            $this->quantite_actuelle = $this->quantite_max; // si tasse = 0 ca va remplir jusqu max
            echo "<br/> Tu as remplis la tasse de " .$this->quantite_max. "L de thé. Tu as vraiment très soif.";
            // $this->estChaud = true; // le the est chaud apres avoir ete rempli de nouveau
        }

    }
}
?>
