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


// Bejegyzés közzététel
if(isset($_POST["submit"])) {
    $bejegyzes = new Bejegyzes();
    $bejegyzes->setUzenet($_POST['text']);
    $bejegyzes->setFelhasznaloAzonosito($_SESSION["email"]);
    $bejegyzes->setKep('');
    $felhasznaloController = new BejegyzesController();
    $felhasznaloController->createPost($bejegyzes);
}

// Bejegyzések listázása
$felhasznaloController = new FelhasznaloController();
$bejegyzesController = new BejegyzesController();
$posts = array();
$postsData = $bejegyzesController->getPostAll();

if ($postsData) {
    foreach ($postsData as $postData) {
        $post = new Bejegyzes();
        $post->setAzonosito($postData["AZONOSITO"]);
        $post->setUzenet($postData["UZENET"]);
        $post->setLetrehozasIdeje($postData["LETREHOZAS_DATUMA"]);
        $post->setKep($postData["KEP"]);
        $user =$felhasznaloController->getUserFromDB($postData["FELHASZNALO_AZONOSITO"]);
        $felhasznalo = new Felhasznalo();
        $felhasznalo->setProfilkep($user['PROFILKEP']);
        $felhasznalo->setVezeteknev($user['VEZETEKNEV']);
        $felhasznalo->setKeresztnev($user['KERESZTNEV']);
        $post->setFelhasznaloAzonosito($felhasznalo);

        array_push($posts, $post);
    }
}

// Bejelentkezett felhasználó megjelenítése
$bejelentkezettF = new Felhasznalo();
$bejelentkezettF->setProfilkep($_SESSION["profilkep"]);
$bejelentkezettF->setKeresztnev($_SESSION["keresztnev"]);
$bejelentkezettF->setVezeteknev($_SESSION["vezeteknev"]);


$smarty->assign("bejegyzesek",$posts);
$smarty->assign("belepettFelhasznalo", $bejelentkezettF);

$smarty->display('klub.tpl');

