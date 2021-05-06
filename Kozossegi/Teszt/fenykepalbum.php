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

if (isset($_POST["letrehozFenykepAlbum"])) {
    $fenykepAlbumController->createFenykepAlbum($_POST["fenykepAlbumNev"], $_SESSION["email"]);
}

header("Location: profil.php?email=".$_SESSION["email"]);
