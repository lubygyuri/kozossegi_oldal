<?php
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';

require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();

if (!isset($_SESSION["email"])) {
    header("Location: index.php");
    exit();
}

// Controllerek példányosítása
$KlubController = new KlubController();

// Globális változók
$klub_nev = $_GET["nev"];
$klub_1 = new Klub();


if(isset($_POST['csatlakozas_submit'])){
    $KlubController->createKlubTag($_GET["nev"],$_SESSION['email']);
}
if(isset($_POST['kilepes_submit'])){
    $KlubController->deleteKlubTag($_GET["nev"],$_SESSION['email']);
}
$data = $KlubController->getKlub($klub_nev);
$klub_1 -> setNev($data["NEV"]);
$klub_1 -> setAdminFelhasznalo($data["ADMIN_FELHASZNALO"]);
$klub_1 -> setLathatosag($data["LATHATOSAG"]);
$klub_1 -> setLeiras($data["LEIRAS"]);
$klub_1 -> setLetrehozasDatuma($data["LETREHOZAS_DATUMA"]);

$klub_1->setTagok($KlubController->getKlubTagok($klub_1->getNev()));

$aktualis_user_tag=$KlubController->getKlubTag($klub_1->getNev(),$_SESSION['email']);

if($aktualis_user_tag != null){
    $smarty -> assign("csatlakozva", true);
}else {
    $smarty -> assign("csatlakozva", false);
}

/*var_dump($klub_1);
die();*/
$smarty -> assign("klub", $klub_1);



//END
$smarty->display("klub_leirassal.tpl");