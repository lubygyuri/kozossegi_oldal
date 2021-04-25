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

// Globális controllerek példányosítása
$controller = new FelhasznaloController();
$controller2 = new BejegyzesController();
$controller3 = new KepController();

// Profilkép feltöltése
if (isset($_POST['profileImgUpload'])) {
    $link = $controller3->kepFeltoltes('profileImg');
    $controller->updateProfileImg($link ,$_SESSION["email"]);
    $_SESSION["profilkep"] = $link;
}

// TODO: Labelek megvalósítása
// Profil adatainak megváltoztatása
if (isset($_POST["save"])) {
    $mentendoFelhasznalo = new Felhasznalo();
    $mentendoFelhasznalo->setEmail($_SESSION["email"]);
    $mentendoFelhasznalo->setVezeteknev($_POST["firstname"]);
    $mentendoFelhasznalo->setKeresztnev($_POST["lastname"]);
    $mentendoFelhasznalo->setNeme($_POST["gender"]);
    $mentendoFelhasznalo->setIskola($_POST["school"]);
    $mentendoFelhasznalo->setMunkahely($_POST["job"]);
    $controller->updateProfile($mentendoFelhasznalo);
}

// Bejegyzés közzététel
if(isset($_POST["createPost"])) {
    $bejegyzes = new Bejegyzes();
    $bejegyzes->setUzenet($_POST['text']);
    $bejegyzes->setFelhasznaloAzonosito($_SESSION["email"]);

//    TODO: Nem működik mert külső kulcsként kezeljük a képet, szerintem engedjük el (Gyuri)
    if ($_POST["postImg"]) {
        $bejegyzes->setKep($controller3->kepFeltoltes('postImg'));
    } else {
        $bejegyzes->setKep('');
    }

    $controller2->createPost($bejegyzes);
}

// Profilhoz tartozó adatok lekérése
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
$userEmail = $data["EMAIL"];
$posts = array();
$postsData = $controller2->getPostsByUserEmail($userEmail);

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
// WHERE bejegyzes.felhasznalo_azonosito = felhasznalo.email
// AND bejegyzes_like.bejegyzes_azonosito = bejegyzes.azonosito
// AND felhasznalo.email = example@example.com
// AND bejegyzes.azonosito = 1

$smarty->assign("bejegyzesek", $posts);
$smarty->assign("felhasznalo", $felhasznalo);
$smarty->display('profil.tpl');

