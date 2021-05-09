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
$kommentController = new KommentController();
$felhasznaloController = new FelhasznaloController();


$komm = new Komment();
$komm->setBejegyzesAzonosito($_GET['id']);
$komm->setUzenet($_GET['text']);
$komm->setFelhasznaloAzonosito($_SESSION["email"]);
$kommentController->createKomment($komm);


$kommentData = $kommentController->getKommentByBejegyzes($_GET['id']);
$komment = array();
if ($kommentData != null) {
    foreach ($kommentData as $komData) {
        $komm = new Komment();
        $komm->setAzonosito($komData["AZONOSITO"]);
        $komm->setUzenet($komData["UZENET"]);
        $user1 = $felhasznaloController->getUserFromDB($komData["FELHASZNALO_AZONOSITO"]);
        $felhasznalo1 = new Felhasznalo();
        $felhasznalo1->setProfilkep($user1['PROFILKEP']);
        $felhasznalo1->setVezeteknev($user1['VEZETEKNEV']);
        $felhasznalo1->setKeresztnev($user1['KERESZTNEV']);
        $komm->setFelhasznaloAzonosito($felhasznalo1);
        array_push($komment, $komm);
    }
}

$smarty->assign("kommentek",$komment);
$smarty->assign("azonosito",$_GET['id']);

$smarty->display('kommentek.tpl');





