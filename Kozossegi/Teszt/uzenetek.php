<?php
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';
require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();

if (!isset($_SESSION["email"])){
//    TODO: smarty errors megoldása
    $smarty->assign("errors", null);
    $smarty->display("index.tpl");
    exit();
}

// Controllerek példányosítása
$felhasznaloController = new FelhasznaloController();
$ismerosController = new IsmerosController();

// Barátok listázása
$ismerosok = array();
$baratok = array();
$ismeros = new Ismeros();
$ismeros->setStatusz("friends");
$ismeros->setFelhasznalo1($_SESSION["email"]);
$friends = $ismerosController->listFriends($ismeros);

for ($x = 0; $x < count($friends); $x++) {
    array_push($baratok, $felhasznaloController->getUserFromDB($friends[$x]["FELHASZNALO2"]));
}

foreach ($baratok as $barat) {
    $b = new Felhasznalo();
    $b->setVezeteknev($barat["VEZETEKNEV"]);
    $b->setKeresztnev($barat["KERESZTNEV"]);
    $b->setProfilkep($barat["PROFILKEP"]);
    array_push($ismerosok, $b);
}

// Bejelentkezett felhasználó megjelenítése
$bejelentkezettF = new Felhasznalo();
$bejelentkezettF->setProfilkep($_SESSION["profilkep"]);
$bejelentkezettF->setKeresztnev($_SESSION["keresztnev"]);
$bejelentkezettF->setVezeteknev($_SESSION["vezeteknev"]);

$smarty->assign("friendsList", $ismerosok);
$smarty->assign("belepettFelhasznalo", $bejelentkezettF);
$smarty->display('uzenetek.tpl');
