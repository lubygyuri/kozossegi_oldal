<?php
/* Smarty version 3.1.39, created on 2021-05-05 23:16:38
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\menu.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60930b36561de1_10185270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eefc4b9b7e09e2e4f3ca9fe932ec531209b35fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\menu.php',
      1 => 1620249307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60930b36561de1_10185270 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
include 'includes/classAutoLoad.php';
include 'includes/controllerAutoLoad.php';

require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();

$smarty->assign("ertesitesekSzama", 2);
$smarty->display("menu.tpl");
<?php }
}
