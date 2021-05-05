<?php
/* Smarty version 3.1.39, created on 2021-05-05 23:47:24
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\ertesitesekSzama.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6093126ced3aa4_26318884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d37cb69fd7c6b6d9cc2f7af33407c530f1ae2cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\ertesitesekSzama.tpl',
      1 => 1620251243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6093126ced3aa4_26318884 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ertesitesekSzama']->value > 0) {?>
    <span id="ertesitesekSzama">(<?php ob_start();
echo $_smarty_tpl->tpl_vars['ertesitesekSzama']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
)</span>
<?php } else { ?>
    <span id="ertesitesekSzama"></span>
<?php }
}
}
