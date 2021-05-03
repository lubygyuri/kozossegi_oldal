<?php
/* Smarty version 3.1.39, created on 2021-05-03 22:04:59
  from 'D:\XAMPP\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\klub_leirassal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6090576ba6ce44_27046559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e29bc1c6d321d4497dead2d481f025d2eb223cd6' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\klub_leirassal.tpl',
      1 => 1620072298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_6090576ba6ce44_27046559 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li class="list-group-item">tag1</li>
                <li class="list-group-item">tag2</li>
                <li class="list-group-item">tag3</li>
                <li class="list-group-item">további x</li>
            </ul>
        </div>
        <button class="btn btn-primary w-100" type="submit" >Csatlakozas a csoporthoz</button>
    </div>
</div><?php }
}
