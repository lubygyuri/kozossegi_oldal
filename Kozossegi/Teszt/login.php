<?php
include_once 'includes/classAutoLoad.php';
include_once 'includes/daoAutoLoad.php';

require '../libs/Smarty.class.php';
$smarty = new Smarty;

if(isset($_POST["submit"])){
    $felhasznalo = new Felhasznalo();
    $felhasznalo->setEmail($_POST["email"]);
    $felhasznalo->setJelszo($_POST["password"]);

//    TODO: Error handling

    $dao = new FelhasznaloDAO();
    $valid = $dao->login($felhasznalo);

    if (null == $valid) {
        $smarty->display("index.tpl");
        exit();
    }

//    TODO: session start
    $smarty->assign("keresztnev", $valid["KERESZTNEV"]);
    $smarty->assign("email", $valid["EMAIL"]);
    $smarty->assign("szuletesiDatum", $valid["SZULETESI_DATUM"]);
    $smarty->display("profil.tpl");
} else {
    $smarty->display("index.tpl");
    exit();
}
