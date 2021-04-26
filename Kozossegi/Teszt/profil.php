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
$felhasznaloController = new FelhasznaloController();
$bejegyzesController = new BejegyzesController();
$kepController = new KepController();
$likeController = new LikeController();
$kommentController = new KommentController();

// Profilkép feltöltése
if (isset($_POST['profileImgUpload'])) {
    $link = $kepController->kepFeltoltes('profileImg');

    if (!$link == '') {
        $_SESSION["profilkep"] = $link;
        $felhasznaloController->updateProfileImg($link ,$_SESSION["email"]);
    }
}

// Profil adatainak megváltoztatása
if (isset($_POST["save"])) {
    $mentendoFelhasznalo = new Felhasznalo();
    $mentendoFelhasznalo->setEmail($_SESSION["email"]);
    $mentendoFelhasznalo->setVezeteknev($_POST["firstname"]);
    $mentendoFelhasznalo->setKeresztnev($_POST["lastname"]);
    $mentendoFelhasznalo->setNeme($_POST["gender"]);
    $mentendoFelhasznalo->setIskola($_POST["school"]);
    $mentendoFelhasznalo->setMunkahely($_POST["job"]);
    $felhasznaloController->updateProfile($mentendoFelhasznalo);
}

// Bejegyzés közzététel
if(isset($_POST['createPost'])) {
    $link = $kepController->kepFeltoltes('postImage');
    $bejegyzes = new Bejegyzes();
    $bejegyzes->setUzenet($_POST['text']);
    $bejegyzes->setFelhasznaloAzonosito($_SESSION["email"]);
    $bejegyzes->setKep($link);
    $bejegyzesController->createPost($bejegyzes);
}

// Profilhoz tartozó adatok lekérése
$data = $felhasznaloController->getUserFromDB($_SESSION["email"]);

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
$postsData = $bejegyzesController->getPostsByUserEmail($userEmail);

if ($postsData) {
    foreach ($postsData as $postData) {
        $post = new Bejegyzes();
        $post->setAzonosito($postData["AZONOSITO"]);
        $post->setUzenet($postData["UZENET"]);
        $post->setLetrehozasIdeje($postData["LETREHOZAS_IDEJE"]);
        $post->setFelhasznaloAzonosito($postData["FELHASZNALO_AZONOSITO"]);
        $post->setKep($postData["KEP"]);

//        Likeolta-e már a bejelentkezett felhasználó a posztot
        $like = new Like();
        $like->setBejegyzesAzonosito($post->getAzonosito());
        $like->setFelhasznaloAzonosito($_SESSION["email"]);
        if (!$likeController->isPostLiked($like)) {
            $post->setIsLiked(false);
        } else {
            $post->setIsLiked(true);
        }
        // kommentek
        $kommentData = $kommentController->getKommentByBejegyzes($postData["AZONOSITO"]);
        $komment = array();
        if ($kommentData !=null) {
            foreach ($kommentData as $komData) {
                $komm = new Komment();
                $komm->setAzonosito($komData["AZONOSITO"]);
                $komm->setUzenet($komData["UZENET"]);
                $user1 = $felhasznaloController->getUserFromDB($komData["FELHASZNALO_AZONOSITO"]);
                $felhasznalo1 = new Felhasznalo();
                $felhasznalo1->setProfilkep($user1['PROFILKEP']);
                $felhasznalo1->setVezeteknev($user1['VEZETEKNEV']);
                $felhasznalo1->setKeresztnev($user1['KERESZTNEV']);
                $komm->setFelhasznaloAzonosito($felhasznalo1);
                array_push($komment, $komm);
            }
        }
        $post->setKommentek($komment);

        array_push($posts, $post);
    }
}

// Bejegyzés likeolása
if (isset($_POST["likePost"])) {
    $like = new Like();
    $likedPost = new Bejegyzes();
    $like->setBejegyzesAzonosito($_POST["bejegyzesAzonosito"]);
//    Azért session email, mert arra vagyunk kíváncsiak, hogy aki be van jelentkezve annak hogy látszik a likeolása
    $like->setFelhasznaloAzonosito($_SESSION["email"]);
    $likedPost->setAzonosito($_POST["bejegyzesAzonosito"]);

    if (!$likeController->alreadyLikedPost($like)) {
        $bejegyzesController->updateLikesOnBejegyzes($likedPost);
        $likeController->increaseBejegyzesLike($like);
    } else {
        $bejegyzesController->deleteLikesOnBejegyzes($likedPost);
        $likeController->decreaseBejegyzesLike($like);
    }
}

// TODO: kommentek lekérése
// TODO: modell kiegészítése a likeok és a kommentek adattagokkal

$smarty->assign("bejegyzesek", $posts);
$smarty->assign("felhasznalo", $felhasznalo);
$smarty->display('profil.tpl');

