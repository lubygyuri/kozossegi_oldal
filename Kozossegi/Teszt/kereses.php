<?php
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';

require '../libs/Smarty.class.php';
$smarty = new Smarty;

// Controllerek példányosítása
$keresesController = new KeresesController();
$felhasznalok = array();

$keresesEredmeny = $keresesController->searchingUsers($_GET["search"]);
foreach ($keresesEredmeny as $aktualis) {
    $felhasznalo = new Felhasznalo();
    $felhasznalo->setVezeteknev($aktualis["VEZETEKNEV"]);
    $felhasznalo->setKeresztnev($aktualis["KERESZTNEV"]);
    array_push($felhasznalok, $felhasznalo);
}

$smarty->assign("keresesEredmeny",$felhasznalok);
$smarty->display("kereses.tpl");
