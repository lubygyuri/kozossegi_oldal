<?php
/* Smarty version 3.1.39, created on 2021-05-06 17:34:30
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/baratKereses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60940c86aec961_79105408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '459579429497ed4d0031320822eaee9a3f2a47f5' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/baratKereses.tpl',
      1 => 1620315261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60940c86aec961_79105408 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="keresesDiv2">
    <ul id="keresesUl" class="list-group" style=" z-index: 1">
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['keresesEredmeny']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['keresesEredmeny']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <li class="list-group-item list-group-item-dark"><a href="profil.php?email=<?php ob_start();
echo $_smarty_tpl->tpl_vars['keresesEredmeny']->value[$_smarty_tpl->tpl_vars['i']->value]->getEmail();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['keresesEredmeny']->value[$_smarty_tpl->tpl_vars['i']->value]->getVezeteknev();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['keresesEredmeny']->value[$_smarty_tpl->tpl_vars['i']->value]->getKeresztnev();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</a></li>
        <?php }
}
?>
    </ul>
</div><?php }
}
