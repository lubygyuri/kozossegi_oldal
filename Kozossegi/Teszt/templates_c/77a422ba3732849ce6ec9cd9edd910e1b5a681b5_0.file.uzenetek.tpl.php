<?php
/* Smarty version 3.1.39, created on 2021-04-08 22:39:39
  from 'D:\XAMPP\htdocs\adatbalapu\kozossegi_oldal\Kozossegi\Teszt\templates\uzenetek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606f6a0b1c7a37_26389615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a422ba3732849ce6ec9cd9edd910e1b5a681b5' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\adatbalapu\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\uzenetek.tpl',
      1 => 1617741957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_606f6a0b1c7a37_26389615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="app">
    <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</p>
</div><?php }
}
