<?php

class Pays {
    private $nom = "";
    private $continent = "";
    private $population = 0;
    private $lat = 0;
    private $long = 0; 

    public function initialiserPays($nom, $continent, $population, $lat, $long) {
        $nom = strval($nom);
        $continent = strval($continent);
        $population = intval($population);
        $lat = floatval($lat);
        $long = floatval($long);

        if (strlen($nom) < 20) $this -> nom = $nom;
        if (strlen($continent) < 20) $this -> continent = $continent;
        if ($population > 0 && $population < 1000000) $this -> population = $population;
        if ($lat > -180 && $lat < 180) $this -> lat = $lat;
        if ($long > -180 && $long < 180) $this -> long = $long;
    }

    public function getnom() {
        return $this -> nom;
    }
    public function getcontinent() {
        return $this -> continent;
    }
    public function getpopulation() {
        return $this -> population;
    }
    public function getlat() {
        return $this -> lat;
    }
    public function getlong() {
        return $this -> long;
    }

    public function presenterPays() {
        echo "<br/>". "Pays : ". $this -> getnom(). "<br/>";
        echo "Continent du pays : ". $this -> getcontinent(). "<br/>";
        echo "Population présente : ". $this -> getpopulation(). "<br/>";
        echo "Latitude : ". $this -> getlat(). "<br/>";
        echo "Longitude : ". $this -> getlong(). "<br/>";
    }

    public function croissancePopulation($rajout) {
        if (($this -> population + $rajout) > 1000000) {
            $this -> population = 1000000;
        } else {
            $this -> population += $rajout;
        }
        echo "Il y a maintenant ". $this -> population. " personnes dans la population". "<br/>";
    }

    public function decroissancePopulation($diminution) {
        if (($this -> population - $diminution) < 0) {
            $this -> population = 0;
        } else {
            $this -> population -= $diminution;
        }
        echo "Il reste ". $this -> population. " personnes dans la population". "<br/>";
    }

    public function migration($nouveauPays, $nombre) {
        if (($this -> population - $nombre) < 0) {
            $nombre = $this -> population;
        }
        $this -> population -= $nombre;
        $nouveauPays->croissancePopulation($nombre);
        echo $this -> population. " personnes de ". $this -> getnom(). ". ";
        echo $nombre. " ont migré vers ". $nouveauPays->getnom(). "<br/>";
    }
}

?>