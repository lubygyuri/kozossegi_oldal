<?php
/* Smarty version 3.1.39, created on 2021-04-08 22:31:34
  from '/opt/lampp/htdocs/Kozossego_Oldal/kozossegi_oldal/Kozossegi/Teszt/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606f682656c145_30852698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf0f3e12e7119f248daf022e834eeb3d603acf6d' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossego_Oldal/kozossegi_oldal/Kozossegi/Teszt/templates/index.tpl',
      1 => 1617819029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_606f682656c145_30852698 (Smarty_Internal_Template $_smarty_tpl) {
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
