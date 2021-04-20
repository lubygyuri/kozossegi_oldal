<?php
require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();

if (!isset($_SESSION["email"])){
//    TODO: smarty errors megoldása
    $smarty->assign("errors", null);
    $smarty->display("index.tpl");
    exit();
}

$Bejegyzes = array(
    "nev" => "Teszt elek",
    "szoveg" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    "url" => "https://picsum.photos/seed/picsum/200/300"
);
$Bejegyzes2 = array(
    "nev" => "Magyarország Kormánya",
    "szoveg" => "Break News",
    "url" => "https://cdn.pixabay.com/photo/2016/02/19/11/19/computer-1209641_960_720.jpg"
);
$Bejegyzes3 = array(
    "nev" => "Teszt",
    "szoveg" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    "url" => ""
);

$Bejegyzes4 = array(
    "nev" => "A legenda",
    "szoveg" => "Szoveg szoveg Szoveg szoveg Szoveg szoveg Szoveg szoveg",
    "url" => ""
);

$bejegyzesek= array($Bejegyzes,$Bejegyzes2,$Bejegyzes3,$Bejegyzes4);

$smarty->assign("tomb",$bejegyzesek);


$smarty->display('Uzenofal.tpl');

