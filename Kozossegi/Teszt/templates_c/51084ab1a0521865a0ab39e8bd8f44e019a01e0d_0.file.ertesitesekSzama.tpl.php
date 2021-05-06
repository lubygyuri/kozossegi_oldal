<?php
/* Smarty version 3.1.39, created on 2021-05-06 14:20:58
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/ertesitesekSzama.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6093df2ac4bdd2_39964846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51084ab1a0521865a0ab39e8bd8f44e019a01e0d' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/ertesitesekSzama.tpl',
      1 => 1620303631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6093df2ac4bdd2_39964846 (Smarty_Internal_Template $_smarty_tpl) {
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
