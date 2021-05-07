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

// Csoport létrehozása
if (isset($_POST["csoportLetrehozas"])) {
    $csoportController->createCsoport($_POST["csoportNev"], $_SESSION["email"]);
}

// Csoport üzenet küldése
if (isset($_POST["sendMessage"])) {
    $csoportUzenet = new CsoportUzenet();
    $csoportUzenet->setUzenet($_POST["csoportMessageInp"]);
    $csoportUzenet->setKuldoAzonosito($_SESSION["email"]);
    $csoportUzenet->setCsoportAzonosito($_GET["csoportAzonosito"]);
    $csoportController->createMessage($csoportUzenet);
}

// Csoportok listázása amikben benne van a belépett felhazsnáló


// Belépett felhasználó
$bejelentkezettFelhasznalo = new Felhasznalo();
$bejelentkezettFelhasznalo->setEmail($_SESSION["email"]);
$bejelentkezettFelhasznalo->setVezeteknev($_SESSION["vezeteknev"]);
$bejelentkezettFelhasznalo->setKeresztnev($_SESSION["keresztnev"]);
$bejelentkezettFelhasznalo->setProfilkep($_SESSION["profilkep"]);

$smarty->assign("belepettFelhasznalo", $bejelentkezettFelhasznalo);
$smarty->display("csoportok.tpl");
