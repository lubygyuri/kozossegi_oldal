<?php
/* Smarty version 3.1.39, created on 2021-04-06 22:36:43
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606cc65b3b9fe4_92786667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe69ad81fd771ad73c1c79f9600b98a97e5d6094' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\index.tpl',
      1 => 1617741264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_606cc65b3b9fe4_92786667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="app">
  <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['valeu']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</p>
</div><?php }
}
