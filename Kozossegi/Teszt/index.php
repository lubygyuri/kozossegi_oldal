<?php
require '../libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->assign("errors", null);
$smarty->display('index.tpl');
