<?php
/* Smarty version 3.1.39, created on 2021-05-05 01:09:39
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\klub_leirassal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6091d433d336b6_52834236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c7903b260c81eb18f6e0efa8e4452534af36154' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\klub_leirassal.tpl',
      1 => 1620169750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_6091d433d336b6_52834236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="app2">
    <div class= "shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 w-75 mb-5 mx-auto">
        <h1 class="mt-3 pt-2 text-center"><?php ob_start();
echo $_smarty_tpl->tpl_vars['klub']->value->getNev();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h1>
        <div>
            <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['klub']->value->getLeiras();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</span>
        </div>
        <div>
            <ul class="list-group">
                <?php $_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['klub']->value->getTagok());?>
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['x']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['x']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <li class="list-group-item"><?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['i']->value]['VEZETEKNEV'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['i']->value]['KERESZTNEV'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</li>
                <?php }
}
?>
            </ul>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['csatlakozva']->value) {?>
            <form action="klub_leirassal.php?nev=<?php ob_start();
echo $_smarty_tpl->tpl_vars['klub']->value->getNev();
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" method="post">
                <button class="btn btn-primary w-100" type="submit" name="csatlakozas_submit">Csatlakozas a csoporthoz</button>
            </form>
        <?php } else { ?>
            <form action="klub_leirassal.php?nev=<?php ob_start();
echo $_smarty_tpl->tpl_vars['klub']->value->getNev();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" method="post">
                <button class="btn btn-danger w-100" type="submit" name="kilepes_submit">Kilépés a csoportból</button>
            </form>
        <?php }?>

    </div>
</div><?php }
}
