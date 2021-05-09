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
$ertesitesekController = new ErtesitesekController();

if (isset($_POST["ertesitest_torol"])) {
    $ertesitesekController->deleteErtesitesByAzonosito($_GET["ertesites_azonosito"]);
}

// Értesítések listázása
$ertesitesek = array();
$resultFromDb = $ertesitesekController->getErtesitesekByEmail($_SESSION["email"]);
foreach ($resultFromDb as $result) {
    $ertesites = new Ertesites();
    $ertesites->setAzonosito($result["AZONOSITO"]);
    $ertesites->setUzenet($result["UZENET"]);

    // Idő konvertálás
    $dt = DateTime::createFromFormat("d#M#y H#i#s*A", $result["ERTESITES_IDEJE"]);
    $fdt = $dt->format('m-d H:i');
    $ertesites->setErtesitesIdeje($fdt);

    $ertesites->setFelhasznaloAzonosito($result["FELHASZNALO_AZONOSITO"]);
    array_push($ertesitesek, $ertesites);
}

$smarty->assign("ertesitesek", $ertesitesek);
$smarty->display('ertesitesek.tpl');
