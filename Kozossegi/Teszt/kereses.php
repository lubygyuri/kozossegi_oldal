<?php
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';

require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();

// Controllerek példányosítása
$keresesController = new KeresesController();
$felhasznalok = array();

if (isset($_GET["barat"])){
    $keresesEredmeny = $keresesController->searchingFriends($_GET["search"], $_SESSION["email"]);
    foreach ($keresesEredmeny as $aktualis) {
        $felhasznalo = new Felhasznalo();
        $felhasznalo->setVezeteknev($aktualis["VEZETEKNEV"]);
        $felhasznalo->setKeresztnev($aktualis["KERESZTNEV"]);
        $felhasznalo->setEmail($aktualis["EMAIL"]);
        array_push($felhasznalok, $felhasznalo);
    }
    $smarty->assign("keresesEredmeny",$felhasznalok);
    $smarty->display("baratKereses.tpl");
}else{
    $keresesEredmeny = $keresesController->searchingUsers($_GET["search"]);
    foreach ($keresesEredmeny as $aktualis) {
        $felhasznalo = new Felhasznalo();
        $felhasznalo->setVezeteknev($aktualis["VEZETEKNEV"]);
        $felhasznalo->setKeresztnev($aktualis["KERESZTNEV"]);
        $felhasznalo->setEmail($aktualis["EMAIL"]);
        array_push($felhasznalok, $felhasznalo);
    }
    $smarty->assign("keresesEredmeny",$felhasznalok);
    $smarty->display("kereses.tpl");
}



