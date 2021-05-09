<?php
/* Smarty version 3.1.39, created on 2021-05-09 13:05:44
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6097c2081fead8_52811817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62f8b4637740047d0a0745a42a76928639a39447' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\index.php',
      1 => 1619526683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6097c2081fead8_52811817 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
/**
 * Example Application
 *
 * @package Example-application
 */



require '../libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->assign("errors", null);
$smarty->display('index.tpl');



<?php }
}
