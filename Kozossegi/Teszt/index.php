<?php
/**
 * Example Application
 *
 * @package Example-application
 */



require '../libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->assign("valeu", "pelda");

$smarty->display('index.tpl');



