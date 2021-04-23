<?php

include_once 'includes/classAutoLoad.php';
include_once 'includes/controllerAutoLoad.php';

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
//    TODO: alapértelmezett profilkép beállítása
    $felhasznalo->setProfilkep("style/defaultprof.jpg");

    $jelszoIsmet = $_POST['password-secure'];

    $validation = new ValidatorController();
    $errors = $validation->validateRegister($felhasznalo->getEmail(), $felhasznalo->getJelszo(), $jelszoIsmet);

    if (count($errors) == 0) {
        $controller = new FelhasznaloController();
        $controller->registration($felhasznalo);
//        TODO: smarty hülyeségtől megválni
        $smarty->assign("errors", $errors);
        $smarty->display("index.tpl");
//        TODO: Sikeres regisztráció üzenet megjelenítése
        exit();
    }

    $smarty->assign("errors", $errors);
    $smarty->display("index.tpl");
    exit();
} else {
    $smarty->display("index.tpl");
    exit();
}