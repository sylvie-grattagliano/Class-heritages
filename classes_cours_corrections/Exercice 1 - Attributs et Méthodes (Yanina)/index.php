<?php
require("class.php");

$mon_outfit = new Outfit();
// $mon_outfit = outfit();
$mon_outfit->presenterOutfit();
//second habits
$mon_outfit-> modifOutfit("Jupe", "bleu", "S", 70, "occasion");
$mon_outfit->presenterOutfit();// tenue apres les modifs


$my_tea = new Tea();
$my_tea->presenterTea();
$my_tea->boire();
$my_tea->remplir();

?>