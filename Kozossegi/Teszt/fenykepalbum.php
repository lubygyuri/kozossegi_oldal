<?php
require '../libs/Smarty.class.php';
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';
$smarty = new Smarty;

session_start();

if (!isset($_SESSION["email"])){
//    TODO: smarty errors megoldása
    $smarty->assign("errors", null);
    $smarty->display("index.tpl");
    exit();
}

// Controllerek példányosítása
$fenykepAlbumController = new FenykepAlbumController();

// Globális változók példányosítása
$fenykepAlbumok = array();


// Bejelentkezett felhasználó megjelenítése
$bejelentkezettF = new Felhasznalo();
$bejelentkezettF->setEmail($_SESSION["email"]);
$bejelentkezettF->setVezeteknev($_SESSION["vezeteknev"]);
$bejelentkezettF->setKeresztnev($_SESSION["keresztnev"]);


if (isset($_POST["fenykepAlbumMegtekintes"]) || !empty($_GET["back"]) || isset($_POST["deleteFenykepAlbum"])){
    if (isset($_POST["deleteFenykepAlbum"])) {
        $fenykepAlbumController->deleteFenykepAlbumByAzonosito($_GET["fenykepAlbum"]);
    }

    $albumokFromDB = $fenykepAlbumController->getAllAlbumsBySessionEmail($_SESSION["email"]);

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
    $smarty->assign("belepettFelhasznalo", $bejelentkezettF);
    $smarty->display("fenykepAlbum.tpl");
} else {
    header("Location: profil.php?email=".$_SESSION["email"]);
}

