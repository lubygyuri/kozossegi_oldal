<?php
/* Smarty version 3.1.39, created on 2021-05-06 15:20:08
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/klub_leirassal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6093ed083c1e97_45385278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '075215e9b08126b48b27756b1d634cfd6e723d8b' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/klub_leirassal.tpl',
      1 => 1620307207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_6093ed083c1e97_45385278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="app2">
    <div class= "shadow-lg pl-3 pr-3 pb-3 mt-3 bg-white rounded align-self-baseline mr-2 w-75 mb-5 mx-auto">
        <h1 class="mt-3 pt-2 text-center"><?php ob_start();
echo $_smarty_tpl->tpl_vars['klub']->value->getNev();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h1>
        <div class="row mt-3">
            <div class="col">
                <h6>Tagok száma: <?php echo count($_smarty_tpl->tpl_vars['klub']->value->getTagok());?>
</h6>
                <ul class="list-group w-50 klub_leiras_scroll">
                    <?php $_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['klub']->value->getTagok());?>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['x']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['x']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <li class="list-group-item"><?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['i']->value]['VEZETEKNEV'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['i']->value]['KERESZTNEV'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</li>
                    <?php }
}
?>
                </ul>
            </div>
            <div class="col">
                <h3>Leírás</h3>
                <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['klub']->value->getLeiras();
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</span>
            </div>
            <div class="col">
                <h5>Létrehozva</h5><h6><?php ob_start();
echo $_smarty_tpl->tpl_vars['klub']->value->getLetrehozasDatuma();
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</h6>
                <h5>Láthatóság</h5>
                <?php if ($_smarty_tpl->tpl_vars['klub']->value->getLathatosag() == 0) {?>
                    <h6>publikus</h6>
                <?php } else { ?>
                    <h6>privát</h6>
                <?php }?>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['klub']->value->getLathatosag() == 0) {?>
        <div class="mt-3">
            <?php if (!$_smarty_tpl->tpl_vars['csatlakozva']->value) {?>
                <form action="klub_leirassal.php?nev=<?php ob_start();
echo $_smarty_tpl->tpl_vars['klub']->value->getNev();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" method="post">
                    <button class="btn btn-primary w-100" type="submit" name="csatlakozas_submit">Csatlakozas a csoporthoz</button>
                </form>
            <?php } else { ?>
                <form action="klub_leirassal.php?nev=<?php ob_start();
echo $_smarty_tpl->tpl_vars['klub']->value->getNev();
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" method="post">
                    <button class="btn btn-danger w-100" type="submit" name="kilepes_submit">Kilépés a csoportból</button>
                </form>
            <?php }?>
        <?php }?>
        </div>
    </div>
</div><?php }
}
