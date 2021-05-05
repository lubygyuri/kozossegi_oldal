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
$uzenetController = new UzenetController();

// Barátok listázása
$ismerosok = array();
$baratok = array();
$ismeros = new Ismeros();
$uzenetekResult = array();
$ismeros->setStatusz("friends");
$ismeros->setFelhasznalo1($_SESSION["email"]);
$friends = $ismerosController->listFriends($ismeros);

for ($x = 0; $x < count($friends); $x++) {
    array_push($baratok, $felhasznaloController->getUserFromDB($friends[$x]["FELHASZNALO2"]));
}

foreach ($baratok as $barat) {
    $b = new Felhasznalo();
    $b->setEmail($barat["EMAIL"]);
    $b->setVezeteknev($barat["VEZETEKNEV"]);
    $b->setKeresztnev($barat["KERESZTNEV"]);
    $b->setProfilkep($barat["PROFILKEP"]);
    array_push($ismerosok, $b);
}

// Üzenetek lekérése
if (isset($_GET["profil"])) {
    $uzenetek = $uzenetController->getUzenetekForSelectedUser($_SESSION["email"], $_GET["profil"]);

    foreach ($uzenetek as $uzenet) {
        $newUzenet = new Uzenet();
        $newUzenet->setAzonosito($uzenet["AZONOSITO"]);
        $newUzenet->setUzenet($uzenet["UZENET"]);
        $newUzenet->setKuldoAzonosito($uzenet["KULDO_AZONOSITO"]);
        $newUzenet->setFogadoAzonosito($uzenet["FOGADO_AZONOSITO"]);
        $newUzenet->setKuldesIdeje($uzenet["KULDES_IDEJE"]);
        $newUzenet->setKep($uzenet["KEP"]);
        array_push($uzenetekResult, $newUzenet);
    }
}

// Bejelentkezett felhasználó megjelenítése
$bejelentkezettF = new Felhasznalo();
$bejelentkezettF->setEmail($_SESSION["email"]);
$bejelentkezettF->setProfilkep($_SESSION["profilkep"]);
$bejelentkezettF->setKeresztnev($_SESSION["keresztnev"]);
$bejelentkezettF->setVezeteknev($_SESSION["vezeteknev"]);

$smarty->assign("uzenetek", $uzenetekResult);
$smarty->assign("profil", (!empty($_GET["profil"]) ? $_GET["profil"] : null));
$smarty->assign("friendsList", $ismerosok);
$smarty->assign("belepettFelhasznalo", $bejelentkezettF);
$smarty->display('uzenetek.tpl');
