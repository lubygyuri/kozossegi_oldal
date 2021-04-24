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

// Profilkép feltöltése
if (isset($_POST['profileImgUpload'])) {
    $image = base64_encode(file_get_contents($_FILES['profileImg']['tmp_name']));

    $options = array('http'=>array(
        'method'=>"POST",
        'header'=>"Authorization: Bearer b94ae91d008b3dea84bafd56d9be06a1c8790c60\n".
            "Content-Type: application/x-www-form-urlencoded",
        'content'=>$image
    ));

    $context = stream_context_create($options);

    $imgurURL = "https://api.imgur.com/3/image";

    if ($_FILES['profileImg']['size'] > 10240000) {
        die("A kép túl nagy, maximum 10MB lehet.");
    }

    $response = file_get_contents($imgurURL, false, $context);

    $response = json_decode($response);

    $controller->updateProfileImg($response->data->link ,$_SESSION["azonosito"]);
    $_SESSION["profilkep"] = $response->data->link;
}

// Profil adatainak megváltoztatása
if (isset($_POST["save"])) {
    $mentendoFelhasznalo = new Felhasznalo();
    $mentendoFelhasznalo->setAzonosito($_SESSION["azonosito"]);
    $mentendoFelhasznalo->setVezeteknev($_POST["firstname"]);
    $mentendoFelhasznalo->setKeresztnev($_POST["lastname"]);
    $mentendoFelhasznalo->setNeme($_POST["gender"]);
    $mentendoFelhasznalo->setIskola($_POST["school"]);
    $mentendoFelhasznalo->setMunkahely($_POST["job"]);
    $controller->updateProfile($mentendoFelhasznalo);
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

