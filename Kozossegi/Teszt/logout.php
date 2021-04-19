<?php

require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();
session_unset();
session_destroy();

// TODO: smarty index error javítása
$smarty->assign("errors", null);
$smarty->display("index.tpl");
