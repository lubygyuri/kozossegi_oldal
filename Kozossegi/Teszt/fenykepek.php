<?php
require '../libs/Smarty.class.php';
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';
$smarty = new Smarty;

session_start();

if (!isset($_SESSION["email"])) {
    header("Location: index.php");
    exit();
}

// Controllerek példányosítása
$kepController = new KepController();
$fenykepAlbumController = new FenykepAlbumController();
$felhasznaloController = new FelhasznaloController();

// Globális változók
$fenykepek = array();

// Belépett felhasznaló
$belepettFelhasznalo = new Felhasznalo();
$belepettFelhasznalo->setEmail($_SESSION["email"]);

// Nézett felhasznaló
$nezettFelhasznalo = new Felhasznalo();
$nezettFelhasznalo->setEmail($_GET["profil"]);

// Fénykép feltöltés
if (isset($_POST["fenykepFeltoltes"])) {
    $respArray = $kepController->kepFeltoltesMerettel('fenykep');

    $kep = new Fenykep();
    $kep->setKep($respArray[0]); // link
    $kep->setMeret($respArray[1]); // méret
    $kep->setFenykepAlbumAzonosito($_GET["fenykepAlbum"]);

    $kepController->fenykepCreateInDatabase($kep);
}

// Fényképek listázása
if (isset($_GET["fenykepAlbum"])) {
    $pictures = $kepController->getAllFenykepByFenykepAlbum($_GET["fenykepAlbum"]);

    foreach ($pictures as $pic) {
        $p = new Fenykep();
        $p->setKep($pic["KEP"]);
        array_push($fenykepek, $p);
    }
}

// Aktuális album
$recentAlbum = new FenykepAlbum();
$recentAlbum->setAzonosito($_GET["fenykepAlbum"]);
$recentAlbum->setNev($fenykepAlbumController->getFenykepAlbumNev($_GET["fenykepAlbum"])["NEV"]);

$smarty->assign("belepettFelhasznalo", $belepettFelhasznalo);
$smarty->assign("nezettFelhasznalo", $nezettFelhasznalo);
$smarty->assign("recentAlbum",$recentAlbum);
$smarty->assign("fenykepek", $fenykepek);
$smarty->display("fenykepek.tpl");