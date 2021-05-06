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
$activ='';
$kulobok = array();
$kulobok = klubblistafrissites();

//klubbok



function klubblistafrissites(){
    $klubController =new KlubController();
    $kulobok = array();
    $klubokData = $klubController->getKlubAll($_SESSION["email"]);
    foreach ($klubokData as $klubData) {
        $klub = new Klub();
        $klub->setNev($klubData['NEV']);
        array_push($kulobok, $klub);
    }
    return $kulobok;
}



//klubb azonosito
$posts = array();
if(isset($_GET["id"])){
    $x=$_GET["id"];
}else {
    if($kulobok !=null){
        $x=$kulobok[0]->getNev();
    }else {
        $smarty->assign("error", 'Nem vagy egy klubba se be lépve!');
        $smarty->display('klub.tpl');
        die();
    }
    //TODO Legyen egy alapértelmezett klubb amibe mindenki bele kerül és nem lehet belőle kilépni
}
$activ=$x;

//klubb létrehozása

if(isset($_POST["submit_klub"])) {
    $ujklubb = new Klub();
    $ujklubb -> setNev($_POST["klub_name"]);
    $ujklubb ->setLeiras($_POST["leiras"]);
    $ujklubb -> setLathatosag($_POST["lathatosag"]);
    $ujklubb -> setAdminFelhasznalo($_SESSION["email"]);
    $klubController -> createClub($ujklubb);
    $klubController ->createKlubTag($ujklubb->getNev(),$_SESSION['email']);
    $kulobok = klubblistafrissites();

}


// Bejegyzés közzététel
if(isset($_POST["submit"])) {
    $bejegyzes = new Bejegyzes();
    $bejegyzes->setUzenet($_POST['text']);
    $bejegyzes->setFelhasznaloAzonosito($_SESSION["email"]);
    $bejegyzes->setKep($kepController->kepFeltoltes('postImgUzenofal'));
    $bejegyzes->setKlubAzonosito($_POST['klubAzonosito']);
    $bejegyzesController->createPost($bejegyzes);
    $activ=$_POST['klubAzonosito'];
}

// Bejegyzések listázása

$postsData = $bejegyzesController->getPostsByKlubAzonosito($activ);
if ($postsData) {
    foreach ($postsData as $postData) {
        $post = new KlubBejegyzes();
        $post->setAzonosito($postData["AZONOSITO"]);
        $post->setUzenet($postData["UZENET"]);

        // Idő konvertálás
        $dt = DateTime::createFromFormat("d#M#y H#i#s*A", $postData["LETREHOZAS_IDEJE"]);
        $fdt = $dt->format('m-d H:i');
        $post->setLetrehozasIdeje($fdt);

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
        if (!$likeController->klubIsPostLiked($like)) {
            $post->setIsLiked(false);
        } else {
            $post->setIsLiked(true);
        }
        $post->setLikeCount($bejegyzesController->likeCount($post)['LIKE_COUNT']);

        array_push($posts, $post);
    }
}






// Bejelentkezett felhasználó megjelenítése
$bejelentkezettF = new Felhasznalo();
$bejelentkezettF->setProfilkep($_SESSION["profilkep"]);
$bejelentkezettF->setKeresztnev($_SESSION["keresztnev"]);
$bejelentkezettF->setVezeteknev($_SESSION["vezeteknev"]);
$bejelentkezettF->setEmail($_SESSION["email"]);

$smarty->assign("error", null);
$smarty->assign("aktiv", $activ);
$smarty->assign("klubbok",$kulobok);
$smarty->assign("bejegyzesek",$posts);
$smarty->assign("belepettFelhasznalo", $bejelentkezettF);


$smarty->display('klub.tpl');

