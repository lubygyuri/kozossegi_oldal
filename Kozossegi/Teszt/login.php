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
        $user_id = $controller->login($felhasznalo);

//        TODO: session implementation
        session_start();
        $_SESSION["azonosito"] = $user_id;

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
