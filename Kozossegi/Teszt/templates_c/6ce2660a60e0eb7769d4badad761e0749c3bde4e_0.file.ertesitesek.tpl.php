<?php
/* Smarty version 3.1.39, created on 2021-05-04 18:03:18
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/ertesitesek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60917046155ff9_46930246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ce2660a60e0eb7769d4badad761e0749c3bde4e' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/ertesitesek.tpl',
      1 => 1620143963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60917046155ff9_46930246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ertesitesek-container">
    <ul class="list-group">
    <?php if ($_smarty_tpl->tpl_vars['ertesitesek']->value) {?>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ertesitesek']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ertesitesek']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <li class="list-item">
                <form action="ertesitesek.php?ertesites_azonosito=<?php ob_start();
echo $_smarty_tpl->tpl_vars['ertesitesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" method="post" class="ertesitesek-form">
                    <i class="fas fa-bell"></i>
                    <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['ertesitesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getUzenet();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</p>
                    <button type="submit" name="ertesitest_torol"><i class="fas fa-trash"></i></button>
                </form>
            </li>
        <?php }
}
?>
    <?php } else { ?>
        <li class="list-item p-2" style="text-align: center"><p class="mb-0">Nincsenek új értesítéseid...</p></li>
    <?php }?>
    </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
