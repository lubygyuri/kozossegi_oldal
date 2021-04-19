<?php
include_once 'includes/classAutoLoad.php';
include_once 'includes/controllerAutoLoad.php';

require '../libs/Smarty.class.php';
$smarty = new Smarty;

if(isset($_POST["submit"])){
    $felhasznalo = new Felhasznalo();
    $felhasznalo->setEmail($_POST["email"]);
    $felhasznalo->setJelszo($_POST["password"]);

    $validation = new ValidatorController();
    $errors = $validation->validateLogin($felhasznalo->getEmail(), $felhasznalo->getJelszo());

    if (count($errors) == 0) {
        $controller = new FelhasznaloController();
        $controller->login($felhasznalo);
        //    TODO: session start
        $smarty->display("profil.tpl");
        exit();
    }

    $smarty->assign("errors", $errors);
    $smarty->display("index.tpl");
    exit();
} else {
    $smarty->display("index.tpl");
    exit();
}
