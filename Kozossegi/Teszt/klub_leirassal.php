<?php
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';

require '../libs/Smarty.class.php';
$smarty = new Smarty;
$klub_nev = $_GET["nev"];
$KlubController = new KlubController();
$klub_1 = new Klub();
$data = $KlubController->getKlub($klub_nev);
$klub_1 -> setNev($data["NEV"]);
$klub_1 -> setAdminFelhasznalo($data["ADMIN_FELHASZNALO"]);
$klub_1 -> setLathatosag($data["LATHATOSAG"]);
$klub_1 -> setLeiras($data["LEIRAS"]);
$klub_1 -> setLetrehozasDatuma($data["LETREHOZAS_DATUMA"]);
$smarty -> assign("klub", $klub_1);




//END
$smarty->display("klub_leirassal.tpl");