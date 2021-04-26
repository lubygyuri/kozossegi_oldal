<?php
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';



var_dump($_GET['id']);
die();

/*$received_data = json_decode(file_get_contents("php://input")); // vezérlő
$bejegyzes_azonosito = $received_data;




$controller = new KommentController();


$posts = array();
$postsData = $controller->getKommentByBejegyzes($bejegyzes_azonosito);

if ($postsData) {
    foreach ($postsData as $postData) {
        /*$komm = new Komment();
        $komm->setAzonosito($postData["AZONOSITO"]);
        $komm->setUzenet($postData["UZENET"]);
        $komm->setFelhasznaloAzonosito($postData["FELHASZNALO_AZONOSITO"]);
        $komm->setBejegyzesAzonosito($postData["BEJEGYZES_AZONOSITO"]);
        array_push($posts, $komm);
        array_push($posts, $postData["UZENET"]);
    }
}
/*
echo json_encode(array("komment" => $posts )); // vezérlő*/

