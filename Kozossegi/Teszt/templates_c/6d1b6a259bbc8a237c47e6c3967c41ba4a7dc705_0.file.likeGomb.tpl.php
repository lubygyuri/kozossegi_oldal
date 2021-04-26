<?php
/* Smarty version 3.1.39, created on 2021-04-26 15:22:31
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/likeGomb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6086be971bb239_33578342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d1b6a259bbc8a237c47e6c3967c41ba4a7dc705' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/likeGomb.tpl',
      1 => 1619443347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6086be971bb239_33578342 (Smarty_Internal_Template $_smarty_tpl) {
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
