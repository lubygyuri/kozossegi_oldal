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
$felhasznaloController = new FelhasznaloController();
$fenykepAlbumController = new FenykepAlbumController();

// Globális változók példányosítása
$fenykepAlbumok = array();

// Belépett felhasznaló megjelenítése
$bFelhasznalo = new Felhasznalo();
$bFelhasznalo->setEmail($_SESSION["email"]);

// Felhasználó megjelenítése
$felhasznalo = new Felhasznalo();
$felhasznaloFromDB = $felhasznaloController->getUserFromDB($_GET["profil"]);
$felhasznalo->setEmail($felhasznaloFromDB["EMAIL"]);
$felhasznalo->setVezeteknev($felhasznaloFromDB["VEZETEKNEV"]);
$felhasznalo->setKeresztnev($felhasznaloFromDB["KERESZTNEV"]);


if (isset($_POST["fenykepAlbumMegtekintes"]) || !empty($_GET["back"]) || isset($_POST["deleteFenykepAlbum"])){
    if (isset($_POST["deleteFenykepAlbum"])) {
        $fenykepAlbumController->deleteFenykepAlbumByAzonosito($_GET["fenykepAlbum"]);
    }

    $albumokFromDB = $fenykepAlbumController->getAllAlbumsBySessionEmail($_GET["profil"]);

    foreach ($albumokFromDB as $albumok) {
        $fenykepAlbum = new FenykepAlbum();
        $fenykepAlbum->setAzonosito($albumok["AZONOSITO"]);
        $fenykepAlbum->setNev($albumok["NEV"]);
        $fenykepAlbum->setTeljesMeret(round($fenykepAlbumController->getTotalAlbumSize($fenykepAlbum->getAzonosito()) / 1000000, 2));
        $fenykepAlbum->setFelhasznaloAzonosito($albumok["FELHASZNALO_AZONOSITO"]);
        $fenykepAlbum->setKepekSzama($fenykepAlbumController->getNumberOfPicturesInAlbum($fenykepAlbum->getAzonosito()));
        array_push($fenykepAlbumok, $fenykepAlbum);
    }

    $smarty->assign("fenykepAlbumok", $fenykepAlbumok);
    $smarty->assign("felhasznalo", $felhasznalo);
    $smarty->assign("belepettFelhasznalo", $bFelhasznalo);
    $smarty->display("fenykepAlbum.tpl");
} else {
    header("Location: profil.php?email=".$_SESSION["email"]);
}

