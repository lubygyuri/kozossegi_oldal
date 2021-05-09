<?php
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';

require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();

if (!isset($_SESSION["email"])) {
    header("Location: index.php");
    exit();
}

// Controllerek példányosítása
$bejegyzesController = new BejegyzesController();
$bejegyzesControllerKlub = new KlubBejegyzesController();
$likeController = new LikeController();


    $like = new Like();
    $likedPost = new Bejegyzes();
    $likedPostKlub = new KlubBejegyzes();
    $like->setBejegyzesAzonosito($_GET["id"]);
    // Azért session email, mert arra vagyunk kíváncsiak, hogy aki be van jelentkezve annak hogy látszik a likeolása
    $like->setFelhasznaloAzonosito($_SESSION["email"]);
    $likedPost->setAzonosito($_GET["id"]);
    $likedPostKlub->setAzonosito($_GET["id"]);
    if(isset($_GET['klub'])){ //klubb like
        if (!$likeController->klubAlreadyLikedPost($like)) { //like
            $likeController->klubIncreaseBejegyzesLike($like); // beszurja a like-ot
            $smarty->assign("like",true);
        } else { //unlike
            $likeController->klubDecreaseBejegyzesLike($like); // torol
            $smarty->assign("like",false);
        }
        $smarty->assign("bejegyzes",$likedPostKlub);
        $likedPostKlub->setLikeCount($bejegyzesControllerKlub->likeCount($likedPostKlub)['LIKE_COUNT']);
        $smarty->display('klubLikeGomb.tpl');
    }else { // sima like
        if (!$likeController->alreadyLikedPost($like)) { //like
            $likeController->increaseBejegyzesLike($like);
            $smarty->assign("like",true);
        } else { //unlike
            $likeController->decreaseBejegyzesLike($like);
            $smarty->assign("like",false);
        }
        $smarty->assign("bejegyzes",$likedPost);
        $likedPost->setLikeCount($bejegyzesController->likeCount($likedPost)['LIKE_COUNT']);
        $smarty->display('likeGomb.tpl');
    }



