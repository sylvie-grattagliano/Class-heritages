<?php 
require 'tel.php';

$iphon = new Telephone();

$iphon->setMarque('apple');
$iphon->setTailleEcran(17);
$iphon->setPrix(800);
$iphon->setEtat('neuf');
$iphon->setVersion(1);

$iphon->presentation();
$iphon->vendre();
$iphon->mettreAJour();
?>