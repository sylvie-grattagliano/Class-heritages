<?php

require("classsmart.php");

$smartphone1 = new Smartphone();
$smartphone1->initialiserSmartphone("Samsung Galaxy A14", 6.6, 199, 14);

$smartphone2 = new Smartphone();
$smartphone2->initialiserSmartphone("Samsung Galaxy S21 FE", 6.4, 599, 14);

$smartphone3 = new Smartphone();
$smartphone3->initialiserSmartphone("Samsung Galaxy Z Flip5", 6.7, 1199, 15);

$smartphone4 = new Smartphone();
$smartphone4->initialiserSmartphone("Samsung Galaxy S23 Ultra", 6.8, 1349, 15);

$smartphone5 = new Smartphone();
$smartphone5->initialiserSmartphone("Samsung Galaxy Z Fold5", 7.6, 1899, 15);
$smartphone5->vendre();
$smartphone5->mettreAJour();

$tabSmart = [$smartphone5, $smartphone2, $smartphone1, $smartphone4, $smartphone3];

$tabTrieParPrix = [];
while (count($tabSmart) > 0) 
{
    $min = $tabSmart[0];
    $indexMin = 0;

    foreach ($tabSmart as $key => $smartphone) {
        if ($smartphone->getPrix() < $min->getPrix()) {
            $min = $smartphone;
            $indexMin = $key;
        }
    }
    $tabTrieParPrix[] = $min;
    unset($tabSmart[$indexMin]);
    $tabSmart = array_values($tabSmart);
}

echo "Smartphones triés :<br/><br/>";
foreach ($tabTrieParPrix as $smartphone) {
    $smartphone->presenterSmartphone();
}
?>