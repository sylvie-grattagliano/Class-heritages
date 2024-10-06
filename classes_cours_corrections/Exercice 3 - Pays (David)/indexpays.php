<?php

require("classpays.php");

$pays1 = new Pays();
$pays1 -> initialiserPays("Malaisie", "Asie", 33000, 4.2105, 101.9758);
$pays1 -> presenterPays();

$pays2 = new Pays();
$pays2 -> initialiserPays("Argentine", "Amérique du Sud", 46000, -38.4161, -63.6167);
$pays2 -> presenterPays();

$pays3 = new Pays();
$pays3 -> initialiserPays("Norvège", "Europe", 55000, 60.4720, 8.4689);
$pays3 -> presenterPays();

$pays4 = new Pays();
$pays4 -> initialiserPays("Mozambique", "Afrique", 38000, -18.6657, 35.5296);
$pays4 -> presenterPays();

$pays5 = new Pays();
$pays5 -> initialiserPays("Nouvelle-Zélande", "Océanie", 50000, -40.9006, 174.8860);
$pays5 -> presenterPays();

echo "<br/><br/>Les 5 pays ont bien étés créés !<br/>";

$pays3 -> migration($pays5, 6000);
$pays3 -> presenterPays();
$pays5 -> presenterPays();

$pays4 -> decroissancePopulation(6000);
$pays5 -> croissancePopulation(7000);
$pays4 -> presenterPays();
$pays5 -> presenterPays();
?>
