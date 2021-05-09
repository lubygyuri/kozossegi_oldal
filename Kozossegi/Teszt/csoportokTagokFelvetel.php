<?php
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';
require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();

if (!isset($_SESSION["email"])){
//    TODO: smarty errors megoldása
    $smarty->assign("errors", null);
    $smarty->display("index.tpl");
    exit();
}

// Controllerek példányosítása
$csoportController = new CsoportController();
$csoportTagok = array();

$csoportTagokFromDb = $csoportController->getAllMemberToAddGroup($_SESSION["email"], $_GET["groupId"]);

foreach ($csoportTagokFromDb as $cstfd) {
    $csoportTag = new Felhasznalo();
    $csoportTag->setEmail($cstfd["EMAIL"]);
    $csoportTag->setVezeteknev($cstfd["VEZETEKNEV"]);
    $csoportTag->setKeresztnev($cstfd["KERESZTNEV"]);
    array_push($csoportTagok, $csoportTag);
}

$smarty->assign("csoportTagok", $csoportTagok);
$smarty->display("csoportTagokFelvetel.tpl");
