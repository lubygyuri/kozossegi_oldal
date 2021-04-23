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
        $user = $controller->login($felhasznalo);

        session_start();
        $_SESSION["email"] = $user["EMAIL"];
        $_SESSION["azonosito"] = $user["AZONOSITO"];
        $_SESSION["keresztnev"] = $user["KERESZTNEV"];
        $_SESSION["vezeteknev"] = $user["VEZETEKNEV"];
        $_SESSION["profilkep"] = $user["PROFILKEP"];

        header("Location: profil.php");
        exit();
    }

    $smarty->assign("errors", $errors);
    $smarty->display("index.tpl");
    exit();
} else {
    $smarty->display("index.tpl");
    exit();
}
