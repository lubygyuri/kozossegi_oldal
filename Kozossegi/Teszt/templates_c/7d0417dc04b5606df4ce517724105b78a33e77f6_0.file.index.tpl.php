<?php
/* Smarty version 3.1.39, created on 2021-04-06 22:30:15
  from '/opt/lampp/htdocs/Kozossegi/Teszt/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606cc4d74f4467_25364278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d0417dc04b5606df4ce517724105b78a33e77f6' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/Teszt/templates/index.tpl',
      1 => 1617739539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_606cc4d74f4467_25364278 (Smarty_Internal_Template $_smarty_tpl) {
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
