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
$csoportController = new CsoportController();
// Globális változók
$csoportok = array();
$csoportUzenetek = array();
$latestGroupMessages = array();

// Belépett felhasználó
$bejelentkezettFelhasznalo = new Felhasznalo();
$bejelentkezettFelhasznalo->setEmail($_SESSION["email"]);
$bejelentkezettFelhasznalo->setVezeteknev($_SESSION["vezeteknev"]);
$bejelentkezettFelhasznalo->setKeresztnev($_SESSION["keresztnev"]);
$bejelentkezettFelhasznalo->setProfilkep($_SESSION["profilkep"]);

// Aktuális csoport
$recentCsoport = new Csoport();
$recentCsoport->setAzonosito(isset($_GET["csoportAzonosito"]) ? $_GET["csoportAzonosito"] : null);

// Csoport létrehozása
if (isset($_POST["csoportLetrehozas"])) {
    $csoportController->createCsoport($_POST["csoportNev"], $_SESSION["email"]);
}

// Csoport üzenet küldése
if (isset($_POST["sendMessage"]) && !empty($_POST["csoportMessageInp"])) {
    $csoportUzenet = new CsoportUzenet();
    $csoportUzenet->setUzenet($_POST["csoportMessageInp"]);
    $csoportUzenet->setKuldoAzonosito($bejelentkezettFelhasznalo->getEmail());
    $csoportUzenet->setCsoportAzonosito($recentCsoport->getAzonosito());
    $csoportController->createMessage($csoportUzenet);
}

// Csoportok listázása amikben benne van a belépett felhazsnáló
$csoportokFromDbWhereAdmin = $csoportController->getAllCsoportWhereAdmin($_SESSION["email"]);
$csoportokFromDbWhereGuest = $csoportController->getAllCsoportWhereGuest($_SESSION["email"]);

foreach ($csoportokFromDbWhereAdmin as $csoportFromDb) {
    $csoport = new Csoport();
    $csoport->setAzonosito($csoportFromDb["AZONOSITO"]);
    $csoport->setNev($csoportFromDb["NEV"]);
    $csoport->setAdminFelhasznalo($csoportFromDb["ADMIN_FELHASZNALO"]);
    array_push($csoportok, $csoport);
}

foreach ($csoportokFromDbWhereGuest as $csoportFromDb) {
    $csoport = new Csoport();
    $csoport->setAzonosito($csoportFromDb["AZONOSITO"]);
    $csoport->setNev($csoportFromDb["NEV"]);
    $csoport->setAdminFelhasznalo($csoportFromDb["ADMIN_FELHASZNALO"]);
    array_push($csoportok, $csoport);
}

// Adott csoportban lévő beszélgetés lekérése
$csoportUzenetekFromDb = $csoportController->getUzenetekForSelectedCsoport($recentCsoport->getAzonosito());

foreach ($csoportUzenetekFromDb as $csoportUzenetFromDb) {
    $csoportUzenet = new CsoportUzenet();
    $csoportUzenet->setAzonosito($csoportUzenetFromDb["AZONOSITO"]);
    $csoportUzenet->setUzenet($csoportUzenetFromDb["UZENET"]);

    // Idő konvertálás
    $dt = DateTime::createFromFormat("d#M#y H#i#s*A", $csoportUzenetFromDb["KULDES_IDEJE"]);
    $fdt = $dt->format('H:i');
    $csoportUzenet->setKuldesIdeje($fdt);

    $csoportUzenet->setKuldoAzonosito($csoportUzenetFromDb["KULDO_AZONOSITO"]);

    $nevek = $csoportController->getCsoportTag($csoportUzenet->getKuldoAzonosito());
    $csoportUzenet->setNev($nevek["VEZETEKNEV"]." ".$nevek["KERESZTNEV"]);

    $csoportUzenet->setCsoportAzonosito($csoportUzenetFromDb["CSOPORT_AZONOSITO"]);
    array_push($csoportUzenetek, $csoportUzenet);
}

// Legfrisebb csoport üzenetek és azok idejének lekérése
$latestMessagesFromDb = $csoportController->getLatestGroupMessagesByEmail();
foreach ($latestMessagesFromDb as $lmfdb) {
    $newLatestMessage = new CsoportUzenet();

    // Uzenet levágása
    $realUzenet = $lmfdb["UZENET"];
    if (strlen($realUzenet) > 20) {
        $subUzenet = substr($lmfdb["UZENET"], 0, 30)."...";
        $newLatestMessage->setUzenet($subUzenet);
    } else {
        $newLatestMessage->setUzenet($realUzenet);
    }

    // Idő konvertálás
    $dt = DateTime::createFromFormat("d#M#y H#i#s*A", $lmfdb["KULDES_IDEJE"]);
    $fdt = $dt->format('H:i');
    $newLatestMessage->setKuldesIdeje($fdt);

    $newLatestMessage->setKuldoAzonosito($lmfdb["KULDO_AZONOSITO"]);

    $latestNames = $csoportController->getCsoportTag($newLatestMessage->getKuldoAzonosito());
    $newLatestMessage->setNev($latestNames["VEZETEKNEV"]." ".$latestNames["KERESZTNEV"]);

    $newLatestMessage->setCsoportAzonosito($lmfdb["CSOPORT_AZONOSITO"]);

    array_push($latestGroupMessages, $newLatestMessage);
}

$smarty->assign("latestGroupMessages", $latestGroupMessages);
$smarty->assign("csoportUzenetek", $csoportUzenetek);
$smarty->assign("recentCsoport", $recentCsoport);
$smarty->assign("csoportok", $csoportok);
$smarty->assign("belepettFelhasznalo", $bejelentkezettFelhasznalo);
$smarty->display("csoportok.tpl");
