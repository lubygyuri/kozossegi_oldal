<?php
/* Smarty version 3.1.39, created on 2021-05-03 20:57:13
  from 'D:\XAMPP\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\likeGomb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60904789ed0f56_41604411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '077ed4d3d892c7bab37b39b02a261c45e3f6af66' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\likeGomb.tpl',
      1 => 1619447378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60904789ed0f56_41604411 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['azonosito']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">
        <?php if ($_smarty_tpl->tpl_vars['like']->value) {?>
                <button onclick="like(<?php ob_start();
echo $_smarty_tpl->tpl_vars['azonosito']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
)" type="submit" name="likePost"><i class="fas fa-heart"></i>Tetszik</button>
        <?php } else { ?>
                <button onclick="like(<?php ob_start();
echo $_smarty_tpl->tpl_vars['azonosito']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
)" type="submit" name="likePost"><i class="far fa-heart"></i>Tetszik</button>
        <?php }?>
</div><?php }
}
