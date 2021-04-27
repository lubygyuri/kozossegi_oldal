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


// Controllerek példányosítása
$felhasznaloController = new FelhasznaloController();
$bejegyzesController = new KlubBejegyzesController();
$kepController = new KepController();
$kommentController = new KommentController();
$likeController = new LikeController();
$klubController =new KlubController();

// Bejegyzés közzététel
if(isset($_POST["submit"])) {
    $bejegyzes = new Bejegyzes();
    $bejegyzes->setUzenet($_POST['text']);
    $bejegyzes->setFelhasznaloAzonosito($_SESSION["email"]);
    $bejegyzes->setKep($kepController->kepFeltoltes('postImgUzenofal'));
    $bejegyzesController->createPost($bejegyzes);
}

// Bejegyzések listázása
$posts = array();
$postsData = $bejegyzesController->getPostsByKlubAzonosito("Teszt");
if ($postsData) {
    foreach ($postsData as $postData) {
        $post = new KlubBejegyzes();
        $post->setAzonosito($postData["AZONOSITO"]);
        $post->setUzenet($postData["UZENET"]);
        $post->setLetrehozasIdeje($postData["LETREHOZAS_DATUMA"]);
        $post->setKep($postData["KEP"]);

        $user = $felhasznaloController->getUserFromDB($postData["FELHASZNALO_AZONOSITO"]);

        $felhasznalo = new Felhasznalo();
        $felhasznalo->setProfilkep($user['PROFILKEP']);
        $felhasznalo->setVezeteknev($user['VEZETEKNEV']);
        $felhasznalo->setKeresztnev($user['KERESZTNEV']);

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
        $post->setFelhasznaloAzonosito($felhasznalo);

        $like = new Like();
        $like->setBejegyzesAzonosito($post->getAzonosito());
        $like->setFelhasznaloAzonosito($_SESSION["email"]);
        if (!$likeController->isPostLiked($like)) {
            $post->setIsLiked(false);
        } else {
            $post->setIsLiked(true);
        }

        array_push($posts, $post);
    }
}


//klubbok
$kulobok = array();
$klubokData = $klubController->getKlubAll();

foreach ($klubokData as $klubData) {
    $klub = new Klub();
    $klub->setNev($klubData['NEV']);
    array_push($kulobok, $klub);
}



// Bejelentkezett felhasználó megjelenítése
$bejelentkezettF = new Felhasznalo();
$bejelentkezettF->setProfilkep($_SESSION["profilkep"]);
$bejelentkezettF->setKeresztnev($_SESSION["keresztnev"]);
$bejelentkezettF->setVezeteknev($_SESSION["vezeteknev"]);
$bejelentkezettF->setEmail($_SESSION["email"]);

$smarty->assign("klubbok",$kulobok);
$smarty->assign("bejegyzesek",$posts);
$smarty->assign("belepettFelhasznalo", $bejelentkezettF);


$smarty->display('klub.tpl');

