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
$ismerosController = new IsmerosController();

// Profil oldalon megjelenő személy
if (isset($_GET["email"])) {
    if ($felhasznaloController->getUserFromDB($_GET["email"])) {

        // Profilkép feltöltése (POST)
        if (isset($_POST['profileImgUpload'])) {
            $link = $kepController->kepFeltoltes('profileImg');

            if (!$link == '') {
                $_SESSION["profilkep"] = $link;
                $felhasznaloController->updateProfileImg($link ,$_SESSION["email"]);
            }
        }

        // Profil adatainak megváltoztatása (POST)
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

        // Bejegyzés közzététel (POST)
        if(isset($_POST['createPost'])) {
            $link = $kepController->kepFeltoltes('postImage');
            $bejegyzes = new Bejegyzes();
            $bejegyzes->setUzenet($_POST['text']);
            $bejegyzes->setFelhasznaloAzonosito($_SESSION["email"]);
            $bejegyzes->setKep($link);
            $bejegyzesController->createPost($bejegyzes);
        }

        // Barátkérelem küldése (POST)
        if (isset($_POST["friendRequest"])) {
            $ismeros = new Ismeros();
            $ismeros->setStatusz(0);
            $ismeros->setFelhasznalo1($_SESSION["email"]);
            $ismeros->setFelhasznalo2($_GET["email"]);
            $ismerosController->addFriend($ismeros);
        }

        // Profilhoz tartozó adatok lekérése (GET)
        $data = $felhasznaloController->getUserFromDB($_GET["email"]);

        $felhasznalo = new Felhasznalo();
        $felhasznalo->setEmail($data["EMAIL"]);
        $felhasznalo->setVezeteknev($data["VEZETEKNEV"]);
        $felhasznalo->setKeresztnev($data["KERESZTNEV"]);
        $felhasznalo->setSzuletesiDatum($data["SZULETESI_DATUM"]);
        $felhasznalo->setNeme($data["NEME"]);
        $felhasznalo->setIskola($data["ISKOLA"]);
        $felhasznalo->setMunkahely($data["MUNKAHELY"]);
        $felhasznalo->setProfilkep($data["PROFILKEP"]);

        // Adott profil posztjainak lekérése (GET)
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

                // Likeolta-e már a bejelentkezett felhasználó a posztot (POST) Ez jól működik
                $like = new Like();
                $like->setBejegyzesAzonosito($post->getAzonosito());
                $like->setFelhasznaloAzonosito($_SESSION["email"]);
                if (!$likeController->isPostLiked($like)) {
                    $post->setIsLiked(false);
                } else {
                    $post->setIsLiked(true);
                }

                // Kommentek lekérése (GET)
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

        // Bejegyzés likeolása (POST) Ez jól működik
        if (isset($_POST["likePost"])) {
            $like = new Like();
            $likedPost = new Bejegyzes();
            $like->setBejegyzesAzonosito($_POST["bejegyzesAzonosito"]);
            // Azért session email, mert arra vagyunk kíváncsiak, hogy aki be van jelentkezve annak hogy látszik a likeolása
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

        // Bejelentkezett felhasználó megjelenítése
        $bejelentkezettF = new Felhasznalo();
        $bejelentkezettF->setEmail($_SESSION["email"]);

        $smarty->assign("belepettFelhasznalo", $bejelentkezettF);
        $smarty->assign("bejegyzesek", $posts);
        $smarty->assign("felhasznalo", $felhasznalo);
        $smarty->display('profil.tpl');

    } else {
//        header("Location: profil.php?email=".$_SESSION["email"]);
        die("Nem található ilyen felhasználó!");
    }
} else {
    header("Location: profil.php?email=".$_SESSION["email"]);
}

