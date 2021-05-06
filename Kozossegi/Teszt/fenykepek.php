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
$kepController = new KepController();
$fenykepAlbumController = new FenykepAlbumController();

// Globális változók
$fenykepek = array();

// TODO: kijavítani
if (isset($_POST["fenykepFeltoltes"])) {
    $respArray = $kepController->kepFeltoltesMerettel('fenykep');

    $kep = new Fenykep();
    $kep->setKep($respArray[0]); // link
    $kep->setMeret($respArray[1]); // méret
    $kep->setFenykepAlbumAzonosito($_GET["fenykepAlbum"]);

    $kepController->fenykepCreateInDatabase($kep);
}

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

$smarty->assign("recentAlbum",$recentAlbum);
$smarty->assign("fenykepek", $fenykepek);
$smarty->display("fenykepek.tpl");