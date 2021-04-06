<?php
/* Smarty version 3.1.39, created on 2021-04-06 22:41:15
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\uzenetek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606cc76b8b0784_09259411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '384aab2ccffe3e3fa45ec699e3298a54df090614' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\uzenetek.tpl',
      1 => 1617741675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_606cc76b8b0784_09259411 (Smarty_Internal_Template $_smarty_tpl) {
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
