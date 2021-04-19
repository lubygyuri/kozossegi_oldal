<?php
require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();

if (!isset($_SESSION["azonosito"])){
//    TODO: smarty errors megoldása
    $smarty->assign("errors", null);
    $smarty->display("index.tpl");
    exit();
}

$smarty->display('profil.tpl');