<?php
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';

require '../libs/Smarty.class.php';

$smarty = new Smarty;
session_start();



$bejegyzesController = new BejegyzesController();
$likeController = new LikeController();


    $like = new Like();
    $likedPost = new Bejegyzes();
    $like->setBejegyzesAzonosito($_GET["id"]);
//    Azért session email, mert arra vagyunk kíváncsiak, hogy aki be van jelentkezve annak hogy látszik a likeolása
    $like->setFelhasznaloAzonosito($_SESSION["email"]);
    $likedPost->setAzonosito($_GET["id"]);

    if(isset($_GET['klub'])){
     /*   var_dump($likeController->klubAlreadyLikedPost($like));
        die();*/
        if (!$likeController->klubAlreadyLikedPost($like)) { //like
           // $bejegyzesController->updateLikesOnBejegyzes($likedPost); // ????
            $likeController->klubIncreaseBejegyzesLike($like); // beszurja a like-ot
            $smarty->assign("like",true);
            $smarty->assign("azonosito",$_GET["id"]);
        } else { //unlike
          //  $bejegyzesController->deleteLikesOnBejegyzes($likedPost); // ???
            $likeController->klubDecreaseBejegyzesLike($like); // torol
            $smarty->assign("like",false);
            $smarty->assign("azonosito",$_GET["id"]);
        }
    }else {
        if (!$likeController->alreadyLikedPost($like)) { //like
            $bejegyzesController->updateLikesOnBejegyzes($likedPost);
            $likeController->increaseBejegyzesLike($like);
            $smarty->assign("like",true);
            $smarty->assign("azonosito",$_GET["id"]);
        } else { //unlike
            $bejegyzesController->deleteLikesOnBejegyzes($likedPost);
            $likeController->decreaseBejegyzesLike($like);
            $smarty->assign("like",false);
            $smarty->assign("azonosito",$_GET["id"]);
        }
    }

$smarty->display('likeGomb.tpl');

