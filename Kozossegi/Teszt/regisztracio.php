<?php

include_once 'includes/classAutoLoad.php';
include_once 'includes/daoAutoLoad.php';

require '../libs/Smarty.class.php';
$smarty = new Smarty;

if (isset($_POST["submit"])) {
    $felhasznalo = new Felhasznalo();

    $felhasznalo->setVezeteknev($_POST['firstname']);
    $felhasznalo->setKeresztnev($_POST['lastname']);
    $felhasznalo->setEmail($_POST['email']);
    $felhasznalo->setJelszo($_POST['password']);
    $felhasznalo->setSzuletesiDatum($_POST['birth-date']);
    $felhasznalo->setNeme($_POST['gender']);

    $dao = new FelhasznaloDAO();
    $dao->registration($felhasznalo);

    $smarty->display("profil.tpl");
} else {
    $smarty->display("index.tpl");
    exit();
}