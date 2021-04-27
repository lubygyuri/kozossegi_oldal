<?php
/* Smarty version 3.1.39, created on 2021-04-27 10:54:38
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/kereses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6087d14eb43662_96427760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '478522a256ec5d8f80b4129bfaf27707379bfd30' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/kereses.tpl',
      1 => 1619513636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6087d14eb43662_96427760 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="keresesDiv">
    <ul id="keresesUl" class="list-group" style="position: absolute; z-index: 1; width: 100%">
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['keresesEredmeny']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['keresesEredmeny']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <li class="list-group-item"><a href="profil.php?email=<?php ob_start();
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
