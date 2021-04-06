<?php
/**
 * Example Application
 *
 * @package Example-application
 */



require '../libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->assign("value", "dsadasdasd");

$smarty->display('uzenetek.tpl');



