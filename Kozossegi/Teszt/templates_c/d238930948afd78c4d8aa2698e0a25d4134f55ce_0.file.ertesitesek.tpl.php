<?php
/* Smarty version 3.1.39, created on 2021-05-05 17:08:13
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\ertesitesek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6092b4dd9316b0_44259670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd238930948afd78c4d8aa2698e0a25d4134f55ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\ertesitesek.tpl',
      1 => 1620227291,
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
function content_6092b4dd9316b0_44259670 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="ertesitesek-timer">
                        <small><?php ob_start();
echo $_smarty_tpl->tpl_vars['ertesitesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getErtesitesIdeje();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</small>
                        <button type="submit" name="ertesitest_torol"><i class="fas fa-trash"></i></button>
                    </div>
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
