<?php
/* Smarty version 3.1.39, created on 2021-04-26 23:51:35
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\likeGomb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608735e7e54e44_79421851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '462e1ab6f1d41e535b073be40df637a88aafd0f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\likeGomb.tpl',
      1 => 1619444770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608735e7e54e44_79421851 (Smarty_Internal_Template $_smarty_tpl) {
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
