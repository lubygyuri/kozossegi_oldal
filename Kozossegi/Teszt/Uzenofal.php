<?php
require '../libs/Smarty.class.php';
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';
$smarty = new Smarty;

session_start();

if (!isset($_SESSION["email"])){
//    TODO: smarty errors megoldása
    $smarty->assign("errors", null);
    $smarty->display("index.tpl");
    exit();
}

if(isset($_POST["submit"])) {
    $_SESSION["azonosito"];
    $bejegyzes = new Bejegyzes();
    $bejegyzes->setUzenet($_POST['text']);
    $bejegyzes->setFelhasznaloAzonosito($_SESSION["azonosito"]);
    $bejegyzes->setKep('');
    $controller = new BejegyzesController();
    $controller->createPost($bejegyzes);
}


$controller = new FelhasznaloController();
$controller2 = new BejegyzesController();
$posts = array();
$postsData = $controller2->getPostAll();

if ($postsData) {
    foreach ($postsData as $postData) {
        $post = new Bejegyzes();
        $post->setAzonosito($postData["AZONOSITO"]);
        $post->setUzenet($postData["UZENET"]);
        $post->setLetrehozasDatuma($postData["LETREHOZAS_DATUMA"]);
        $post->setKep($postData["KEP"]);
        $user =$controller->getFelhasznalo($postData["FELHASZNALO_AZONOSITO"]);
        $felhasznalo = new Felhasznalo();
        $felhasznalo->setProfilkep($user['PROFILKEP']);
        $felhasznalo->setVezeteknev($user['VEZETEKNEV']);
        $felhasznalo->setKeresztnev($user['KERESZTNEV']);
        $post->setFelhasznaloAzonosito($felhasznalo);

        array_push($posts, $post);
    }
}


$smarty->assign("bejegyzesek",$posts);


$smarty->display('Uzenofal.tpl');

