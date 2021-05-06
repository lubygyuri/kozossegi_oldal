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

// Uzenetek kuldése
if (isset($_POST["sendMessage"])) {
    $createUzenet = new Uzenet();
    $createUzenet->setUzenet($_POST["messageInp"]);
    $createUzenet->setKuldoAzonosito($_SESSION["email"]);
    $createUzenet->setFogadoAzonosito($_GET["profil"]);
    $uzenetController->createMessage($createUzenet);
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

        // Idő konvertálás
        $dt = DateTime::createFromFormat("d#M#y H#i#s*A", $uzenet["KULDES_IDEJE"]);
        $fdt = $dt->format('H:i');
        $newUzenet->setKuldesIdeje($fdt);

        array_push($uzenetekResult, $newUzenet);
    }
}

// Legfrisebb üzenetek és azok idejének lekérése
$lMessages = array();
$latestMessages = $uzenetController->getLatestMessagesByEmail($_SESSION["email"]);
foreach ($latestMessages as $lm) {
    $newLatestMessage = new Uzenet();

    // Uzenet levágása
    $realUzenet = $lm["UZENET"];
    if (strlen($realUzenet) > 20) {
        $subUzenet = substr($lm["UZENET"], 0, 30)."...";
        $newLatestMessage->setUzenet($subUzenet);
    } else {
        $newLatestMessage->setUzenet($realUzenet);
    }

    // Idő konvertálás
    $dt = DateTime::createFromFormat("d#M#y H#i#s*A", $lm["KULDES_IDEJE"]);
    $fdt = $dt->format('H:i');
    $newLatestMessage->setKuldesIdeje($fdt);

    $newLatestMessage->setKuldoAzonosito($lm["KULDO_AZONOSITO"]);
    array_push($lMessages, $newLatestMessage);
}

// Bejelentkezett felhasználó megjelenítése
$bejelentkezettF = new Felhasznalo();
$bejelentkezettF->setEmail($_SESSION["email"]);
$bejelentkezettF->setProfilkep($_SESSION["profilkep"]);
$bejelentkezettF->setKeresztnev($_SESSION["keresztnev"]);
$bejelentkezettF->setVezeteknev($_SESSION["vezeteknev"]);


$smarty->assign("latestMessages", $lMessages);
$smarty->assign("uzenetek", $uzenetekResult);
$smarty->assign("profil", (!empty($_GET["profil"]) ? $_GET["profil"] : null));
$smarty->assign("friendsList", $ismerosok);
$smarty->assign("belepettFelhasznalo", $bejelentkezettF);
$smarty->display('uzenetek.tpl');
