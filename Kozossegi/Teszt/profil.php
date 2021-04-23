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

// Profilhoz tartozó adatok lekérése
$controller = new FelhasznaloController();
$controller2 = new BejegyzesController();

$data = $controller->getUserFromDB($_SESSION["email"]);

$felhasznalo = new Felhasznalo();
$felhasznalo->setEmail($data["EMAIL"]);
$felhasznalo->setVezeteknev($data["VEZETEKNEV"]);
$felhasznalo->setKeresztnev($data["KERESZTNEV"]);
$felhasznalo->setSzuletesiDatum($data["SZULETESI_DATUM"]);
$felhasznalo->setNeme($data["NEME"]);
$felhasznalo->setIskola($data["ISKOLA"]);
$felhasznalo->setMunkahely($data["MUNKAHELY"]);
$felhasznalo->setProfilkep($data["PROFILKEP"]);


// Adott profil posztjainak lekérése
$userId = $data["AZONOSITO"];
$posts = array();
$postsData = $controller2->getPostsByUserId($userId);

if ($postsData) {
    foreach ($postsData as $postData) {
        $post = new Bejegyzes();
        $post->setAzonosito($postData["AZONOSITO"]);
        $post->setUzenet($postData["UZENET"]);
        $post->setLetrehozasDatuma($postData["LETREHOZAS_DATUMA"]);
        $post->setKep($postData["KEP"]);
        array_push($posts, $post);
    }
}

// TODO: likeok megjelenítése, trigger használata + bejegyzes táblába likeok számának felvétele
// TODO: kommentek lekérése
// TODO: modell kiegészítése a likeok és a kommentek adattagokkal
// SELECT count(*) FROM FELHASZNALO, BEJEGYZES, BEJEGYZES_LIKE
// WHERE bejegyzes.felhasznalo_azonosito = felhasznalo.azonosito
// AND bejegyzes_like.bejegyzes_azonosito = bejegyzes.azonosito
// AND felhasznalo.azonosito = 1
// AND bejegyzes.azonosito = 1

$smarty->assign("bejegyzesek", $posts);
$smarty->assign("felhasznalo", $felhasznalo);
$smarty->display('profil.tpl');

