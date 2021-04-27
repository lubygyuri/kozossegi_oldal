<?php
/* Smarty version 3.1.39, created on 2021-04-27 14:34:19
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\kommentek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608804cb59ace5_38588126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dee65ea0e655afa9f3e129aa5586f2fcaab7f4fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\kommentek.tpl',
      1 => 1619526683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608804cb59ace5_38588126 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="komment<?php ob_start();
echo $_smarty_tpl->tpl_vars['azonosito']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">
    <?php if ($_smarty_tpl->tpl_vars['kommentek']->value) {?>
        <?php $_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['kommentek']->value);?>
        <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? count($_smarty_tpl->tpl_vars['x']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['x']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
            <div class="border border-1 mt-2 rounded align-self-baseline w-100">
                <div class="post-header2">
                    <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getProfilkep();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" rounded="circle"  class="d-inline-block align-top">
                    <div class="post-header-details">
                        <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getVezeteknev();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getKeresztnev();
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</span>
                    </div>
                </div>
                <div>
                    <p class="m-3"><?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getUzenet();
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
 </p>
                </div>
            </div>
        <?php }
}
?>
    <?php }?>
</div><?php }
}
