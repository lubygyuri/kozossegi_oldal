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

//Controllerek példányosítása
$ertesitesekController = new ErtesitesekController();

if (isset($_GET["ertesites_azonosito"])) {
//    TODO: törlés értesítés
}

//Értesítések listázása
$ertesitesek = array();
$resultFromDb = $ertesitesekController->getErtesitesekByEmail($_SESSION["email"]);
foreach ($resultFromDb as $result) {
    $ertesites = new Ertesites();
    $ertesites->setAzonosito($result["AZONOSITO"]);
    $ertesites->setUzenet($result["UZENET"]);
    $ertesites->setErtesitesIdeje($result["ERTESITES_IDEJE"]);
    $ertesites->setFelhasznaloAzonosito($result["FELHASZNALO_AZONOSITO"]);
    array_push($ertesitesek, $ertesites);
}

$smarty->assign("ertesitesek", $ertesitesek);
$smarty->display('ertesitesek.tpl');
