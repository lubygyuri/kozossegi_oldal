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
$keresesController = new KeresesController();
$klubbok = array();

$keresesEredmeny = $keresesController->searchingKlub($_GET["search"]);
foreach ($keresesEredmeny as $aktualis) {
    $klub =new Klub();
    $klub->setNev($aktualis['NEV']);
    array_push($klubbok, $klub);
}


$smarty->assign("keresesEredmeny",$klubbok);
$smarty->display("klubKereses.tpl");

