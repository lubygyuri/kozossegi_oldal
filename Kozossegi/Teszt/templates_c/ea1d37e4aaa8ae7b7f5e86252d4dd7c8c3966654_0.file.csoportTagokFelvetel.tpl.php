<?php
/* Smarty version 3.1.39, created on 2021-05-09 03:57:57
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\csoportTagokFelvetel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609741a503aa75_27662351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea1d37e4aaa8ae7b7f5e86252d4dd7c8c3966654' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\csoportTagokFelvetel.tpl',
      1 => 1620525473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609741a503aa75_27662351 (Smarty_Internal_Template $_smarty_tpl) {
?><select name="groupMember" id="members" class="form-select mt-3 p-2 h-25 w-100" aria-label="Csoporttag kiválasztása">
    <?php if (count($_smarty_tpl->tpl_vars['csoportTagok']->value) != 0) {?>
        <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportTagok']->value[0]->getEmail();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" selected><?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportTagok']->value[0]->getVezeteknev();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportTagok']->value[0]->getKeresztnev();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</option>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['csoportTagok']->value)-1+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['csoportTagok']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportTagok']->value[$_smarty_tpl->tpl_vars['i']->value]->getEmail();
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportTagok']->value[$_smarty_tpl->tpl_vars['i']->value]->getVezeteknev();
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportTagok']->value[$_smarty_tpl->tpl_vars['i']->value]->getKeresztnev();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</option>
        <?php }
}
?>
    <?php } else { ?>
        <option selected>Minden barátod hozzáadtad már ehhez a csoporthoz</option>
    <?php }?>
</select><?php }
}
