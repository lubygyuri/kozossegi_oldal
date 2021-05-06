<?php
/* Smarty version 3.1.39, created on 2021-05-06 15:34:03
  from 'D:\XAMPP\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\ertesitesekSzama.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6093f04b320879_87559655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0111adcccd6431aabe2237e72a86963a246b6f27' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\ertesitesekSzama.tpl',
      1 => 1620307786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6093f04b320879_87559655 (Smarty_Internal_Template $_smarty_tpl) {
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
