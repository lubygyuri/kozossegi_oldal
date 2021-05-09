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
$ertesitesController = new ErtesitesekController();
$ertesitesekSzama = $ertesitesController->getErtesitesekSzamaByEmail($_SESSION["email"]);

$smarty->assign("ertesitesekSzama", $ertesitesekSzama["COUNT(*)"]);
$smarty->display("ertesitesekSzama.tpl");
