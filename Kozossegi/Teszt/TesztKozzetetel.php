<?php

include $_SERVER['DOCUMENT_ROOT']."/Teszt/Model/VarosokModel.php";
$m=new MegyekModel();
$v=new VarosokModel();


require '../libs/Smarty.class.php';
$smarty = new Smarty;

$received_data = json_decode(file_get_contents("php://input")); // vezérlő
$nev = $received_data[0];
$szoveg = $received_data[1];
$url = $received_data[1];


$Bejegyzes3 = array(
    "nev" => $nev,
    "szoveg" => $szoveg,
    "url" => $url
);



/*$bejegyzesek= array($Bejegyzes3);

$smarty->assign("tomb",$bejegyzesek);


$smarty->display('Uzenofal.tpl');*/

echo json_encode('done'); // vezérlő



?>