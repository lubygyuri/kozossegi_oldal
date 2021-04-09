<?php
/* Smarty version 3.1.39, created on 2021-04-09 10:36:34
  from '/opt/lampp/htdocs/Kozossego_Oldal/kozossegi_oldal/Kozossegi/Teszt/templates/Uzenofal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60701212e85ec2_91543913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '083c0661bce11cf08fa27e7c0ed75de46107cf17' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossego_Oldal/kozossegi_oldal/Kozossegi/Teszt/templates/Uzenofal.tpl',
      1 => 1617957393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60701212e85ec2_91543913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="app2"  class="container px-4 mt-5">
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['tomb']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['tomb']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <div class= "shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-50 p-3 mb-5"><b-row ><b-navbar variant="faded" type="light"><b-navbar-brand href="#"><b-img src="https://placekitten.com/g/30/30" class="d-inline-block align-top"></b-img><?php ob_start();
echo $_smarty_tpl->tpl_vars['tomb']->value[$_smarty_tpl->tpl_vars['i']->value]['nev'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</b-navbar-brand></b-navbar><div ><p class="m-3"> <?php ob_start();
echo $_smarty_tpl->tpl_vars['tomb']->value[$_smarty_tpl->tpl_vars['i']->value]['szoveg'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</p><?php if ($_smarty_tpl->tpl_vars['tomb']->value[$_smarty_tpl->tpl_vars['i']->value]['url'] != '') {?><b-img src=" <?php ob_start();
echo $_smarty_tpl->tpl_vars['tomb']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" class="rounded mx-auto d-block" fluid alt="Fluid image"></b-img><?php }?></div></b-row><b-row class="mt-5"><b-col cols="auto" class=""><b-button-group><b-button  variant="light"><b-icon icon="heart" aria-hidden="true"></b-icon> Tetszik</b-button><b-button v-b-toggle.my-collapse @click="asd" variant="light"><b-icon  icon="chat-left" aria-hidden="true"></b-icon> Hozzászólás</b-button><b-button  variant="light"><b-icon icon="box-arrow-up-right" aria-hidden="true"></b-icon> Megosztás</b-button></b-button-group><template><b-collapse id="my-collapse"><b-card title="Collapsible card">Hello world!</b-card></b-collapse></template></b-col></b-row></div>
    <?php }
}
?>
</div>
<?php }
}
